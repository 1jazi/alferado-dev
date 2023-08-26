<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.4.0
 */ ?>

<style>

@media only screen and (max-device-width: 580px) {
	.woocommerce-MyAccount-navigation
	{
		display:none;
	}
}
#product_cat_multi
{
	background: none;
	min-height: 155px;
}
</style>
<?php
set_time_limit(2000);
ini_set('max_execution_time', '0');
$user_id = get_current_user_id(); 
$go_to_home = false;
$isbn = '';
if(isset($_GET['isbn']) && $_GET['isbn']!= '' && is_numeric($_GET['isbn']))
{
	$isbn = $_GET['isbn'];
}
if ((isset($_POST['add_product']) || isset($_POST['add_product_go_home']) ) && empty($_GET['id'])) {
		
	if (isset($_POST['add_product_go_home'])) {
		$go_to_home = true;
	}
	
	if (!empty($_POST['bwProduct']) && is_array($_POST['bwProduct'])) {
		
		$args = array();
		$attributes = array();
		
		if (!empty($_POST['bwProduct']['title'])) {
			$args['post_title'] = $_POST['bwProduct']['title'];
		}
		
		if (!empty($_POST['bwProduct']['description'])) {
			$args['post_content'] = $_POST['bwProduct']['description'];
		}		
		
		$args['post_status'] = 'draft';	
		$args['post_type']   = 'product';	
		$args['post_author'] = $user_id;	
		
		if (!empty($args)) {
			$product_id = wp_insert_post($args);			
						
			if (!is_wp_error($product_id)) {
				
				/*Set Product Type*/
				wp_set_object_terms($product_id, 'simple', 'product_type');
				/*Set Product Type*/
				
				/*Set Post Language*/
				//pll_set_post_language($product_id, pll_current_language('locale'));
				/*Set Post Language*/
				
				/* if (!empty($_POST['bwProduct']['price'])) {
					update_post_meta($product_id, '_price', $_POST['bwProduct']['price']);
					update_post_meta($product_id, '_regular_price', $_POST['bwProduct']['price']);
				} */
				
				/*if (!empty($_POST['bwProduct']['vendor_price'])) {
					update_post_meta($product_id, '_price', $_POST['bwProduct']['vendor_price']);
					update_post_meta($product_id, '_regular_price', $_POST['bwProduct']['vendor_price']);
				}*/

				// set vendor price in cost
				if (!empty($_POST['bwProduct']['vendor_price'])) {
					update_post_meta($product_id, '_alg_wc_cog_cost', $_POST['bwProduct']['vendor_price']);
				}

				// set price including commission in the regular
				if (!empty($_POST['bwProduct']['price_including_commission'])) {
					update_post_meta($product_id, '_price', $_POST['bwProduct']['price_including_commission']);
					update_post_meta($product_id, '_regular_price', $_POST['bwProduct']['price_including_commission']);
				}
				
				if (!empty($_POST['bwProduct']['isbn_number'])) {
					update_post_meta($product_id, '_bks_product_isbn_field', $_POST['bwProduct']['isbn_number']);
					update_field('isbn-13', $_POST['bwProduct']['isbn_number'], $product_id);
				}
				
				if (!empty($_FILES['featured_image']['name'])) {
					
					include_once( ABSPATH . 'wp-admin/includes/image.php' );
					
					$upload = wp_upload_bits($_FILES['featured_image']['name'], null, file_get_contents($_FILES['featured_image']['tmp_name'])); 
					
					if (!is_wp_error($upload)) {
						$attachment = array(
							'post_mime_type' => $upload['type'], 
							'post_title' => sanitize_file_name($upload['file']),
							'post_content' => '',
							'post_status' => 'inherit'
						);
						
						$attachmentId = wp_insert_attachment( $attachment, $upload['file'], $product_id );
						
						// insert and return attachment metadata
						$attachmentData = wp_generate_attachment_metadata( $attachmentId, $upload['file']);
						 
						// update and return attachment metadata
						wp_update_attachment_metadata( $attachmentId, $attachmentData );
						 
						// finally, associate attachment id to post id
						$success = set_post_thumbnail( $product_id, $attachmentId );
					}
				}elseif (!empty($_POST['featured_image_url'])) {
					
					$upload_dir = wp_get_upload_dir();			
					$image_data = file_get_contents( $_POST['featured_image_url'] );
					$filename   = basename( $_POST['featured_image_url'] );
					$file       = $upload_dir['path'] . '/' . current_time('timestamp') . $filename;
					
					/*Add file on location*/
					file_put_contents($file, $image_data);
					
					/*Check File type*/
					$wp_filetype = wp_check_filetype( $filename, null );

					$attachment = array(
						'post_mime_type' => $wp_filetype['type'],
						'post_title' => sanitize_file_name( $filename ),
						'post_content' => '',
						'post_status' => 'inherit'
					);

					$attachmentId = wp_insert_attachment( $attachment, $file );
					
					require_once( ABSPATH . 'wp-admin/includes/image.php' );
					
					$attach_data = wp_generate_attachment_metadata( $attachmentId, $file );
					
					wp_update_attachment_metadata( $attachmentId, $attach_data );
					
					// finally, associate attachment id to post id
					$success = set_post_thumbnail( $product_id, $attachmentId );
				}	

				if (!empty($_POST['bwProduct']['book_status'])) {
					$book_status_id = (int) $_POST['bwProduct']['book_status'];			
					wp_set_object_terms($product_id, $book_status_id, 'pa_book-status');
					
					$attributes['pa_book-status'] = array(
						'name'       => 'pa_book-status',
						'value'      => $book_status_id,
						'position' 	 => '1',
						'is_visible' => '1',
						'is_variation' => 0,
						'is_taxonomy' => '1'
					);
				}

				if (!empty($_POST['bwProduct']['warehouse_location'])) {
					$warehouse_status_id = (int) $_POST['bwProduct']['warehouse_location'];
					wp_set_object_terms($product_id, $warehouse_status_id, 'pa_warehouse');
					
					$attributes['pa_warehouse'] = array(
						'name'       => 'pa_warehouse',
						'value'      => $warehouse_status_id,
						'position' 	 => '1',
						'is_visible' => '1',
						'is_variation' => 0,
						'is_taxonomy' => '1'
					);
				}
				
				if (!empty($attributes)) {
					update_post_meta( $product_id, '_product_attributes', $attributes );
				}
				
				if (!empty($_POST['bwProduct']['product_cat'])) {
					$product_cat = (int) $_POST['bwProduct']['product_cat'];
					wp_set_object_terms($product_id, $product_cat, 'product_cat');
					update_post_meta($product_id, 'product_cat', $product_cat);
				}

				if (!empty($_POST['bwProduct']['product_cat_multi'])) {
					if(is_array($_POST['bwProduct']['product_cat_multi']))
					{
						$pcat = $_POST['bwProduct']['product_cat_multi'];
						$pcat = array_values(array_filter($pcat));
						$pcat = array_map('intval', $pcat);
						wp_set_object_terms($product_id, $pcat, 'product_cat');
						update_post_meta($product_id, 'product_cat', $pcat);
					}
				}

				if (!empty($_POST['bwProduct']['book_type'])) {
					update_post_meta($product_id, 'book_type', $_POST['bwProduct']['book_type']);
				}
				
				
				$array = array('title', 'description', 'price', 'isbn_number', 'featured_image', 'warehouse_location', 'book_status');
				foreach ($_POST['bwProduct'] as $key => $value) {
					if (!in_array($key, $array)) {
						update_field($key, $value, $product_id);
					}
				}
				
				if (!empty($user_id)) {
					$owner_name = '';
					$first_name = get_user_meta($user_id,'first_name', true);
					$last_name  = get_user_meta($user_id,'last_name', true);
					
					$owner_name .= !empty($first_name) ? $first_name : '';
					$owner_name .= !empty($last_name) ? ' ' . $last_name : '';
					
					if (!empty($owner_name)) {
						update_field('name_of_the_author_of_the_book', $owner_name, $product_id);
					}
					
					$phone_number = get_user_meta($user_id,'billing_phone', true);
					if (!empty($phone_number)) {
						update_field('phone_number', $phone_number, $product_id);
					}
					
					$school_name = get_user_meta($user_id,'wpwc_custom_registration_field_34530', true);
					if (!empty($school_name)) {
						update_field('school_name', $school_name, $product_id);
					}
					
					$school_name = get_user_meta($user_id,'wpwc_custom_registration_field_34530', true);
					if (!empty($school_name)) {
						update_field('school_name', $school_name, $product_id);
					}
					
					$university = get_user_meta($user_id,'wpwc_custom_registration_field_34531', true);
					if (!empty($school_name)) {
						update_field('university', $university, $product_id);
					}	

					$country = get_user_meta($user_id,'wpwc_custom_registration_field_34528', true);
					if (!empty($country)) {
						update_field('country', $country, $product_id);
					}

					$city = get_user_meta($user_id,'wpwc_custom_registration_field_34529', true);
					if (!empty($city)) {
						update_field('city', $city, $product_id);
					}	
				}
				
				if (!empty($_POST['bwProduct']['shipping_weight'])) {
					update_post_meta($product_id, '_weight', $_POST['bwProduct']['shipping_weight']);	
				} else {
					update_post_meta($product_id, '_weight', 1);
					update_field('shipping_weight', 1, $product_id);	
				}
				
				if (!empty($_POST['bwProduct']['product_dimension'])) {
					
					$dimension = explode('x', $_POST['bwProduct']['product_dimension']);
					
					if (!empty($dimension[0])) {
						update_post_meta($product_id, '_length', $dimension[0]);	
					}
					
					if (!empty($dimension[1])) {
						update_post_meta($product_id, '_width', $dimension[1]);	
					}
					
					if (!empty($dimension[2])) {
						update_post_meta($product_id, '_height', $dimension[2]);	
					}					
				} else {
					update_field('product_dimension', '22x3x27.5', $product_id);
					update_post_meta($product_id, '_length', 22);
					update_post_meta($product_id, '_width', 3);	
					update_post_meta($product_id, '_height', 27.5);	
				}
				
				
				update_post_meta($product_id, 'is_product_duplicated', 'no');
				update_post_meta($product_id, '_manage_stock', 'yes');
				update_post_meta($product_id, '_stock', '1');
				update_post_meta($product_id, '_stock_status', 'instock');
				update_post_meta($product_id, '_total_stock_quantity', '1');

				//code start to duplicate product in arabic language
				/*$get_option = get_option('product_duplicate_ids');
				if(empty($get_option))
				{
					$final_arr = array($product_id);
				}
				else
				{
					$final_arr = $get_option;
					array_push($final_arr,$product_id);
				}
				update_option('product_duplicate_ids', $final_arr);*/
				
				/*if (class_exists('WC_Admin_Duplicate_Product')) {
					$wc_adp   = new WC_Admin_Duplicate_Product();
					$dproduct = $wc_adp->product_duplicate( wc_get_product($product_id) );
					pll_set_post_language($dproduct->get_id(), 'ar');
				}*/
				//code end to duplicate product in arabic langugae
				
				echo '<p class="success">Product Sent for Review!</p>';
			    /*if(pll_current_language() == "en") {
					echo '<p class="success">We would like to let you know that all the books checked into our website . We will buy your book the moment it is ordered by another customer.</p><p class="success">Please keep the books in a safe, suitable place, and away from humidity.The opportunities to sell books increases in the school season from June till November *</p>';
				} else {*/
					echo '<p class="success">يرجى العلم بانه سيتم وضع الكتب المدخلة على موقعنا الالكتروني برسم البيع, و سنقوم بشراء الكتب لحظة تاكيد طلب شراء عليها من اي عميل اخر,</p><p class="success">يرجى الاحتفاظ بالكتب بمكان امن و بعيد عن الرطوبة للحفاظ على الكتاب. بالنسبة للكتب المدرسية تزيد فرص بيع الكتاب في موسم المدارس الممتد من شهر 6 لغاية 
					شهر 11</p>';
				//}
				if (!$go_to_home) {
					$url = site_url() . '/my-account/vendor-isbn/';
					?>
					<script>
						 setTimeout(function(){
							 window.location.href = '<?php echo $url; ?>';
						 }, 5000);						
					</script>
					<?php
				} else {
					?>
					<script> 
						setTimeout(function(){
							 window.location.href = '<?php echo site_url(); ?>';
						 }, 5000);						
					</script>
					<?php
				}
				
				die();
			} else {
				echo '<p class="error">Something went wrong. Please try again Later</p>';
			}	 		
		}		
	}
}

