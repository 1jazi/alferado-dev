<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bookworm
 */

get_header();

while ( have_posts() ) :
	the_post();
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'article article__single space-top-2'); ?>>
		<div class="article-post col-lg-9 px-0 px-md-5 mx-auto bg-white position-relative">
			<h6 class="font-size-10 mb-3 crop-text-2 font-weight-medium text-lh-1dot4"><?php the_title(); ?></h6>
			<div class="row">
				<div class="bookworm-product-gallery col-md-5">
					<?php 
						if (has_post_thumbnail()) {
							the_post_thumbnail();
						}
					?>
				</div>
				
				<div class="summary entry-summary col-md-7 pl-0 border-left">
					<div class="table-responsive">
						<table class="table table-hover table-borderless mb-0">					
							<tbody>
								<?php 
									$center_name = get_field('center_name');
									if (!empty($center_name)) {
										?>
										<tr class="sku_wrapper">
											<th class="px-4 px-xl-5">
												Centre Name: 
											</th>
											<td>
												<span class="sku"><?php echo $center_name; ?></span>
											</td>
										</tr>														
										<?php	
									}
									
									$location = get_field('location');
									if (!empty($location)) {
										?>
										<tr class="sku_wrapper">
											<th class="px-4 px-xl-5">
												Location: 
											</th>
											<td>
												<span class="sku"><?php echo $location; ?></span>
											</td>
										</tr>														
										<?php	
									}								
									
									$operation_time = get_field('operation_time');
									if (!empty($operation_time)) {
										?>
										<tr class="sku_wrapper">
											<th class="px-4 px-xl-5">
												Operation Time: 
											</th>
											<td>
												<span class="sku"><?php echo $operation_time; ?></span>
											</td>
										</tr>														
										<?php	
									}
																	
									$grades = get_field('grades');
									if (!empty($grades)) {
										?>
										<tr class="sku_wrapper">
											<th class="px-4 px-xl-5">
												Grades: 
											</th>
											<td>
												<span class="sku"><?php echo $grades; ?></span>
											</td>
										</tr>														
										<?php	
									}
									
									$phone_number = get_field('phone_number');
									if (!empty($phone_number)) {
										?>
										<tr class="sku_wrapper">
											<th class="px-4 px-xl-5">
												Phone Number: 
											</th>
											<td>
												<span class="sku"><?php echo $phone_number; ?></span>
											</td>
										</tr>														
										<?php	
									}
									
									$website = get_field('website');
									if (!empty($website)) {
										?>
										<tr class="sku_wrapper">
											<th class="px-4 px-xl-5">
												Website: 
											</th>
											<td>
												<a href="<?php echo $website; ?>" target="_blank">Click Here</a>
											</td>
										</tr>														
										<?php	
									}
									
									$facebook_link = get_field('facebook_link');
									if (!empty($facebook_link)) {
										?>
										<tr class="sku_wrapper">
											<th class="px-4 px-xl-5">
												Facebook Link: 
											</th>
											<td>
												<a href="<?php echo $facebook_link; ?>" target="_blank">Click Here</a>
											</td>
										</tr>														
										<?php	
									}
								?>												
							</tbody>
						</table>
					</div>	
				</div>
			</div>
		</div>
	</article><!-- #post-## -->
	<?php
endwhile;

get_footer();
