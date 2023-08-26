<?php
/**
 * Bookworm Child
 *
 * @package bookworm-child
 */
add_filter('Yoast\WP\SEO\term_redirect_slug_change', '__return_true' );
add_filter('Yoast\WP\SEO\post_redirect_slug_change', '__return_true' );
set_time_limit(2000);
ini_set('max_execution_time', '0');
 //ini_set('display_startup_errors', 1);
 //ini_set('display_errors', 1);
 //error_reporting(E_ALL); 
/**
 * Include all your custom code here
 */
add_action('wp_enqueue_scripts', 'child_wp_enqueue_scripts', 30);
function child_wp_enqueue_scripts() {
	global $bookworm_version;
	wp_enqueue_script( 'bookworm-script-js', get_stylesheet_directory_uri() . '/js/script.js', array( 'bootstrap', 'jquery-zeyneyp', 'hs-unfold', 'hs-slick-carousel', 'hs-fancybox'  ), $bookworm_version, true );
}

/**
 * Remove the password strength meter script from the scripts queue
 * you can also use wp_print_scripts hook
 */
add_action( 'wp_enqueue_scripts', 'child_deactivate_pass_strength_meter', 10 );
function child_deactivate_pass_strength_meter() {
	wp_dequeue_script( 'wc-password-strength-meter' ); 
}

/**
 * Create Woocommerce Custom  
 */
add_action('woocommerce_product_options_general_product_data', 'child_woocommerce_product_custom_fields'); 
function child_woocommerce_product_custom_fields() {
	global $woocommerce, $post;
	echo '<div class="product_custom_field">';
		woocommerce_wp_text_input(
			array(
				'id' => '_bks_product_isbn_field',
				'placeholder' => 'Enter ISBN',
				'label' => __('ISBN Number', 'woocommerce'),
				'desc_tip' => 'true'
			)
		);
	echo '</div>';
}

/**
 * Save Woocommerce field Data
 */
add_action('woocommerce_process_product_meta', 'child_woocommerce_product_custom_fields_save'); 
function child_woocommerce_product_custom_fields_save($post_id) {
	$_bks_product_isbn_field = $_POST['_bks_product_isbn_field'];
	if (!empty($_bks_product_isbn_field)) {
		update_post_meta($post_id, '_bks_product_isbn_field', esc_attr($_bks_product_isbn_field));
		update_field('isbn-13', esc_attr($_bks_product_isbn_field), $post_id);
	}
} 

/**
 * ISBN Number Search
 */
add_action('admin_menu', 'child_custom_submenu_page'); 
function child_custom_submenu_page() {
    add_submenu_page(
        'edit.php?post_type=product',
        'ISBN Search',
        'ISBN Search',
        'manage_isbn_search',
        'isbn_search',
        'child_custom_submenu_page_callback' );
		
 	if( current_user_can( 'vendor' ) ) {
		add_submenu_page(
        'edit.php?post_type=product',
        'Payments',
        'Payments',
        'manage_options',
        'vendor_payments',
        'child_vendor_submenu_page_callback' );
	}	 
}
 
function child_custom_submenu_page_callback() {
    include 'admin/isbn-search.php';
} 

/* function child_vendor_submenu_page_callback() {
	include 'admin/vendor-payment.php';
} */

/**
 * Alter Search Query
 */
function child_pre_get_posts($query) {
	if (!empty($_GET['s'])) {	
		if ( ! is_admin() && $query->is_main_query() && $query->is_search() ) {
			if (preg_match('/^[0-9-]*$/', $_GET['s'])) {
			    $string = str_replace('-', '', $_GET['s']);
				$meta_query = array(
					'relation' => 'OR',
					array(
						'key' => '_bks_product_isbn_field',
						'value' => $_GET['s'],
						'compare' => '='
					),
					array(
						'key' 		=> 'isbn-13',
						'value' 	=> $string,
						'compare' 	=> '='
					)
				);
				$query->set('meta_query', $meta_query);
				$query->set('s', '');
			}
		}
	}
}
add_action('pre_get_posts', 'child_pre_get_posts'); 

/**
 * Update primary menu
 */
add_action( 'init', 'remove_parent_action');
function remove_parent_action() {
   add_post_type_support( 'product',  array(  'author' ) );
   remove_action( 'bookworm_masthead_v1', 'bookworm_site_navigation_v1', 30 ); 
   remove_action( 'bookworm_masthead_v1', 'bookworm_site_search_v1', 40 ); 
   remove_action( 'bookworm_masthead_v1', 'bookworm_site_branding_v1', 20 ); 
   remove_action( 'bookworm_site_info', 'bookworm_language_currency', 20 );
   remove_action( 'woocommerce_account_dashboard', 'bookworm_wc_account_dashboard_icons', 10 );
   remove_action( 'bookworm_before_footer_widgets_v1', 'bookworm_footer_newsletter', 10 );
   remove_action( 'woocommerce_after_account_navigation', 'bookworm_wc_account_content_wrapper_start', 10 );
} 

add_action( 'woocommerce_after_account_navigation', 'child_bookworm_wc_account_content_wrapper_start', 10 );
function child_bookworm_wc_account_content_wrapper_start() {
	?>
	<div id="main-my-account-section" class="col-md-9">
		<div class="pt-5 pt-lg-8 pl-md-5 pl-lg-9 space-bottom-2 space-bottom-lg-3 mb-xl-1">
	<?php
}

add_action( 'bookworm_masthead_v1', 'child_bookworm_site_navigation_v1', 30 );
if (!function_exists('child_bookworm_site_navigation_v1')) {
	function child_bookworm_site_navigation_v1(){
		if ( has_nav_menu( 'primary' ) ):
        ?><div class="site-navigation mr-auto d-none d-xl-block">
            <?php
                $headerPrimaryMenuSlug = apply_filters( 'bookworm_primary_menu' , '' );
                $primary_menu_args     = apply_filters( 'bookworm_primary_menu_args', [
                    'theme_location'      => 'primary',
                    'walker'              => new WP_Bootstrap_Navwalker(),
                    'menu_class'          => 'nav',
                    'container'           => false,
                    'nav_link_class'      => 'nav-link link-black-100 mx-2 px-0 py-5 font-weight-medium',
                    'submenu_link_class'  => 'link-black-100',
                    'dropdown_menu_class' => 'font-size-2',
                ] );
                if( ! empty( $headerPrimaryMenuSlug ) ) {
                    $primary_menu_args['menu'] = $headerPrimaryMenuSlug;
                }
                wp_nav_menu( $primary_menu_args );
            ?>
        </div><?php
        endif;
	}
}