$update_go_to_home = false;
if (isset($_POST['update_product']) || isset($_POST['update_product_go_home'])) {
	
	if (isset($_POST['update_product_go_home'])) {
		$update_go_to_home = true;
	}
	
	$args = array();
	$attributes = array();
	$args['ID'] = $_GET['id'];
	
	if (!empty($_POST['bwProduct']['title'])) {
		$args['post_title'] = $_POST['bwProduct']['title'];
	}
	
	if (!empty($_POST['bwProduct']['description'])) {
		$args['post_content'] = $_POST['bwProduct']['description'];
	}
		
	
	if (!empty($args)) {
		$product_id = wp_update_post($args);
		
		
		if (!empty($_FILES['featured_image']['name'])) {
					
			include_once( ABSPATH . 'wp-admin/includes/image.php' );
			
			$upload = wp_upload_bits($_FILES['featured_image']['name'], null, file_get_contents($_FILES['featured_image']['tmp_name'])); 
			
			if (!is_wp_error($upload)) {
				$attachment = array(
					'post_mime_type' => $upload['type'], 
					'post_title' => sanitize_file_name($upload['file']),
					'post_content' => '',
					'post_status' => 'inherit'
				);
				
				$attachmentId = wp_insert_attachment( $attachment, $upload['file'], $product_id );
				
				// insert and return attachment metadata
				$attachmentData = wp_generate_attachment_metadata( $attachmentId, $upload['file']);
				 
				// update and return attachment metadata
				wp_update_attachment_metadata( $attachmentId, $attachmentData );
				 
				// finally, associate attachment id to post id
				$success = set_post_thumbnail( $product_id, $attachmentId );
			}
		} elseif (!empty($_POST['featured_image_url'])) {
			
			$upload_dir = wp_get_upload_dir();			
			$image_data = file_get_contents( $_POST['featured_image_url'] );
			$filename   = basename( $_POST['featured_image_url'] );
			$file       = $upload_dir['path'] . '/' . current_time('timestamp') . $filename;
			
			/*Add file on location*/
			file_put_contents($file, $image_data);
			
			/*Check File type*/
			$wp_filetype = wp_check_filetype( $filename, null );

			$attachment = array(
				'post_mime_type' => $wp_filetype['type'],
				'post_title' => sanitize_file_name( $filename ),
				'post_content' => '',
				'post_status' => 'inherit'
			);

			$attachmentId = wp_insert_attachment( $attachment, $file );
			
			require_once( ABSPATH . 'wp-admin/includes/image.php' );
			
			$attach_data = wp_generate_attachment_metadata( $attachmentId, $file );
			
			wp_update_attachment_metadata( $attachmentId, $attach_data );
			
			// finally, associate attachment id to post id
			$success = set_post_thumbnail( $product_id, $attachmentId );
		}
		
		/* if (!empty($_POST['bwProduct']['price'])) {
			update_post_meta($product_id, '_price', $_POST['bwProduct']['price']);
			update_post_meta($product_id, '_regular_price', $_POST['bwProduct']['price']);
		} */
		
		/*if (!empty($_POST['bwProduct']['vendor_price'])) {
			update_post_meta($product_id, '_price', $_POST['bwProduct']['vendor_price']);
			update_post_meta($product_id, '_regular_price', $_POST['bwProduct']['vendor_price']);
		}*/

		// set vendor price in cost
		if (!empty($_POST['bwProduct']['vendor_price'])) {
			update_post_meta($product_id, '_alg_wc_cog_cost', $_POST['bwProduct']['vendor_price']);
		}

		// set price including commission in the regular
		if (!empty($_POST['bwProduct']['price_including_commission'])) {
			update_post_meta($product_id, '_price', $_POST['bwProduct']['price_including_commission']);
			update_post_meta($product_id, '_regular_price', $_POST['bwProduct']['price_including_commission']);
		}
		
		
		if (!empty($_POST['bwProduct']['isbn_number'])) {
			update_post_meta($product_id, '_bks_product_isbn_field', $_POST['bwProduct']['isbn_number']);
			update_field('isbn-13', $_POST['bwProduct']['isbn_number'], $product_id);
		}					 
		
		if (!empty($_POST['bwProduct']['book_status'])) {
			$book_status_id = (int) $_POST['bwProduct']['book_status'];			
			wp_set_object_terms($product_id, $book_status_id, 'pa_book-status');
			
			$attributes['pa_book-status'] = array(
				'name'       => 'pa_book-status',
				'value'      => $book_status_id,
				'position' 	 => '1',
				'is_visible' => '1',
				'is_variation' => 0,
				'is_taxonomy' => '1'
			);
		}

		if (!empty($_POST['bwProduct']['warehouse_location'])) {
			$warehouse_status_id = (int) $_POST['bwProduct']['warehouse_location'];
			wp_set_object_terms($product_id, $warehouse_status_id, 'pa_warehouse');
			
			$attributes['pa_warehouse'] = array(
				'name'       => 'pa_warehouse',
				'value'      => $warehouse_status_id,
				'position' 	 => '1',
				'is_visible' => '1',
				'is_variation' => 0,
				'is_taxonomy' => '1'
			);
		}
		
		if (!empty($attributes)) {
			update_post_meta( $product_id, '_product_attributes', $attributes );
		}

		if (!empty($_POST['bwProduct']['product_cat'])) {
			$old_product_cat = get_post_meta($product_id, 'product_cat', true);
			$product_cat = (int) $_POST['bwProduct']['product_cat'];
			
			if (!empty($old_product_cat)) {
				$old_product_cat = (int) $old_product_cat;
				if ($product_cat != $old_product_cat) {
					wp_remove_object_terms($product_id, $old_product_cat, 'product_cat');
					wp_set_object_terms($product_id, $product_cat, 'product_cat');
					update_post_meta($product_id, 'product_cat', $product_cat);
				}	
			}			
		}
		

		if (!empty($_POST['bwProduct']['product_cat_multi'])) {
			if(is_array($_POST['bwProduct']['product_cat_multi']))
			{
				$old_product_cat = get_post_meta($product_id, 'product_cat_multi', true);
				$pcat = $_POST['bwProduct']['product_cat_multi'];
				$pcat = array_values(array_filter($pcat));
				$pcat = array_map('intval', $pcat);
				
				if (!empty($old_product_cat)) {
					wp_remove_object_terms($product_id, $old_product_cat, 'product_cat');
				}	
				wp_set_object_terms($product_id, $pcat, 'product_cat');
				update_post_meta($product_id, 'product_cat_multi', $pcat);
			}			
		}

		if (!empty($_POST['bwProduct']['book_type'])) {
			update_post_meta($product_id, 'book_type', $_POST['bwProduct']['book_type']);
		}
		
		$array = array('title', 'description', 'price', 'isbn_number', 'featured_image', 'book_status', 'warehouse_location');
		foreach ($_POST['bwProduct'] as $key => $value) {
			if (!in_array($key, $array)) {
				update_field($key, $value, $product_id);
			}
		}
		
		if (!$update_go_to_home) {
			echo '<p class="success">Product Updated Successfully!</p>';
			$url = site_url() . '/my-account/vendor-isbn/';
			?>
			<script>
				 setTimeout(function(){
					 window.location.href = '<?php echo $url; ?>';
				 }, 2000);					
			</script>
			<?php
		} else {
			echo '<p class="success">Product Updated Successfully.</p>';			
			?>
			<script>
				setTimeout(function(){
					 window.location.href = '<?php echo site_url(); ?>';
				}, 2000);				
			</script>
			<?php
		}
	}
}

