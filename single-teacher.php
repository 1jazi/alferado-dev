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
									$section = get_field('section');
									if (!empty($section)) {
										?>
										<tr class="sku_wrapper">
											<th class="px-4 px-xl-5">
												Section: 
											</th>
											<td>
												<span class="sku"><?php echo $section; ?></span>
											</td>
										</tr>														
										<?php	
									}
									
									$subject = get_field('subject');
									if (!empty($subject)) {
										?>
										<tr class="sku_wrapper">
											<th class="px-4 px-xl-5">
												Subject: 
											</th>
											<td>
												<span class="sku"><?php echo $subject; ?></span>
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
																	
									$grade = get_field('grade');
									if (!empty($grade)) {
										?>
										<tr class="sku_wrapper">
											<th class="px-4 px-xl-5">
												Grade: 
											</th>
											<td>
												<span class="sku"><?php echo $grade; ?></span>
											</td>
										</tr>														
										<?php	
									}
									
									$years_of_experience = get_field('years_of_experience');
									if (!empty($years_of_experience)) {
										?>
										<tr class="sku_wrapper">
											<th class="px-4 px-xl-5">
												Years of Experience: 
											</th>
											<td>
												<span class="sku"><?php echo $years_of_experience; ?></span>
											</td>
										</tr>														
										<?php	
									}
									
									$available_location = get_field('available_location');
									if (!empty($available_location)) {
										?>
										<tr class="sku_wrapper">
											<th class="px-4 px-xl-5">
												Available Location: 
											</th>
											<td>
												<span class="sku"><?php echo $available_location; ?></span>
											</td>
										</tr>														
										<?php	
									}
									
									$time_availability = get_field('time_availability');
									if (!empty($time_availability)) {
										?>
										<tr class="sku_wrapper">
											<th class="px-4 px-xl-5">
												Time Availability: 
											</th>
											<td>
												<span class="sku"><?php echo $time_availability; ?></span>
											</td>
										</tr>													
										<?php	
									}
									
									$day_available = get_field('day_available');
									if (!empty($day_available)) {
										?>
										<tr class="sku_wrapper">
											<th class="px-4 px-xl-5">
												Day Available: 
											</th>
											<td>
												<span class="sku"><?php echo $day_available; ?></span>
											</td>
										</tr>													
										<?php	
									}
									
									$free_trial_availability = get_field('free_trial_availability');
									if (!empty($free_trial_availability)) {
										?>
										<tr class="sku_wrapper">
											<th class="px-4 px-xl-5">
												Free Trial Availability: 
											</th>
											<td>
												<span class="sku"><?php echo $free_trial_availability; ?></span>
											</td>
										</tr>													
										<?php	
									}
									
									$educational_degree = get_field('educational_degree');
									if (!empty($educational_degree)) {
										?>
										<tr class="sku_wrapper">
											<th class="px-4 px-xl-5">
												Educational Degree:  
											</th>
											<td>
												<span class="sku"><?php echo $educational_degree; ?></span>
											</td>
										</tr>													
										<?php	
									}
									
									$majoring = get_field('majoring');
									if (!empty($majoring)) {
										?>
										<tr class="sku_wrapper">
											<th class="px-4 px-xl-5">
												Majoring: 
											</th>
											<td>
												<span class="sku"><?php echo $majoring; ?></span>
											</td>
										</tr>													
										<?php	
									}
									
									$minimum_price_per_hour = get_field('minimum_price_per_hour');
									if (!empty($minimum_price_per_hour)) {
										?>
										<tr class="sku_wrapper">
											<th class="px-4 px-xl-5">
												Minimum Price Per Hour: 
											</th>
											<td>
												<span class="sku"><?php echo $minimum_price_per_hour; ?></span>
											</td>
										</tr>													
										<?php	
									}
									
									$mobile_number = get_field('mobile_number');
									if (!empty($mobile_number)) {
										?>
										<tr class="sku_wrapper">
											<th class="px-4 px-xl-5">
												Phone No.: 
											</th>
											<td>
												<span class="sku"><?php echo $mobile_number; ?></span>
											</td>
										</tr>													
										<?php	
									}
									
									$age = get_field('age');
									if (!empty($age)) {
										?>
										<tr class="sku_wrapper">
											<th class="px-4 px-xl-5">
												Age: 
											</th>
											<td>
												<span class="sku"><?php echo $age; ?></span>
											</td>
										</tr>													
										<?php	
									}	

									$attached_cv = get_field('attached_cv');
									if (!empty($attached_cv)) {
										?>
										<tr class="sku_wrapper">
											<th class="px-4 px-xl-5">
												Attached CV: 
											</th>
											<td>
												<span class="sku"><a href="<?php echo $attached_cv; ?>" target="_blank">Click Here</a></span>
											</td>
										</tr>													
										<?php	
									}

									$facebook_page__profile = get_field('facebook_page__profile');
									if (!empty($facebook_page__profile)) {
										?>
										<tr class="sku_wrapper">
											<th class="px-4 px-xl-5">
												Facebook Profile: 
											</th>
											<td>
												<span class="sku"><a href="<?php echo $facebook_page__profile; ?>" target="_blank">Click Here</a></span>
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