add_action( 'bookworm_masthead_v1', 'child_bookworm_site_search_v1', 40 );
if ( ! function_exists( 'child_bookworm_site_search_v1' ) ) {
    function child_bookworm_site_search_v1() {
        if ( apply_filters('bookworm_enable_site_search' , true ) ):
        ?><div class="site-search ml-xl-0 ml-md-auto w-r-100">
            <?php if ( bookworm_is_woocommerce_activated() ) : ?>
                <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="form-inline my-2 my-xl-0">
                    <label for="s" class="sr-only"><?php echo esc_html__( 'Search', 'bookworm' ); ?></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <i class="glph-icon flaticon-loupe input-group-text py-2d75 bg-white-100 border-white-100"></i>
                        </div>
                        <input type="text" class="form-control bg-white-100 min-width-380 py-2d75 height-4 border-white-100" name="s" id="s" placeholder="<?php esc_attr_e( 'Search: Book Name, ISBN, Pastpapers Code', 'bookworm' ); ?>" style="width:250px"/>
                        <input type="hidden" id="search-param" name="post_type" value="product" />
                    </div>
                    <input type="submit" class="submit btn btn-outline-success my-2 my-sm-0 sr-only" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'bookworm' ); ?>" />
                </form>
            <?php else : ?>
                <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="form-inline my-2 my-xl-0">
                    <label for="s" class="sr-only"><?php echo esc_html__( 'Search', 'bookworm' ); ?></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <i class="glph-icon flaticon-loupe input-group-text py-2d75 bg-white-100 border-white-100"></i>
                        </div>
                        <input type="text" class="form-control bg-white-100 min-width-380 py-2d75 height-4 border-white-100" name="s" id="s" placeholder="<?php esc_attr_e( 'Search: Book Name, ISBN, Categories', 'bookworm' ); ?>" />
                        <input type="hidden" id="search-param" name="post_type" value="post" />
                    </div>
                    <input type="submit" class="submit btn btn-outline-success my-2 my-sm-0 sr-only" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'bookworm' ); ?>" />
                </form>
            <?php endif; ?>
        </div><?php
    endif;
    }
}

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Logo Settings',
		'menu_title'	=> 'Logo Settings',
		'menu_slug' 	=> 'logo-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

add_action( 'bookworm_masthead_v1', 'child_bookworm_site_branding_v1', 20 );
function child_bookworm_site_branding_v1() {
	?>
	<div class="site-branding pr-md-4">
		<a href="<?php echo site_url(); ?>" class="custom-logo-link" rel="home">
			<?php
				echo '<a href="'.site_url().'" class="custom-logo-link" rel="home"><img src="'.get_field('logo_en', 'option').'" class="custom-logo" alt="Alefredo"></a>';
		    ?>			
		</a>
	</div>
	<?php
}

function child_posts_for_current_author($query) {
    global $pagenow;
 
    if( 'edit.php' != $pagenow || !$query->is_admin )
        return $query;
 
    if( !current_user_can( 'edit_others_posts' ) ) {
        global $user_ID;
        $query->set('author', $user_ID );
    }
    return $query;
}
//add_filter('pre_get_posts', 'child_posts_for_current_author');

function chlid_hide_menu_for_vendor() {
	if( current_user_can( 'vendor' ) ) {
		echo '<style>#menu-posts, #menu-comments, #menu-posts-mas_static_content{display:none;}</style>';
	}
}
add_action('admin_head', 'chlid_hide_menu_for_vendor');

/*Set Default Sort*/
add_filter('woocommerce_default_catalog_orderby', 'chlid_default_catalog_orderby'); 
function chlid_default_catalog_orderby( $sort_by ) {
	return 'date';
}


/* WooCommerce: The Code Below Removes Checkout Fields */
add_filter( 'woocommerce_checkout_fields' , 'child_override_checkout_fields' );
function child_override_checkout_fields( $fields ) {	
	/*unset($fields['billing']['billing_country']);
	unset($fields['billing']['billing_state']);*/
	unset($fields['billing']['billing_postcode']);
	unset($fields['shipping']['shipping_postcode']);
	return $fields;
}

/*Make Zip field on checkout not required*/
function child_zip_require_wc_company_field( $fields ) {
    $fields['billing_postcode']['required'] = false;
    return $fields;
}
add_filter( 'woocommerce_billing_fields', 'child_zip_require_wc_company_field' );

/*Create Tab for product info*/
function child_woo_new_product_tab($tabs) {
	$tabs['additional_product_details'] = array(
		'title' 	=> 'Product Details',
		'priority' 	=> 5,
		'callback' 	=> 'child_woo_new_product_tab_content'
	);	
	return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'child_woo_new_product_tab' );