$product = !empty($_GET['duplicate_id']) ? get_post($_GET['duplicate_id']) : (!empty($_GET['id']) ? get_post($_GET['id']) : '');
?>

<form class="woocommerce-form" id="vendor-add-form" method="post" enctype="multipart/form-data">
	<div class="border-bottom mb-6 mb-lg-8 pb-6 pb-lg-9">
		<div class="font-weight-medium font-size-22 mb-4 pb-xl-1"><?php echo !empty($_GET['id']) ? 'Edit Product' : 'Add Product'; ?></div>
		<div class="row">
			<p class="woocommerce-form-row woocommerce-form-row--first form-row-first col-md-6 mb-4">
				<?php 
					if(isset($product->ID) && !empty($product->ID))
					{
						$isbn = get_post_meta($product->ID, '_bks_product_isbn_field', true);
						if (empty($isbn)) {
							$isbn = get_field('isbn-13', $product->ID);
						}
					}
				?>
                <label>ISBN Number <span class="required">*</span></label>
				<input type="number" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" required name="bwProduct[isbn_number]" id="isbn_number" value="<?php echo !empty($isbn) ? $isbn : ''; ?>" <?php echo !empty($_GET['duplicate_id']) ? 'readonly' : ''; ?> >   
            </p> 
			<p class="woocommerce-form-row woocommerce-form-row--first form-row-first col-md-6 mb-4">
                <label>Product Title <span class="required">*</span></label>
                <input type="text" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[title]" id="title" value="<?php echo !empty($product->post_title) ? $product->post_title : ''; ?>" required <?php echo !empty($_GET['duplicate_id']) ? 'readonly' : ''; ?>>
            </p>
			
			<?php /*<p class="woocommerce-form-row woocommerce-form-row--first form-row-first col-md-6 mb-4">
                <label>Description</label>
				<textarea class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[description]"><?php echo !empty($product->post_content) ? $product->post_content : ''; ?></textarea>   
            </p>*/ ?>
			<p class="woocommerce-form-row woocommerce-form-row--first form-row-first col-md-6 mb-4">
                <label>Book Status <span class="required">*</span></label>
				<select class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[book_status]"   
						id ="book_status" required>
					<option value="">Select</option>
					<?php 
						$all_term = get_terms(array(
							'taxonomy' => 'pa_book-status',
							'hide_empty' => false,
							'exclude' => array(25678,13459)
						));
						
						if (!empty($all_term)) {	
							$wp_get_post_terms = [];
							if(isset($product->ID) && !empty($product->ID))
							{
								$wp_get_post_terms = wp_get_post_terms($product->ID, 'pa_book-status', array( 'fields' => 'ids' ));
							}
							
							$assigned_book_status = !empty($wp_get_post_terms[0]) ? $wp_get_post_terms[0] : '';
							
							foreach ($all_term as $book_status) {
								$selected = ($assigned_book_status == $book_status->term_id && !empty($_GET['action']) && 'duplicate' != $_GET['action']) ? "selected" : '';
								echo '<option value="'.$book_status->term_id.'" '.$selected.'>'.$book_status->name.'</option>';
							}
						}
					?>
				</select>   
            </p>
			<?php 
			$_price = '';
			if(isset($product->ID)) {
				$_price = get_post_meta($product->ID, '_price', true);
			}
			if (!empty($_GET['duplicate_id']) || (!empty($_GET['edit']) && $_GET['edit']!='edit')) {
				?>
				<p class="woocommerce-form-row woocommerce-form-row--first form-row-first col-md-6 mb-4" style="display:none;">
					<label>Average Price in the website <span class="required">*</span></label>
					<input type="text" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[price]" id="" value="<?php echo !empty($_price) ? $_price : ''; ?>" required <?php echo !empty($_GET['duplicate_id']) ? 'readonly' : ''; ?>>   
				</p>
				<?php 
				}	
			?>	
			<p class="woocommerce-form-row woocommerce-form-row--first form-row-first col-md-6 mb-4">
				<?php 
					$price = '';
					if(!empty($product->ID))
					{
						if(isset($_GET['action']) && $_GET['action'] =='duplicate')
						{
							$price = '';
						}
						else
						{
							$price = get_post_meta($product->ID, 'vendor_price', true); //it's equal to cost on the backend
							if(empty($price))
							{
								$price = get_post_meta($product->ID, '_regular_price', true);
							}
						}
					}

				?>
                <label>Your book price <span class="required">* (JOD)</span></label>
				<input type="text" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[vendor_price]" id="your_book_price" value="<?php 
				echo $price;
				?>" required oninput="showCommision(this)">   
				<!--<strong id="your_comission"></strong>-->
            </p>	
			<p class="woocommerce-form-row woocommerce-form-row--first form-row-first col-md-6 mb-4" style="display:none;">
                <label>Your profit After Alefredo Books Commission (JOD)</label>
				<input type="text" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" id="your_comission" value="0" readonly> 
            </p>
			<p class="woocommerce-form-row woocommerce-form-row--first form-row-first col-md-6 mb-4">
                <label>Book location <span class="required">*</span></label>
				<select class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[warehouse_location]" 
					id="warehouse_location"	  required>
					<option value="">Select</option>
					<?php 
						$ware_all_term = get_terms(array(
							'taxonomy' => 'pa_warehouse',
							'hide_empty' => false,
							'exclude' => array(12836)
						));
						
						if (!empty($ware_all_term)) {
							$wp_get_post_terms = [];
							if(isset($product->ID) && !empty($product->ID))
							{
								$wp_get_post_terms = wp_get_post_terms($product->ID, 'pa_warehouse', array( 'fields' => 'ids' ));
							}
							$assigned_ware_location = !empty($wp_get_post_terms[0]) ? $wp_get_post_terms[0] : '';
							
							foreach ($ware_all_term as $ware_location) {
								$selected = ($assigned_ware_location == $ware_location->term_id) ? "selected" : '';
								echo '<option value="'.$ware_location->term_id.'" '.$selected.'>'.$ware_location->name.'</option>';
							}
						}
					?>
				</select>   
            </p>
			<?php /*<p class="woocommerce-form-row woocommerce-form-row--first form-row-first col-md-6 mb-4">
				<label>Book Type</label>
				<select id="book_type" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[product_cat_multi][]">
					<option value="">Select Book Type</option>
					<option value="365">School</option>
					<option value="369">University</option>
					<option value="">Non Academic Books</option>
				</select>
				<?php
				if(!empty($product->ID)){
					$book_type = get_post_meta($product->ID, 'book_type', true);
					if(!empty($book_type))
					{
						?>
						<script>
						jQuery(document).ready(function(){ 
							jQuery("#book_type option[value='<?php echo $book_type;?>']").prop("selected", true);
						});
						</script>
						<?php
					}
				}
				?>
			</p> */ ?>
			<?php 
				if (empty($_GET['duplicate_id'])) {
				?>
				<p class="woocommerce-form-row woocommerce-form-row--first form-row-first col-md-6 mb-4">
					<label>Select Book Type <span class="required">*</span></label>
					<?php echo do_shortcode('[wpcd_child_categories_dropdown category="product_cat"]');?>
				</p>
				<p id="secondary_cat" class="woocommerce-form-row woocommerce-form-row--first form-row-first col-md-6 mb-4">
					<label>Select Category <span class="required">*</span></label>
					<select name="bwProduct[Select_Category]"  id="Select_Category" required>
						<option value="">Select Category </option>
					</select>
				</p>
				<p id="third_cat" class="woocommerce-form-row woocommerce-form-row--first form-row-first col-md-6 mb-4">
					<label>Select Sub Category </label>
					<select>
						<option value="">Select Sub Category</option>
					</select>
				</p>
				<p id="fourth_cat" class="woocommerce-form-row woocommerce-form-row--first form-row-first col-md-6 mb-4">
					<label>Select Sub Category 2</label>
					<select>
						<option value="">Select Sub Category 2</option>
					</select>
				</p>
				<?php /*<p class="woocommerce-form-row woocommerce-form-row--first form-row-first col-md-6 mb-4">
                <label>Select Categories</label>
					<?php				
						$pcat_dropdown = wp_dropdown_categories( array(
							'taxonomy'          => 'product_cat',
							'hierarchical'      => true,
							'echo'              => FALSE,
							'show_option_none'  => esc_html_x( 'Select Categories', '', '' ),
							'option_none_value' => '',
							'name'              => 'bwProduct[product_cat_multi][]',
							'id'                => 'product_cat_multi',
							'selected'          => '',
						) );
						$pcat_dropdown = str_replace('id=', 'multiple="multiple" id=', $pcat_dropdown);
						echo $pcat_dropdown;
						if(!empty($product->ID)){
							$get_product_cat = get_post_meta($product->ID, 'product_cat_multi', true);
							if(!empty($get_product_cat) && is_array($get_product_cat))
							{
								?>
								<script>
								jQuery(document).ready(function(){ 
									var values="<?php echo implode(",",$get_product_cat);?>";
									jQuery.each(values.split(","), function(i,e){
										jQuery("#product_cat_multi option[value='" + e + "']").prop("selected", true);
									});
								});
								</script>
								<?php
							}
						}
					?>
				</p> */ ?>
			<?php /*<p class="woocommerce-form-row woocommerce-form-row--first form-row-first col-md-6 mb-4">
                <label>Select Category</label>
				
				<select class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[product_cat]">
					<option value="">Select</option>
					<?php 
					
						$type 	= get_user_meta($user_id, 'wpwc_custom_registration_field_34551', true);
						$cat_id = 0;
						if (!empty($type)) {							
							if (strpos($type, 'School') > -1) {
								$cat_id = 365;
							}elseif (strpos($type, 'University') > -1) {
								$cat_id = 369;
							}	
						}
						
							
						if (!empty($cat_id)) {
							$selected = "";
							
							if (!empty($_GET['id'])) {
								$match_cat = get_post_meta($_GET['id'], 'product_cat', true);	
							}
							
							$children = get_term_children($cat_id, 'product_cat');	
							
							if (!empty($children)) {
								$include_array = array(381, 383, 385, 387, 389, 391, 393, 395, 397, 399, 401, 403, 405, 407, 409, 12900,12879,12888,12936,12938,12940,12942,12884,12894);	
								foreach ($children as $key => $child) {
									
									if (in_array($child, $include_array)) {
										$selected = !empty($match_cat) && $match_cat == $child ? "selected" : '';
										$term = get_term_by('id', $child, 'product_cat');									
										echo '<option value="'.$child.'" '.$selected.'>'.$term->name.'</option>';
									}
								}								
							} else {
								$selected = !empty($match_cat) && $match_cat == $cat_id ? "selected" : '';
								$term = get_term_by('id', $cat_id, 'product_cat');
								echo '<option value="'.$cat_id.'" '.$selected.'>'.$term->name.'</option>';
							}
						}
					?>
				</select>   
            </p>  */ ?>

			<?php } ?>

