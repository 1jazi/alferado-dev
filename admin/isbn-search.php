<?php 
	$data = '';
	if (isset($_POST['search-submit'])) {
		
		$isbn_number = $_POST['s'];
	
	
		
		if (!empty($isbn_number) ) {
			$args = array(
				'post_type' => 'product',
				'ignore_sticky_posts' => true,
				'no_found_rows' => true,
				'meta_query' => array(
					'relation' => 'AND',
					array(
						'key' => '_bks_product_isbn_field',
						'value' => $isbn_number,
						'compare' => '='
					)
				)
			);
			
			$the_query = new WP_Query( $args );
			
			if ($the_query->have_posts()) {
				while ($the_query->have_posts()) {
					$the_query->the_post();
					
					$data .= '<tr>';
					
					$product = wc_get_product( $product_id );
					$product_id = get_the_ID();
					$duplicate_url = wp_nonce_url( admin_url( 'edit.php?post_type=product&action=duplicate_product&amp;post=' . $product_id ), 'woocommerce-duplicate-product_' . $product_id );
					$cost = get_post_meta($product_id, '_alg_wc_cog_cost', true);
					$regular_price = get_post_meta($product_id, '_regular_price', true);
					$owner = get_post_meta($product_id, 'name_of_the_author_of_the_book', true);
					$mobile = get_post_meta($product_id, 'phone_number', true);
					
					if (has_post_thumbnail()) {
						$featured_img_url = get_the_post_thumbnail_url($product_id,'thumbnail'); 
						$data .= '<td class="thumb column-thumb" data-colname="Image">
							<img src="'. $featured_img_url .'" style="margin: 0;width: auto;height: auto;max-width: 60px;max-height: 60px;vertical-align: middle;" />
						</td>';
					}
					
					$data .= '<td class="name column-name has-row-actions column-primary" data-colname="Name">
						<a href="'. get_edit_post_link() .'" target="_blank">
							<span>'. get_the_title() .'</span>
						</a>
					</td>';

					$data .= '<td class="date " data-colname="cost">
						'.$cost.'
					</td>';

					$data .= '<td class="date " data-colname="cost">
						'.$regular_price.'
					</td>';
					

					$data .= '<td class="date " data-colname="owner">
						'.$owner.'
					</td>';

					$data .= '<td class="date " data-colname="owner">
						'.$mobile.'
					</td>';

					$data .= '<td class="date column-date" data-colname="Date">
						'.get_the_time( __( 'Y/m/d' )).' '.get_the_time( __( 'g:i a' )).'
					</td>';
					
				
					
							
					
					
 					if (!empty($duplicate_url)) {
 						$data .= '<td class="price column-price" data-colname="Price">
 							<a href="'.$duplicate_url.'" target="_blank">
 								Duplicate Product
 							</a>
 						</td>';	
 					}
					
					$data .= '</tr>';
				}	
			} else {
				$data = '<tr class="no-items"><td class="colspanchange" colspan="9">No products found</td></tr>';
			} 
			
		} else {
			$data = '<tr class="no-items"><td class="colspanchange" colspan="9">No products found</td></tr>';
		} 
	}
?>
<div class="wrap">
	<h1 class="wp-heading-inline">Products</h1>
	<form id="posts-filter" method="post" action="">
		<p class="search-box" style="width: 100%;float: left;margin-bottom: 20px;">
			<label class="screen-reader-text" for="post-search-input">Search products:</label>
			<input type="search" id="post-search-input" name="s" value="" style="margin-bottom: 10px;width: 100%;" required>
			<input type="submit" id="search-submit" name="search-submit" class="button" value="Search products">
		</p>		
		<input type="hidden" name="post_status" class="post_status_page" value="all">
		<input type="hidden" name="post_type" class="post_type_page" value="product">
		<input type="hidden" id="_wpnonce" name="_wpnonce" value="<?php echo wp_create_nonce(); ?>">
	</form>	
	
	<table class="wp-list-table widefat fixed striped table-view-list posts">
		<thead>
			<tr>
				<th scope="col" id="thumb" class="manage-column column-thumb">
					<span class="wc-image tips">Image</span>
				</th>
				<th scope="col" id="name" class="manage-column column-name column-primary sortable desc">
					<a href="" target="_blank">
						<span>Name</span>
					</a>
				</th>
				
				<th scope="col" id="price" class="manage-column column-price sortable desc">
					<span>Cost (Seller Price)</span>
				</th>
				<th scope="col" id="price" class="manage-column column-price sortable desc">
					<span>Price (Regular Price)</span>
				</th>
				<th scope="col" id="price" class="manage-column column-price sortable desc">
					<span>Owner</span>
				</th>
				<th scope="col" id="price" class="manage-column column-price sortable desc">
					<span>Mobile No.</span>
				</th>
				<th scope="col" id="date" class="manage-column column-date sortable asc">
					<span>Date</span>
				</th>
			
				<th scope="col" id="price" class="manage-column column-price sortable desc">
					<span>Action</span>
				</th>
			</tr>
		</thead>
		<tbody>
			<?php echo $data; ?>
		</tbody>
	</table>	

</div>	