function child_woo_new_product_tab_content() {
	global $post;
	?>
	<div class="table-responsive mb-4">
		<table class="woocommerce-product-attributes shop_attributes table table-hover table-borderless">
			<tbody>
				<tr class="woocommerce-product-attributes-item">
					<th class="woocommerce-product-attributes-item__label px-4 px-xl-5">Product ID</th>
					<td class="woocommerce-product-attributes-item__value"><?php echo $post->ID; ?></td>
				</tr>
					<?php
					$ref_no = get_field('ref_no', $post->ID);
					if (!empty($ref_no)) {
						?>
						<tr class="woocommerce-product-attributes-item">
							<th class="woocommerce-product-attributes-item__label px-4 px-xl-5">Ref No.</th>
							<td class="woocommerce-product-attributes-item__value"><?php echo $ref_no; ?></td>
						</tr>
						<?php
					}
					$class = get_field('class', $post->ID);
					if (!empty($class)) {
						?>
						<tr class="woocommerce-product-attributes-item">
							<th class="woocommerce-product-attributes-item__label px-4 px-xl-5">Grade</th>
							<td class="woocommerce-product-attributes-item__value"><?php echo $class; ?></td>
						</tr>
						<?php
					}
					$isbn_13 = get_field('isbn-13', $post->ID);
					if (!empty($isbn_13)) {
						?>
						<tr class="woocommerce-product-attributes-item">
							<th class="woocommerce-product-attributes-item__label px-4 px-xl-5">ISBN-13</th>
							<td class="woocommerce-product-attributes-item__value"><?php echo $isbn_13; ?></td>
						</tr>
						<?php
					}
					$pack = get_field('pack', $post->ID);
					if (!empty($pack)) {
						?>
						<tr class="woocommerce-product-attributes-item">
							<th class="woocommerce-product-attributes-item__label px-4 px-xl-5">Pack</th>
							<td class="woocommerce-product-attributes-item__value"><?php echo $pack; ?></td>
						</tr>
						<?php
					}
					$author = get_field('author', $post->ID);
					if (!empty($author)) {
						?>
						<tr class="woocommerce-product-attributes-item">
							<th class="woocommerce-product-attributes-item__label px-4 px-xl-5">Author</th>
							<td class="woocommerce-product-attributes-item__value"><?php echo $author; ?></td>
						</tr>
						<?php
					}
					
					$language = get_field('language', $post->ID);
					if (!empty($language)) {
						?>
						<tr class="woocommerce-product-attributes-item">
							<th class="woocommerce-product-attributes-item__label px-4 px-xl-5">Language</th>
							<td class="woocommerce-product-attributes-item__value"><?php echo $language; ?></td>
						</tr>
						<?php
					}
					
					$product_dimension = get_field('product_dimension', $post->ID);
					if (!empty($product_dimension)) {
						?>
						<tr class="woocommerce-product-attributes-item">
							<th class="woocommerce-product-attributes-item__label px-4 px-xl-5">Product Dimension</th>
							<td class="woocommerce-product-attributes-item__value"><?php echo $product_dimension; ?></td>
						</tr>
						<?php
					}
					
					$shipping_weight = get_field('shipping_weight', $post->ID);
					if (!empty($shipping_weight)) {
						?>
						<tr class="woocommerce-product-attributes-item">
							<th class="woocommerce-product-attributes-item__label px-4 px-xl-5">Shipping Weight</th>
							<td class="woocommerce-product-attributes-item__value"><?php echo $shipping_weight; ?></td>
						</tr>
						<?php
					}
										
					$pub_year = get_field('pub_year', $post->ID);
					if (!empty($pub_year)) {
						?>
						<tr class="woocommerce-product-attributes-item">
							<th class="woocommerce-product-attributes-item__label px-4 px-xl-5">Publish Year</th>
							<td class="woocommerce-product-attributes-item__value"><?php echo $pub_year; ?></td>
						</tr>
						<?php
					}					
					$questions_or_answers = get_field('questions_or_answers', $post->ID);
					if (!empty($questions_or_answers)) {
						?>
						<tr class="woocommerce-product-attributes-item">
							<th class="woocommerce-product-attributes-item__label px-4 px-xl-5">Questions or Answers</th>
							<td class="woocommerce-product-attributes-item__value"><?php echo $questions_or_answers; ?></td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
	<?php
}

/**
 * If current user vendor
 * Redirect to admin
 */
function child_vendor_redirect() {
	if( current_user_can( 'vendor' ) ) {
		global $wp;				
		if (strpos($wp->request, 'my-account') !== false) {			
			echo '<script>window.location.href="'.admin_url().'";</script>';
		}
	}
} 
//add_action('wp_head', 'child_vendor_redirect');


/**
 * If current user vendor
 * add script admin
 */
function child_admin_footer() {
	if( current_user_can( 'vendor' ) ) {
		$args = array(
			'author' 				=> get_current_user_id(),
			'post_type' 			=> 'product',
			'post_status' 			=> 'publish', 
			'ignore_sticky_posts' 	=> true,
			'no_found_rows' 		=> true,
			'fields' 				=> 'ids'
		);
		
		$the_query = new WP_Query( $args );
		$total = 0;		
		if (!empty($the_query->posts)) {
			foreach ($the_query->posts as $key => $id) {				
				$total = $total + (int) get_field('vendor_commission', $id);
			}
		}
		?>
		<script>
			jQuery(document).ready(function($){
				if ($('.woocommerce-page #search-submit').length > 0) {
					$('#search-submit').after('<input type="button" id="commision-cal" class="button button-primary button-large" value="Cal. Commision" style="margin-left: 10px;">');
					
					$(document).on('click', '#commision-cal', function(){
						alert("Your total commision till today is: <?php echo $total; ?>");
					});
				}
			});
		</script>
		<?php
	}
} 
add_action('admin_footer', 'child_admin_footer');

/*Add Product Tab*/
add_action( 'init', 'child_add_product_endpoints' );
function child_add_product_endpoints() {
	add_rewrite_endpoint( 'vendor-add-product', EP_ROOT | EP_PAGES );
	add_rewrite_endpoint( 'vendor-products', EP_ROOT | EP_PAGES );
	add_rewrite_endpoint( 'vendor-orders', EP_ROOT | EP_PAGES );
	add_rewrite_endpoint( 'vendor-isbn', EP_ROOT | EP_PAGES );
}

add_action( 'woocommerce_account_vendor-add-product_endpoint', 'child_endpoint_content_add_product' );
function child_endpoint_content_add_product() {
	get_template_part('vendor-add-product');
}

add_action( 'woocommerce_account_vendor-products_endpoint', 'child_endpoint_content_products' );
function child_endpoint_content_products() {
	get_template_part('vendor-products');
}

add_action( 'woocommerce_account_vendor-isbn_endpoint', 'child_endpoint_content_isbn' );
function child_endpoint_content_isbn() {
	get_template_part('vendor-isbn');
}

add_action( 'woocommerce_account_vendor-orders_endpoint', 'child_endpoint_content_orders' );
function child_endpoint_content_orders() {
	get_template_part('vendor-orders');
}

function child_add_product_menu() {
	$menuOrder['dashboard']    = 'Dashboard';
    $menuOrder['orders']       = 'Orders';
    $menuOrder['edit-address'] = 'Addresses';
    $menuOrder['edit-account'] = 'Account details';	
	$menuOrder['vendor-add-product'] = 'For manage product';
	$menuOrder['vendor-isbn']     = 'Add Product';
	$menuOrder['vendor-products'] = 'My Products';
	$menuOrder['vendor-orders']   = 'Customer\'s order Revenue';	
	$menuOrder['customer-logout'] = 'Logout ';
	return $menuOrder;
}
add_filter ( 'woocommerce_account_menu_items', 'child_add_product_menu' );
/*Add Product Tab*/

/**
 * Get All orders IDs for a given product ID.
 *
 * @param  integer  $product_id (required)
 * @param  array    $order_status (optional) Default is 'wc-completed'
 *
 * @return array
 */
function get_orders_ids_by_product_id( $product_id, $order_status = array( 'wc-completed' ) ){
    global $wpdb;

    $results = $wpdb->get_col("
        SELECT order_items.order_id
        FROM {$wpdb->prefix}woocommerce_order_items as order_items
        LEFT JOIN {$wpdb->prefix}woocommerce_order_itemmeta as order_item_meta ON order_items.order_item_id = order_item_meta.order_item_id
        LEFT JOIN {$wpdb->posts} AS posts ON order_items.order_id = posts.ID
        WHERE posts.post_type = 'shop_order'        
        AND order_items.order_item_type = 'line_item'
        AND order_item_meta.meta_key = '_product_id'
        AND order_item_meta.meta_value = '$product_id'
    ");

    return $results;
}

/*Currency Switcher*/
add_action( 'bookworm_site_info', 'child_bookworm_language_currency', 20 );
if ( ! function_exists( 'child_bookworm_language_currency' ) ) {
    function child_bookworm_language_currency( $footer_vrsion='') {
        if( empty( $footer_version ) ) {
            $footer_version = apply_filters( 'bookworm_footer_version', get_theme_mod( 'footer_version', 'v1' ) );
        }
        if ( $footer_version == 'v2' ) {
            $dropdown_select_classes ='ml-lg-4 mb-3 mb-md-0';
            $data_style_classes ='text-white-60 bg-secondary-gray-800 px-4 py-2 rounded-lg height-5 outline-none shadow-none form-control font-size-2';
        } elseif ( $footer_version == 'v3' ) {
            $dropdown_select_classes ='ml-lg-4 mb-3 mb-md-0';
            $data_style_classes ='border px-4 py-2 rounded-md height-5 outline-none shadow-none form-control font-size-2';
        } elseif ( $footer_version == 'v4') {
            $dropdown_select_classes ='ml-md-3 mb-3 mb-md-0';
            $data_style_classes ='border border-gray-710 bg-transparent px-4 py-2 text-gray-450 rounded-0 height-5 outline-none shadow-none form-control font-size-2';
        } elseif ( $footer_version == 'v5') {
            $dropdown_select_classes ='mb-3 mb-lg-0 ml-md-5';
            $data_style_classes ='border px-4 py-2 rounded-0 height-5 outline-none shadow-none form-control font-size-2';
        } elseif ( $footer_version == 'v7') {
            $dropdown_select_classes ='mb-3 mb-md-0 ml-md-6';
            $data_style_classes ='border border-gray-300 px-4 py-2 rounded-0 height-5 outline-none shadow-none form-control font-size-2';
        } elseif ( $footer_version == 'v8') {
            $dropdown_select_classes ='';
            $data_style_classes ='bg-transparent border-0 text-gray-500 px-4 py-2 rounded-0 height-5 outline-none shadow-none form-control font-size-2';
        } elseif ( $footer_version == 'v9') {
            $dropdown_select_classes ='mb-3 mb-md-0';
            $data_style_classes ='text-gray-500 bg-gray-810 px-4 py-2 rounded-md height-5 outline-none shadow-none form-control font-size-2';
        } elseif ( $footer_version == 'v10') {
            $dropdown_select_classes ='mb-3 mb-md-0 ml-md-5';
            $data_style_classes ='border px-4 py-2 rounded-0 height-5 outline-none shadow-none form-control font-size-2';
        } elseif ( $footer_version == 'v11') {
            $dropdown_select_classes ='mb-3 mb-md-0 ml-md-3';
            $data_style_classes ='bg-transparent border px-4 py-2 rounded-md height-5 outline-none shadow-none form-control font-size-2';
        } elseif ( $footer_version == 'v12') {
            $dropdown_select_classes ='ml-md-3 mb-3 mb-md-0';
            $data_style_classes ='border px-4 py-2 rounded-0 bg-transparent height-5 outline-none shadow-none form-control font-size-2';
        } elseif ( $footer_version == 'v13') {
            $dropdown_select_classes ='mb-3 mb-md-0';
            $data_style_classes ='bg-transparent border-0 text-dark px-4 py-2 rounded-0 height-5 outline-none shadow-none form-control font-size-2';
        } else {
            $dropdown_select_classes ='mb-3 mb-lg-0 ml-md-5';
            $data_style_classes ='border px-4 py-2 rounded-0 height-5 outline-none shadow-none form-control font-size-2';
        } 

        if ( apply_filters( 'bookworm_enable_language_dropdown',  filter_var( get_theme_mod( 'enable_footer_language', 'no' ), FILTER_VALIDATE_BOOLEAN )  )) :?>
            <select class="js-select selectpicker dropdown-select <?php echo esc_attr( $dropdown_select_classes );?>" data-style="<?php echo esc_attr( $data_style_classes );?>" data-dropdown-align-right="true" data-width="fit">
                <option value="<?php echo strtoupper( get_bloginfo( 'language' )); ?>">
                    <?php echo strtoupper( get_bloginfo( 'language' ) ); ?>
                </option>
            </select>
            
            <?php
        endif;
       
        if( bookworm_is_woocommerce_activated() &&  apply_filters( 'bookworm_enable_currency_dropdown',  filter_var( get_theme_mod( 'enable_footer_currency', 'no' ), FILTER_VALIDATE_BOOLEAN ) ) ):			
            echo do_shortcode('[woocommerce_currency_switcher_drop_down_box]');
        endif;

    }
}

/** Here changing 'customer' role to 'subscriber'.**/
add_filter('woocommerce_new_customer_data', 'child_wc_assign_custom_role', 10, 1);
function child_wc_assign_custom_role($args) {
	$args['role'] = 'vendor';
	return $args;
}

add_action( 'init', 'child_blockusers_init' );
function child_blockusers_init() {
	if ( is_admin() && current_user_can('vendor') && !wp_doing_ajax()) {
		wp_redirect( home_url() );
		exit;
	}
}

add_action('after_setup_theme', 'child_remove_admin_bar');
function child_remove_admin_bar() {
	if (current_user_can('vendor') && !is_admin()) {
	  show_admin_bar(false);
	}
}

/*Code for backend Filter*/
add_action('restrict_manage_posts', 'child_product_warehouse_sorting');
function child_product_warehouse_sorting() {
    global $typenow;
    $taxonomy  = 'pa_warehouse';
    if ( $typenow == 'product' ) {
        $selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
        $info_taxonomy = get_taxonomy($taxonomy);
        wp_dropdown_categories(array(
            'show_option_all' => __("Filter by Warehouse"),
            'taxonomy'        => $taxonomy,
            'name'            => $taxonomy,
            'orderby'         => 'name',
            'selected'        => $selected,
            'show_count'      => true,
            'hide_empty'      => false,
        ));
    };
}

add_filter( 'woocommerce_product_filters', 'alfredo_filter_by_custom_product_meta' );
function alfredo_filter_by_custom_product_meta( $output ) {
  global $wp_query;
  $phone = isset($_GET['phone_number']) ? $_GET['phone_number'] : '';
  $owner = isset($_GET['owner']) ? $_GET['owner'] : '';
 
  $output .= '<input type="text" name="phone_number" placeholder="Filter by Mobile" value="'.$phone.'" class="postform">';
  $output .= '<input type="text" name="owner" placeholder="Filter by Owner" value="'.$owner.'" class="postform">';
  return $output;
}

add_filter('parse_query', 'child_product_tags_sorting_query');
function child_product_tags_sorting_query($query) {
    global $pagenow;
    $taxonomy  = 'pa_warehouse';
    $q_vars    = &$query->query_vars;
    if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == 'product' && isset($_GET[$taxonomy]) && is_numeric($_GET[$taxonomy]) && $_GET[$taxonomy] != 0 ) {
        $term = get_term_by('id', $_GET[$taxonomy], $taxonomy);				
        $query->set(
            'tax_query', array(
				'relation' => 'AND',
				array(
					'taxonomy' => $taxonomy,
					'field' => 'slug',
					'terms' => array( $term->slug )
				)
			)
		);
    }

	if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == 'product' && isset($_GET['phone_number']) && $_GET['phone_number'] != '') {
		$meta_key_query = array(
			'relation' => 'AND',
			array(
			'key'     => 'phone_number',
			'value'   => esc_attr( $_GET['phone_number'] ),
			'compare' => '=',
			)
		);
		$query->set( 'meta_query', $meta_key_query );
	}

	if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == 'product' && isset($_GET['owner']) && $_GET['owner'] != '') {
		$meta_key_query = array(
			'relation' => 'AND',
			array(
			'key'     => 'name_of_the_author_of_the_book',
			'value'   => esc_attr( $_GET['owner'] ),
			'compare' => 'LIKE',
			)
		);
		$query->set( 'meta_query', $meta_key_query );
	}
	return $query;
}
/*Code for backend Filter*/