<!-- 			<p class="woocommerce-form-row woocommerce-form-row--first form-row-first col-md-6 mb-4">
				<label>Select School/University</label>
				<select class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" required onChange="updateCat(this)>
					<option value="">Select</option>
					<option value="365">School</option>
					<option value="369">University</option>
				</select>
			</p> -->
			
			<p class="woocommerce-form-row woocommerce-form-row--first form-row-first col-md-6 mb-4 d-none">
                <label>Book Location <span class="required">*</span></label>
				<select class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[book_location]" required>					
					<option value="">Select</option>
					<option value="virtual warehouse" selected>Virtual warehouse</option>
					
					<?php /*<option value="virtual warehouse" <?php echo !empty($product->ID) ? ("virtual warehouse" == get_field('book_location', $product->ID) ? 'selected' : '') : ''; ?>>Virtual warehouse</option>
					<option value="alfredo books physical warehouse" <?php echo !empty($product->ID) ? ("alfredo books physical warehouse" == get_field('book_location', $product->ID) ? 'selected' : '') : ''; ?>>Alfredo books physical warehouse</option>*/ ?>
				</select>   
            </p>
			<?php if (empty($_GET['action']) || 'duplicate' != $_GET['action']) { ?>
			<p class="woocommerce-form-row woocommerce-form-row--first form-row-first col-md-6 mb-4">
                <label>Featured Image<span class="required">*</span></label><br>
				<input type="file" class="rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="featured_image" id="featured_image" value="" required>   
            </p>
			<?php } ?>
			<p class="woocommerce-form-row woocommerce-form-row--first form-row-first col-md-6 mb-4">                
				<?php 
					$get_the_post_thumbnail_url = '';
					if(isset($product->ID) && !empty($product->ID))
					{
					$get_the_post_thumbnail_url = get_the_post_thumbnail_url($product->ID, 'thumbnail');
					}
					
					if (!empty($get_the_post_thumbnail_url)) {
						echo '<img src="'.$get_the_post_thumbnail_url.'"  />';
						echo '<input type="hidden" value="'.$get_the_post_thumbnail_url.'" name="featured_image_url"/>';
					}
				?>
            </p>	
		</div>
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[ref_no]" id="" value="<?php echo !empty($product->ID) ? get_field('ref_no', $product->ID) : ''; ?>">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[class]" id="" value="<?php echo !empty($product->ID) ? get_field('class', $product->ID) : ''; ?>">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[pack]" id="" value="<?php echo !empty($product->ID) ? get_field('pack', $product->ID) : ''; ?>">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[author]" id="" value="<?php echo !empty($product->ID) ? get_field('author', $product->ID) : ''; ?>">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[language]" id="" value="<?php echo !empty($product->ID) ? get_field('language', $product->ID) : ''; ?>">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[product_dimension]" id="" value="">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[shipping_weight]" id="" value="<?php echo !empty($product->ID) ? get_field('shipping_weight', $product->ID) : ''; ?>">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[sku]" id="" value="<?php echo !empty($product->ID) ? get_field('sku', $product->ID) : ''; ?>">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[pub_year]" id="" value="<?php echo !empty($product->ID) ? get_field('pub_year', $product->ID) : ''; ?>">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[order_in_series]" id="" value="<?php echo !empty($product->ID) ? get_field('order_in_series', $product->ID) : ''; ?>">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[price_from_amazon_new]" id="" value="<?php echo !empty($product->ID) ? get_field('price_from_amazon_new', $product->ID) : ''; ?>">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[date_of_registration]" id="" value="<?php echo !empty($product->ID) ? get_field('date_of_registration', $product->ID) : ''; ?>">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[name_of_the_author_of_the_book]" id="" value="<?php echo !empty($product->ID) ? get_field('name_of_the_author_of_the_book', $product->ID) : ''; ?>">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[phone_number]" id="" value="<?php echo !empty($product->ID) ? get_field('phone_number', $product->ID): ''; ?>">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[region]" id="" value="<?php echo !empty($product->ID) ? get_field('region', $product->ID): ''; ?>">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[how_did_you_know_about_us]" id="" value="<?php echo !empty($product->ID) ? get_field('how_did_you_know_about_us', $product->ID) : ''; ?>">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[category]" id="" value="<?php echo !empty($product->ID) ? get_field('category', $product->ID) : ''; ?>">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[school_name]" id="" value="<?php echo !empty($product->ID) ? get_field('school_name', $product->ID) : ''; ?>">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[country]" id="" value="<?php echo !empty($product->ID) ?  get_field('country', $product->ID) : ''; ?>">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[city]" id="" value="<?php echo !empty($product->ID) ? get_field('city', $product->ID) : ''; ?>">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[level]" id="" value="<?php echo !empty($product->ID) ? get_field('level', $product->ID) : ''; ?>">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[sub_level]" id="" value="<?php echo !empty($product->ID) ? get_field('sub_level', $product->ID) : ''; ?>">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[paper]" id="" value="<?php echo !empty($product->ID) ? get_field('paper', $product->ID) : ''; ?>">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[years]" id="" value="<?php echo !empty($product->ID) ? get_field('years', $product->ID) : ''; ?>">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[questions_or_answers]" id="" value="<?php echo !empty($product->ID) ? get_field('questions_or_answers', $product->ID) : ''; ?>">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[no_of_pages]" id="" value="<?php echo !empty($product->ID) ? get_field('no_of_pages', $product->ID) : ''; ?>">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[no_of_exams]" id="" value="<?php echo !empty($product->ID) ? get_field('no_of_exams', $product->ID): ''; ?>">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[color_uniform]" id="" value="<?php echo !empty($product->ID) ? get_field('color_uniform', $product->ID) : ''; ?>">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[size_uniform]" id="" value="<?php echo !empty($product->ID) ? get_field('size_uniform', $product->ID): ''; ?>">
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[age_uniform]" id="" value="<?php echo !empty($product->ID) ? get_field('age_uniform', $product->ID) : ''; ?>">	
		
		<input type="hidden" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text" name="bwProduct[price_including_commission]" id="price_including_commission" value="<?php echo !empty($product->ID) ? get_field('price_including_commission', $product->ID) : ''; ?>">	

		<div class="row">
			<p class="success">يرجى العلم بانه سيتم وضع الكتب المدخلة على موقعنا الالكتروني برسم البيع, و سنقوم بشراء الكتب لحظة تاكيد طلب شراء عليها من اي عميل اخر,</p><p class="success">يرجى الاحتفاظ بالكتب بمكان امن و بعيد عن الرطوبة للحفاظ على الكتاب. بالنسبة للكتب المدرسية تزيد فرص بيع الكتاب في موسم المدارس الممتد من شهر 6 لغاية 
