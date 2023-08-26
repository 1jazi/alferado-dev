<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
//$variations_json = wp_json_encode( $available_variations );
if (isset($_POST['delete_product'])) { 
	if (!empty($_POST['product_id'])) {
		$delete = wp_delete_post($_POST['product_id'], true);
		if ($delete) {
			echo '<p class="success">Product deleted successfully!</p>';
		}	
	}
}

$paged  = !empty($_GET['custom_page']) ? $_GET['custom_page'] : 1;
$offset = ($paged - 1) * 10;
$args = array(
	'post_type' 	 => 'product',
	'post_status' 	 => array('draft', 'publish'),
	'posts_per_page' => 10,
	'ignore_sticky_posts' => true,
	'author' => get_current_user_id(),
	'paged' => $paged,
	'offset' => $offset
	
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ){
	?>
	<table>
		<tr>
			<!--<th>S. No.</th> -->
			<th>Image</th>
			<th>Product Name</th>
			<th>Product Status</th>
			<th>ISBN</th>
			<th>Owner Price</th>
			<th>Action</th>
			<th>Delete</th>
		</tr>		
		<?php 			
			$i = ($paged - 1) * 10 + 1;
			while ( $the_query->have_posts() ) {
				$the_query->the_post();		
				global $product;
				$product_id = get_the_ID();
				$product = wc_get_product($product_id);
				$stock_qty = $product->get_stock_quantity();
				$cost = get_post_meta($product_id, '_alg_wc_cog_cost', true);
				?>
				<tr>
					<td>
						<?php
							$get_the_post_thumbnail_url = get_the_post_thumbnail_url($product_id, 'thumbnail');
							echo '<img src="'.$get_the_post_thumbnail_url.'" width="50" height="60" />' ?></td>
							<td width="200" ><?php echo get_the_title();  ?>
					</td>
					
					<td>
						<?php 
							if ($stock_qty == 0){
								//echo 'Sold';
								echo 'Listed';
							} else {
								if ('draft' == get_post_status()) {
									echo 'Registered on Alefredo Platfrom';
								}
								else
								{
									//echo 'Sold';
									echo 'Listed';
								}
							}
						?>
					</td>	
					<td><?php
					$isbn = get_field('isbn-13', $product_id);
					echo $isbn; ?></td>
					<td>
						<?php 
							echo $cost;
						?>
					</td>	
					<td>
						<a href="<?php echo site_url() . '/my-account/vendor-add-product/?id=' . $product_id . '&action=edit'  ?>">Edit</a>
					</td>
					<td>
					<?php 
// 						if ('publish' != get_post_status()) {
							?>
							<form method="post">
								<input type="hidden" name="product_id" value="<?php echo $product_id; ?>"/>
								<button type="submit" name="delete_product">Delete</button>
							</form>
 							<?php
// 						}
					?>
					</td>
					
					
				</tr>
				<?php	
				$i++;	
			}
		?>
	</table>
	<nav class="child-pagination">
		<?php child_wpex_pagination($the_query->max_num_pages, $paged, 'vendor-products'); ?>
	</nav>
	<?php
	
} else {
	echo '<p>No product found. Please add product first.</p>';
}

wp_reset_postdata();