/*Custom Pagination*/
// Numbered Pagination
if ( !function_exists( 'child_wpex_pagination' ) ) {
	function child_wpex_pagination($max_num_pages, $current_page, $url=false) {
		if ($max_num_pages > 1) {
			$prev_arrow = is_rtl() ? '→' : '←';
			$next_arrow = is_rtl() ? '←' : '→';	
			  
			echo '<ul class="page-numbers">';
				if (($current_page-2) > 0) {
					echo '<li><a class="prev page-numbers" href="'.site_url('my-account').'/'.$url.'/?custom_page='.($current_page-2).'">'.$prev_arrow.'</a></li>';
				}
				if (($current_page-1) > 0) {
					echo '<li><a class="page-numbers" href="'.site_url('my-account').'/'.$url.'/?custom_page='.($current_page-1).'">'.($current_page-1).'</a></li>';
				}
				echo '<li><span aria-current="page" class="page-numbers current">'.$current_page.'</span></li>';
				
				if (($current_page+1) <= $max_num_pages) {
					echo '<li><a class="page-numbers" href="'.site_url('my-account').'/'.$url.'/?custom_page='.($current_page+1).'">'.($current_page+1).'</a></li>';
				}
				if (($current_page+1) < $max_num_pages) {
					echo '<li><a class="next page-numbers" href="'.site_url('my-account').'/'.$url.'/?custom_page='.($current_page+2).'">'.$next_arrow.'</a></li>';
				}
			echo '</ul>';
		}
	}
	
}
/*Custom Pagination*/