شهر 11</p>
			<p class="success">We would like to let you know that all the books checked into our website . We will buy your book the moment it is ordered by another customer.</p><p class="success">Please keep the books in a safe, suitable place, and away from humidity.The opportunities to sell books increases in the school season from June till November *</p>
		</div>
		<div class="row">
			<p class="woocommerce-form-row woocommerce-form-row--first form-row-first col-md-12 mb-4" style="text-align:center;">
				<?php 
					if (!empty($_GET['id'])) {						
						?>
						<input type="hidden" name="bwProduct[action]" value="edit"/>
						<button type="submit" class="woocommerce-Button button btn btn-wide btn-dark text-white rounded-0 transition-3d-hover height-60 width-390" name="update_product" value="Update Product" style="margin-top: 20px;">Update and add another Books</button>
						<button type="submit" class="woocommerce-Button button btn btn-wide btn-dark text-white rounded-0 transition-3d-hover height-60 width-390" name="update_product_go_home" value="Update Product" style="margin-top: 20px;">Update and go to the home</button>
						<?php
					} else {
						?>
						<button type="submit" id="another_Books" class="vendor_add_prod woocommerce-Button button btn btn-wide btn-dark text-white rounded-0 transition-3d-hover height-60 width-390" name="add_product" value="Add Product" style="margin-top: 20px;">Submit and add another Books</button>
						

				
						<button type="submit" id="home_page" class="vendor_add_prod woocommerce-Button button btn btn-wide btn-dark text-white rounded-0 transition-3d-hover height-60 width-390" name="add_product_go_home" value="Add Product" style="margin-top: 20px;">Submit and go to the home page</button>
						<?php	
					}
				?>	
				
				
							<script>
								let isbn_number=document.getElementById("isbn_number");
								let title=document.getElementById("title");
								let book_status=document.getElementById("book_status");
								let your_book_price=document.getElementById("your_book_price");
								let warehouse_location=document.getElementById("warehouse_location");
								let Select_Category=document.getElementById("Select_Category");
								let featured_image=document.getElementById("featured_image");		
	
			jQuery(document).ready(function($){	
					$(document).on('click', '#another_Books', function(){
					if(!isbn_number.value == ""  && !title.value=="" &&  !book_status.value=="" && !your_book_price.value =="" &&                                   !warehouse_location.value=="" && !featured_image.files.length == 0  ){
								alert("Product successfully added ");
					}
				});
			});
			
							
		
								
								
		jQuery(document).ready(function($){	
					$(document).on('click', '#home_page', function(){
						if(!isbn_number.value == ""  && !title.value=="" &&  !book_status.value=="" && !your_book_price.value =="" &&                                   !warehouse_location.value=="" && !featured_image.files.length == 0  ){
								alert("Product successfully added ");
					}
					});
			});
		</script>
			</p>
		</div>
		<?php /*<div class="row" id="child-more-button-block">
			<a href="<?php echo site_url() . '/my-account/vendor-add-product/'; ?>" class="woocommerce-Button button btn btn-wide btn-dark text-white rounded-0 transition-3d-hover height-60 width-390">Add another product</a>
			<a href="<?php echo site_url() . '/my-account/'; ?>" class="woocommerce-Button button btn btn-wide btn-dark text-white rounded-0 transition-3d-hover height-60 width-390" >Back to home</a>
		</div>*/ ?>
	</div>	
