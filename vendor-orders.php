<?php 
$paged  = !empty($_GET['custom_page']) ? $_GET['custom_page'] : 1;
$offset = ($paged - 1) * 10;

$args = array(
	'post_type' => 'product',
	'post_status' => array('draft', 'publish'),
	'nopaging' => true,
	'ignore_sticky_posts' => true,
	'author' => get_current_user_id(),
	'no_found_rows' => true,
	'fields' => 'ids',
	'paged' => $paged,
	'offset' => $offset
);

$the_query = new WP_Query( $args );
$products = !empty($the_query->posts) ? $the_query->posts : false;

if (!empty($products)) {
	$orders = array();
	
	foreach ($products as $key => $product) {
		$p_orders = get_orders_ids_by_product_id($product);		
		if (!empty($p_orders)) {
			/*$orders = array_unique(array_merge($p_orders, $orders));*/
			$orders[] = $product;
		}
	}	
	
	
	if (!empty($orders)) {
		?>
		<table>
			<tr>
				<th>S. No.</th>
				<th>Book ID</th>
				<th>Book Title</th>
				<th>Commission</th>
			</tr>
			<?php 
				$i = ($paged - 1) * 10 + 1;
				foreach ($orders as $key => $value) {
					/* $order = wc_get_order( $value ); */
					?>
					<tr>
						<td><?php echo $key+1; ?></td>
						<td><?php echo $value; ?></td>
						<td>
						<?php 
							echo get_the_title($value);								
						?></td>
						<td>
							<?php 
								$commission = 0;
								/* $items = $order->get_items(); 
								$commission = 0;
								foreach ($items as $item) {
									if (!empty($item['product_id']) && in_array($item['product_id'], $products)) { */
										$price = get_post_meta($value, '_regular_price', true); 
										
										if ($price > 0 && $price <= 10 ) {
											$commission += $price * 0.60; 
										} 
										
										if ($price > 10 && $price <= 30) {
											$commission += $price * 0.65; 
										}
										
										if ($price > 30 && $price <= 50) {
											$commission += $price * 0.70; 
										}
										
										if ($price > 50 && $price <= 100) {
											$commission += $price * 0.75; 
										}
									/* }
								} */
								echo $commission.' JD';	
								/*if(pll_current_language() == 'en') {
									echo $commission.' JD';	
								} else {
									echo $commission.' AED';
								}*/								
							?>
						</td>
					</tr>
					<?php
					$i++;
				}
			?>
		</table>
		<nav class="child-pagination">
			<?php child_wpex_pagination($the_query->max_num_pages, $paged, 'vendor-orders'); ?>
		</nav>	
		<?php
	}
} 