/* Add Column to the backend product section*/
add_filter( 'manage_product_posts_columns', 'set_custom_edit_book_columns' );
function set_custom_edit_book_columns($columns) {
	unset( $columns['cs_replacement'] );
    $columns['ID'] 		= 'ID';
    $columns['owner'] 	= 'Owner';
	$columns['export_status'] 	= 'Export';
    $columns['isbn'] 	= 'ISBN';
    $columns['mobile'] 	= 'Mobile';
    $columns['area'] 	= 'Area';
    $columns['print'] 	= 'Print Label';
    return $columns;
}

// Add the data to the custom columns for the book post type:
add_action( 'manage_product_posts_custom_column' , 'custom_book_column', 10, 2 );
function custom_book_column( $column, $post_id ) {
    switch ( $column ) {
        case 'ID' :
            echo $post_id;
            break;
		case 'owner' :
            echo get_post_meta($post_id, 'name_of_the_author_of_the_book', true);
            break;
		case 'export_status' :
			$status = get_post_meta($post_id, 'export_status', true);
			if($status == 1){
				echo 'Yes';
			}else{
				echo 'No';
			}
			break;
		case 'isbn' :
			$isbn = get_post_meta($post_id, '_bks_product_isbn_field', true);
			if (!empty($isbn)) {
				$isbn = get_field('isbn-13', $post_id);
			}
            echo !empty($isbn) ? $isbn : '';
            break;
		case 'mobile' :
			echo get_post_meta($post_id, 'phone_number', true);
            break;
		case 'area' :
			echo get_post_meta($post_id, 'region', true);
            break;	
        case 'print' :
			$product = wc_get_product( $post_id );	
			$isbn = get_post_meta($post_id, '_bks_product_isbn_field', true);
			if (!empty($isbn) && $isbn >4) {
				$isbn = get_field('isbn-13', $post_id);
			}
			$section_number = get_field('section_number', $post_id);
			$url = add_query_arg(
				array(
					'title' => get_the_title($post_id),
					'id' 	=> $post_id,
					'condition' => $product->get_attribute('pa_book-status'),
					'isbn' => $isbn,
					'section_number' => $section_number
				), 
				home_url('/print-label.php')
			);
            echo '<a href="'.$url.'" target="_blank">Print Label</a>';
            break;
		
    }
}
/* Add Column */

