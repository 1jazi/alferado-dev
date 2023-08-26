<form class="woocommerce-form" method="post" enctype="multipart/form-data">
	<div class="mb-6 mb-lg-8 pb-6 pb-lg-9 vendor-add-product">
		<div class="font-weight-medium font-size-22 mb-4 pb-xl-1">Add your Book</div>
		<div class="row">
			<p class="woocommerce-form-row woocommerce-form-row--first form-row-first col-md-12 mb-4">
                <label >Enter the Book ISBN <span class="required">*</span></label>
                <input type="number" class="form-control rounded-0 woocommerce-Input woocommerce-Input--text input-text book-isbn" name="isbn_number" id="" value="" placeholder="Enter Your Book ISBN(ISBN number can be found on the back cover.)" required>
            </p>
		</div>
		<div class="row">	
			<p class="woocommerce-form-row woocommerce-form-row--first form-row-first col-md-6 mb-4">
				<button type="submit" class="woocommerce-Button button btn btn-wide btn-dark text-white rounded-0 transition-3d-hover height-60 width-390" name="isbn_search" value="Search">Ok</button>
			</p>
		</div>
	</div>	
</form>	
<div class="">
	<?php 
		if (isset($_POST['isbn_search'])) {
			$isbn_num= '';
			if (!empty($_POST['isbn_number'])) {
				$isbn_num = $_POST['isbn_number'];
				$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

				$args = array(
					'post_type' 	 => 'product',
					'post_status' 	 => array('publish'),
					'posts_per_page' => 1,
					'ignore_sticky_posts' => true,
					'paged' => $paged,
					'meta_query' => array(
					'relation' => 'OR',
						array(
							'key' 		=> '_bks_product_isbn_field',
							'value' 	=> $_POST['isbn_number'],
							'compare' 	=> '='
						),
						array(
							'key' 		=> 'isbn-13',
							'value' 	=> $_POST['isbn_number'],
							'compare' 	=> '='
						)
					)
				);				

				$the_query = new WP_Query( $args );	
				
				if ( $the_query->have_posts() ){
					?>
					<table>
						<tbody>
						<?php
						while ( $the_query->have_posts() ) {
							$the_query->the_post();	
							echo '<tr>';
							if (has_post_thumbnail()) {
								$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'thumbnail'); 
								echo '<td class="thumb column-thumb" data-colname="Image">
									<img src="'. $featured_img_url .'" style="margin: 0;width: auto;height: auto;max-width: 60px;max-height: 60px;vertical-align: middle;" />
								</td>';
							}
							
							echo '<td class="name column-name has-row-actions column-primary" data-colname="Name"><span>'. get_the_title() .'</span></td>';
							
							echo '<td class="name column-name has-row-actions column-primary" data-colname="Name"><a href="'. site_url() .'/my-account/vendor-add-product/?duplicate_id='.get_the_ID().'&action=duplicate" target="_blank">Add Product</a></td>';							
							echo '</tr>';								
						}
						?>
						</tbody>
					</table>
					<?php	
				} else {
					?>
					<div class="row">						
						<p class="woocommerce-form-row woocommerce-form-row--first form-row-first col-md-6 mb-4" style="margin-top: 10px;">
							<span style="margin-bottom: 10px;display: block;">This product is not existing, please add it Manually.</span><br>
							<a href="<?php echo site_url() . '/my-account/vendor-add-product/?isbn='.$isbn_num; ?>" class="woocommerce-Button button btn btn-wide btn-dark text-white rounded-0 transition-3d-hover height-60 width-390" style="height: max-content;">Add product Manually</a>
						</p>
					</div>
					<?php
				}
			}
		}
	?>
</div>
