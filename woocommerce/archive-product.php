<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );


/*
 * Logic TO SHow Categories
 */
$get_queried_object = get_queried_object();
$show_child_cat 	= false;
if (!empty($get_queried_object)) {
	$show_child_cat = get_field('show_child_category', $get_queried_object);		
	$show_child_cat = (!empty($show_child_cat[0]) && 'Yes' == $show_child_cat[0]) ? true : false; 
	
	if ($show_child_cat) {
		$child_categories = get_terms('product_cat', array('parent' => $get_queried_object->term_id, 'orderby' => 'slug', 'hide_empty' => false));
	}
}


/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>
<?php

if (!empty($child_categories)) {
	echo '<ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-4 row-cols-wd-4 border-top border-left mb-6">';
	foreach ($child_categories as $key => $term) {
		$thumbnail_id = get_term_meta($term->term_id, 'thumbnail_id', true);	
		$get_term_link = get_term_link($term->term_id, 'product_cat');	
		?>
		<li class="product col">
			<div class="bookworm-product-grid">
				<div class="product__inner overflow-hidden p-3 p-md-4d875">
					<div class="position-relative d-block">
						<div class="woocommerce-loop-product__header">						
						<?php 
							if (!empty($thumbnail_id)) {
								$image_src = wp_get_attachment_image_src($thumbnail_id, 'full');
								
								echo '<a href="'.$get_term_link.'" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img src="'.$image_src[0].'" /></a>';
							}
						?>
						</div>
						<div class="woocommerce-loop-product__body product__body pt-3 bg-white">
							<h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 crop-text-2 h-dark  text-height-2">
								<a href="<?php echo $get_term_link; ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
									<?php echo $term->name; ?>
								</a>
							</h2>
							<span class="price">(<?php echo $term->count; ?>)</span>	
						</div>
					</div>
				</div>
			</div>
		</li>
		<?php		
	}
	echo '</ul>';
} else {
	if ( woocommerce_product_loop() ) {

		/**
		 * Hook: woocommerce_before_shop_loop.
		 *
		 * @hooked woocommerce_output_all_notices - 10
		 * @hooked woocommerce_result_count - 20
		 * @hooked woocommerce_catalog_ordering - 30
		 */
		do_action( 'woocommerce_before_shop_loop' );

		woocommerce_product_loop_start();

		if ( wc_get_loop_prop( 'total' ) ) {
			while ( have_posts() ) {
				the_post();

				/**
				 * Hook: woocommerce_shop_loop.
				 */
				do_action( 'woocommerce_shop_loop' );

				wc_get_template_part( 'content', 'product' );
			}
		}

		woocommerce_product_loop_end();

		/**
		 * Hook: woocommerce_after_shop_loop.
		 *
		 * @hooked woocommerce_pagination - 10
		 */
		do_action( 'woocommerce_after_shop_loop' );
	} else {
		/**
		 * Hook: woocommerce_no_products_found.
		 *
		 * @hooked wc_no_products_found - 10
		 */
		do_action( 'woocommerce_no_products_found' );
	}	
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