//add_action('draft_to_publish', 'draft_to_publish_product', 10, 1);
function draft_to_publish_product($post) {
	if ('product' == $post->post_type) {
		$is_product_duplicated = get_post_meta($post->ID, 'is_product_duplicated', true);
		if (!empty($is_product_duplicated) && 'no' == $is_product_duplicated) {
			if (class_exists('WC_Admin_Duplicate_Product')) {
				$wc_adp   = new WC_Admin_Duplicate_Product();
				$dproduct = $wc_adp->product_duplicate( wc_get_product($post->ID) );
				/*Set Post Language*/
				//pll_set_post_language($dproduct->get_id(), 'ar');
				/*Set Post Language*/
				
				//$title = str_replace('(Copy)', '', $dproduct->get_title());
				//wp_update_post(array('ID'=>$dproduct->get_id(), 'post_status'=>'publish', 'post_title' => $title));
				
				update_post_meta($post->ID, 'is_product_duplicated', 'yes');
				update_post_meta($dproduct->get_id(), 'is_product_duplicated', 'yes');
			}			
		}
	}
}


// define the woocommerce_product_duplicate_before_save callback 
function bookwarm_woocommerce_product_duplicate_before_save( $duplicate, $product ) { 
	$title = str_replace('(Copy)', '', $duplicate->get_name());
	$duplicate->set_status( 'publish' );
	$duplicate->set_name( $title);
}; 
         
// add the action  this is causing an issue while duplicate so changed in the core file 1. /plugins/woocommerce/includes/admin - class-wc-admin-duplicate-product.php
//add_action( 'woocommerce_product_duplicate_before_save', 'bookwarm_woocommerce_product_duplicate_before_save', 10, 2 );


function child_bookworm_wc_account_dashboard_icons() {
	$menu_items = wc_get_account_menu_items();
	?>
	<div class="row mt-4">
		<h2 style="text-align: center;width: 100%;margin-bottom: 20px;">My Account</h2>
		<div class="col-md-12" style="display:flex;">			
			<div class="col-sm-12 col-md-4">
				<?php $icon_1 = bookworm_wc_get_account_menu_item_icon('orders'); ?>
				<a href="<?php echo esc_url( wc_get_account_endpoint_url('orders') ); ?>" class="py-6 text-center d-block ">
					<span class="btn bg-gray-200 rounded-circle px-4 mb-2">
						<span class="<?php echo esc_attr( $icon_1 ); ?> font-size-10 btn-icon__inner text-primary"></span>
					</span>
					<div class="font-size-3 mb-xl-1">My Orders</div>	
				</a>
			</div>
			<div class="col-sm-12 col-md-4">
				<?php $icon_2 = bookworm_wc_get_account_menu_item_icon('vendor-isbn'); ?>
				<a href="<?php echo esc_url( wc_get_account_endpoint_url('vendor-isbn') ); ?>" class="py-6 text-center d-block">
					<span class="btn bg-gray-200 rounded-circle px-4 mb-2">
						<span class="flaticon-tick font-size-10 btn-icon__inner text-primary"></span>
					</span>
					<div class="font-size-3 mb-xl-1">Sell Your Books</div>	
				</a>
			</div>
			<div class="col-sm-12 col-md-4">
				<?php $icon_3 = bookworm_wc_get_account_menu_item_icon('edit-account'); ?>
				<a href="<?php echo esc_url( wc_get_account_endpoint_url('edit-account') ); ?>" class="py-6 text-center d-block">
					<span class="btn bg-gray-200 rounded-circle px-4 mb-2">
						<span class="<?php echo esc_attr( $icon_3 ); ?> font-size-10 btn-icon__inner text-primary"></span>
					</span>
					<div class="font-size-3 mb-xl-1">Account Details</div>	
				</a>
			</div>	
		</div>
		<h2 style="text-align: center;width: 100%;margin-bottom: 20px;">Sell Your Books</h2>
		<div class="col-md-12" style="display:flex;">			
			<div class="col-sm-12 col-md-4">
				<?php $icon_4 = bookworm_wc_get_account_menu_item_icon('vendor-isbn'); ?>
				<a href="<?php echo esc_url( wc_get_account_endpoint_url('vendor-isbn') ); ?>" class="py-6 text-center d-block">
					<span class="btn bg-gray-200 rounded-circle px-4 mb-2">
						<span class="flaticon-tick font-size-10 btn-icon__inner text-primary"></span>
					</span>
					<div class="font-size-3 mb-xl-1">Add Product</div>	
				</a>
			</div>
			<div class="col-sm-12 col-md-4">
				<?php $icon_5 = bookworm_wc_get_account_menu_item_icon('vendor-products'); ?>
				<a href="<?php echo esc_url( wc_get_account_endpoint_url('vendor-products') ); ?>" class="py-6 text-center d-block">
					<span class="btn bg-gray-200 rounded-circle px-4 mb-2">
						<span class="flaticon-tick font-size-10 btn-icon__inner text-primary"></span>
					</span>
					<div class="font-size-3 mb-xl-1">My Products</div>	
				</a>
			</div>
			<div class="col-sm-12 col-md-4">
				<?php $icon_6 = bookworm_wc_get_account_menu_item_icon('vendor-orders'); ?>
				<a href="<?php echo esc_url( wc_get_account_endpoint_url('vendor-orders') ); ?>" class="py-6 text-center d-block">
					<span class="btn bg-gray-200 rounded-circle px-4 mb-2">
						<span class="flaticon-tick font-size-10 btn-icon__inner text-primary"></span>
					</span>
					<div class="font-size-3 mb-xl-1">My Revenue</div>	
				</a>
			</div>
		</div>
		
		<h2 style="text-align: center;width: 100%;margin-bottom: 20px;">Account Details</h2>
		<div class="col-md-12" style="display:flex;">			
			<div class="col-sm-12 col-md-4">
				<?php $icon_7 = bookworm_wc_get_account_menu_item_icon('edit-account'); ?>
				<a href="<?php echo esc_url( wc_get_account_endpoint_url('edit-account') ); ?>" class="py-6 text-center d-block">
					<span class="btn bg-gray-200 rounded-circle px-4 mb-2">
						<span class="<?php echo esc_attr( $icon_7 ); ?> font-size-10 btn-icon__inner text-primary"></span>
					</span>
					<div class="font-size-3 mb-xl-1">Edit Account</div>	
				</a>
			</div>
			<div class="col-sm-12 col-md-4">
				<?php $icon_8 = bookworm_wc_get_account_menu_item_icon('edit-address'); ?>
				<a href="<?php echo esc_url( wc_get_account_endpoint_url('edit-address') ); ?>" class="py-6 text-center d-block">
					<span class="btn bg-gray-200 rounded-circle px-4 mb-2">
						<span class="<?php echo esc_attr( $icon_8 ); ?> font-size-10 btn-icon__inner text-primary"></span>
					</span>
					<div class="font-size-3 mb-xl-1">Addresses</div>	
				</a>
			</div>
		</div>
	</div>
	<?php
}
add_action( 'woocommerce_account_dashboard', 'child_bookworm_wc_account_dashboard_icons', 10 );