</form>
<div id="cover-spin"></div>
<script>

	function showCommision(obj) {
		let _value = obj.value;
		let unit_price = obj.value;
		
		if (null != _value && typeof undefined != typeof _value) {
			_value = parseFloat(_value).toFixed(2);
			if (_value > 0 && _value <= 10) {
				unit_price = (_value/.6).toFixed(2);
			}
			if (_value > 10 && _value <= 30) {
				unit_price = (_value/.65).toFixed(2);
			}
			
			if (_value > 30 && _value <= 50) {
				unit_price = (_value/.7).toFixed(2);
			}
			
			if (_value > 50 && _value <= 100) {
				unit_price = (_value/.75).toFixed(2);
			}
			
			if (_value >= 100) {
				unit_price = (_value/.8).toFixed(2);
			}
			jQuery("#price_including_commission").val(unit_price);
		}
	}

	function showCommisionOne(value) {
		let _value = value;
		let _comission = 0;
		var unit_price = _value;
		
		if (null != _value && typeof undefined != typeof _value) {
			_value = parseFloat(_value).toFixed(2);
			if (_value > 0 && _value <= 10) {
				unit_price = (_value/.6).toFixed(2);
			}
			if (_value > 10 && _value <= 30) {
				unit_price = (_value/.65).toFixed(2);
			}
			
			if (_value > 30 && _value <= 50) {
				unit_price = (_value/.7).toFixed(2);
			}
			
			if (_value > 50 && _value <= 100) {
				unit_price = (_value/.75).toFixed(2);
			}
			
			if (_value >= 100) {
				unit_price = (_value/.8).toFixed(2);
			}
			jQuery("#price_including_commission").val(unit_price);
		}
	}

	jQuery(window).load(function() {
		// executes when complete page is fully loaded, including all frames, objects and images
		var vendor_price = jQuery("#your_book_price").val();
		showCommisionOne(vendor_price);
	});

	var form = document.getElementById("vendor-add-form");
	form.onsubmit = function() {
		jQuery("#cover-spin").show();
		return true;		
	};

	jQuery(document).ready(function() {
		jQuery("#wpcd_parent").attr("required", true);
		jQuery("#wpcd_parent").find('option:eq(0)').val('');
	});
</script>
<style type="text/css">
#cover-spin {
    position:fixed;
    width:100%;
    left:0;right:0;top:0;bottom:0;
    background-color: rgba(255,255,255,0.7);
    z-index:9999;
    display:none;
}

@-webkit-keyframes spin {
	from {-webkit-transform:rotate(0deg);}
	to {-webkit-transform:rotate(360deg);}
}

@keyframes spin {
	from {transform:rotate(0deg);}
	to {transform:rotate(360deg);}
}

#cover-spin::after {
    content:'';
    display:block;
    position:absolute;
    left:48%;top:40%;
    width:40px;height:40px;
    border-style:solid;
    border-color:black;
    border-top-color:transparent;
    border-width: 4px;
    border-radius:50%;
    -webkit-animation: spin .8s linear infinite;
    animation: spin .8s linear infinite;
}
</style>