add_action('admin_head', 'woocommerce_custom_css');
function woocommerce_custom_css() {
  echo '<style>
  ._bks_product_isbn_field_field {
      display: none;
    } 
  </style>';
}

add_action( 'bookworm_before_footer_widgets_v1', 'child_bookworm_footer_newsletter', 10 );
function child_bookworm_footer_newsletter(  $footer_version='' ) {
	 if( apply_filters( 'bookworm_footer_newsletter', filter_var( get_theme_mod( 'enable_newsletter_form', 'no' ), FILTER_VALIDATE_BOOLEAN )  ) ) {
		$newsletter_title = apply_filters( 'bookworm_footer_newsletter_title', get_theme_mod( 'bookworm_newsletter_title', esc_html__( 'Join Our Newsletter', 'bookworm' ) ) );
		$newsletter_desc  = apply_filters( 'bookworm_footer_newsletter_desc', get_theme_mod( 'bookworm_newsletter_desc', esc_html__( 'Signup to be the first to hear about exclusive deals, special offers and upcoming collections', 'bookworm' ) ) );

		$newsletter_form = apply_filters( 'bookworm_footer_newsletter_shortcode', get_theme_mod('bookworm_newsletter_form') );

		if( empty( $footer_version ) ) {
			$footer_version = apply_filters( 'bookworm_footer_version', get_theme_mod( 'footer_version', 'v1' ) );
		}

		if ( $footer_version =='v3' ) {
			$footer_before_content_classes =' space-bottom-lg-3 mb-6 mb-lg-0';
		} elseif ( $footer_version =='v6' ) {
			$footer_before_content_classes =' space-1 space-lg-2';
		} elseif ( $footer_version =='v9' ) {
			$footer_before_content_classes =' space-2';
		} elseif ( $footer_version =='v10' )  {
			$footer_before_content_classes =' space-bottom-2 space-bottom-lg-3';
		} elseif ( $footer_version =='v11' )  {
			$footer_before_content_classes =' space-bottom-2 space-bottom-md-3';
		} else {
			$footer_before_content_classes =' space-bottom-2 space-bottom-md-3';
		}
		?><div class="footer-before-content<?php echo esc_attr ( $footer_before_content_classes );?>">
			<?php if ( ! empty( $newsletter_title ) || ! empty( $newsletter_desc )  ): ?>
				<div class="text-center mb-5">
					<?php if ( ! empty( $newsletter_title ) ) : ?>
						<h5 class="font-size-7 font-weight-medium"><?php echo esc_html( $newsletter_title ); ?></h5>
					<?php endif; ?>
					<?php if ( ! empty( $newsletter_desc ) ) : ?>
						<p class="text-gray-700"><?php echo esc_html( $newsletter_desc ); ?></p>
					<?php endif; ?>

				</div>
			<?php endif; ?>

			<?php if ( ! empty( $newsletter_form ) ) :
				echo do_shortcode( $newsletter_form );				
			else :
				footer_newsletter_form();
			endif; ?>
		</div><?php

	}
}

function child_set_default_currency() {
	/*Alefredo Set Default Currency*/
	if(!session_id() )
	{
		session_start();
	}
	if ( empty($_SESSION['alg_currency'])  && empty($_POST['alg_currency'])  ) {	
		$_SESSION['alg_currency'] = 'JOD';
	} 
	/*Alefredo Set Default Currency*/
	
}
add_action('wp_loaded','child_set_default_currency');

/**
 * Change a currency symbol
 */
add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);

function change_existing_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'JOD': $currency_symbol = 'JD'; break;		 
     }
     return $currency_symbol;
}
/*
* Redirect UAE users to uae.alefredobooks.com domain
*
*/
function getLocationInfoByIp(){
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = @$_SERVER['REMOTE_ADDR'];
    $result  = array('countryCode'=>'');
    if(filter_var($client, FILTER_VALIDATE_IP)){
        $ip = $client;
    }elseif(filter_var($forward, FILTER_VALIDATE_IP)){
        $ip = $forward;
    }else{
        $ip = $remote;
    }
    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));    
    if($ip_data && $ip_data->geoplugin_countryName != null){
        $result['countryCode'] = $ip_data->geoplugin_countryCode;
    }
    return $result;
}

/*
* Redirect UAE users to uae.alefredobooks.com domain
*
*/
function alefredo_custom_redirects() {
	$countryCode = getLocationInfoByIp();
	if(isset($countryCode['countryCode']) && $countryCode['countryCode'] == 'AE' && !is_admin())
	{
		wp_redirect('https://uae.alefredobooks.com/');
        die;
	}
}
add_action( 'template_redirect', 'alefredo_custom_redirects' );

add_action( 'init', 'registerBlockProdCarousol' );
function registerBlockProdCarousol() {
	register_block_type(
		'bwgb/products-carousel',
		[
			'render_callback' => 'bookwormgb_products_carousel_block_output_cust',
		]
	);
}

add_action( 'init', 'registerBlockCategory' );
function registerBlockCategory() {
	register_block_type(
		'bwgb/product-categories',
		[
			'render_callback' => 'bookwormgb_product_categories_block_output_cust',
		]
	);
}

add_action( 'init', 'registerBlockProdDealCarousel' );
function registerBlockProdDealCarousel() {
	register_block_type(
		'bwgb/products-deals-carousel',
		[
			'render_callback' => 'bookwormgb_products_deals_carousel_block_output_cust',
		]
	);
}


function alefredo_deregister_scripts_and_styles() {
	//wp-polyfill, wp-elements are required for wc payment methods
	global $wp_scripts, $wp_styles;	
	$handleScripts = array('wp-polyfill-fetch','lodash','regenerator-runtime','react','react-dom','wp-escape-html','jquery-ui-mouse','jquery-ui-slider','jquery-ui-resizable','jquery-ui-draggable','jquery-ui-controlgroup','jquery-ui-checkboxradio','jquery-ui-button','jquery-ui-dialog');
	
	if(!is_admin()) {
		foreach($wp_scripts->registered as $registered) {
			if(in_array($registered->handle,$handleScripts))
			{
				wp_deregister_script($registered->handle);
			}
		}
	}
	
	//if ( is_front_page() || is_page( 203521 ) ) {
	//wp_deregister_style('amazonpolly');
	//wp_deregister_style('amazon-payment-services-responsive'); //Woocom APS (Amazon payment services)
	//wp_deregister_style('amazon-payment-services-slickcss'); //Woocom APS (Amazon payment services)
	//wp_deregister_style('amazon-payment-services-main'); //Woocom APS (Amazon payment services)
	wp_deregister_style('wcpf-plugin-style'); //Woocom product filter
	wp_deregister_style('wpsl-styles'); //Wp store locator
	wp_deregister_style('jquery-colorbox-'); // YITH woocom compare
	wp_deregister_style('wpzoom-social-icons-socicon'); //wpzoom social icon widget
	wp_deregister_style('wpzoom-social-icons-genericons'); //wpzoom social icon widget
	wp_deregister_style('wpzoom-social-icons-academicons'); //wpzoom social icon widget
	wp_deregister_style('wpzoom-social-icons-font-awesome-3'); //wpzoom social icon widget
	wp_deregister_style('wpzoom-social-icons-styles'); //wpzoom social icon widget
	wp_deregister_style('heateor_sss_frontend_css'); //sazzy social share
	//}
}
//add_action( 'wp_enqueue_scripts', 'alefredo_deregister_scripts_and_styles');


function alefredo_dequeue_script() {

	if ( is_front_page() || is_page( 123 )) {
		//wp_deregister_script('wc-add-to-cart'); //Woocom add to cart
	}
	if(!is_admin()) {
		//wp_deregister_script('wp-polyfill-fetch');
		//wp_deregister_script('amazonpolly'); //Empty file
		wp_deregister_script('wcpf-plugin-polyfills-script'); //Woocom
		wp_deregister_script('wcpf-plugin-script'); //Woocom
		wp_deregister_script('jquery-selectBox'); //YITH Woocom
		wp_deregister_script('prettyPhoto'); //Woocom
		wp_deregister_script('jquery-yith-wcwl'); //YITH Woocom Wishlist
		//wp_deregister_script('amazon-payment-services-slickjs'); //Woocom APS (Amazon payment services)
		//wp_deregister_script('amazon-payment-services-main'); //Woocom APS (Amazon payment services)
		//wp_deregister_script('amazon-payment-services-checkout'); //Woocom APS (Amazon payment services)

		wp_deregister_script('wc-cart-fragments'); //Woocom add to cart
		wp_deregister_script('jquery-ui-draggable');  //Wp include core js
		wp_deregister_script('jquery-ui-controlgroup');  //Wp include core js
		wp_deregister_script('jquery-ui-checkboxradio');  //Wp include core js
		wp_deregister_script('jquery-ui-dialog');  //Wp include core js
		wp_deregister_script('jquery-ui-button');  //Wp include core js
		wp_deregister_script('yith-woocompare-main');  //YITH Woocom compare
		wp_deregister_script('jquery-colorbox');  //YITH Woocom compare
		wp_deregister_script('wc-country-select'); //Woocom country select
		wp_deregister_script('heateor_sss_sharing_js'); //Sassy social share

		//Remove Bookwarm core theme unrequired JS
		//wp_deregister_script('popper');
		wp_deregister_script('jquery-countdown');
		//wp_deregister_script('slick');
		//wp_deregister_script('jquery-fancybox');
		//wp_deregister_script('appear');
		//wp_deregister_script('cubeportfolio');
	}
}
//add_action( 'wp_print_scripts', 'alefredo_dequeue_script', 100 );


//add_action( 'init', 'removeUnrequireImageSizes1' );
function removeUnrequireImageSizes1() {
	$allImages = wp_get_registered_image_subsizes();
	echo '<pre>';
	print_r($allImages);
	echo '</pre>';
	//die('afdsaf');
	global $_wp_additional_image_sizes;
    //$sizes = array();

	foreach($_wp_additional_image_sizes as $sizes)
	{
		echo '<pre>';
		//print_r($sizes);
		echo '</pre>';
	}
	// if ( isset( $_wp_additional_image_sizes[ $name ] ) ) {
	// 	unset( $_wp_additional_image_sizes[ $name ] );
	// 	//return true;
	// }
	//return false;
}


// Remove or unregister unused WordPress Image Sizes
function removeUnrequireImageSizes() {
    $disabled_sizes = array(
		'1536x1536',
        '2048x2048',
        'bookworm-70x107-crop',
        'bookworm-254x400-crop',
        'bookworm-90x138-crop',
        'bookworm-60x90-crop',
		'bookworm-300x452-crop',
        'bookworm-150x225-crop',
        'bookworm-190x222-crop',
        'bookworm-506x341-crop',
        'bookworm-391x298-crop',
		'bookworm-360x250-crop'
    );
    // unset disabled sizes
    foreach ($disabled_sizes as $size) {
		remove_image_size($size);
    }
}
// Hook the function
add_filter('after_setup_theme', 'removeUnrequireImageSizes', 10, 2);
