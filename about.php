<?php get_header();
/*Template Name: About */
global $solid_option;
 ?>
	<main>
			<div class="wrap write">

				<div class="info_work_box main_flex flex__jcontent_between
				flex__align-content_stretch flex__align-items_start ">
					<div class="left_box">

								<img src="<?php echo get_field('head_post_img'); ?>" alt="" class="img_about ">

						<div class="about_work">
							<?php the_post();the_content(); ?>
						</div>

						<div class="text_title_proj">
							<p>Related Projects</p>
						</div>

						<div class="proj main_flex flex__jcontent_start">
							<?php
						$query = new WP_Query( array( 'category_name' => 'blog','posts_per_page' => '8','paged' => get_query_var('paged') ?: 1 ) );
					if($query->have_posts()): ?>
					<?php while($query->have_posts()): ?><?php $query->the_post();
					$work_view=get_field('work_view');
					 ?>
							<div class="img_about_p">
								<?php the_post_thumbnail( $attr = 'img1' ) ?>
									<a href="<?php echo get_page_link( 11 ); ?>?post=<?php the_ID();?>">
										<h2><?php the_title(); ?></h2>
										<h3><?php echo $work_view;?></h3>
									</a>
							</div>
						<?php  endwhile; endif; wp_reset_query();wp_reset_postdata(); ?>

						</div>




					</div>
					<div class="right_box">
						<div class="our">
							<p class="text_title"><?php echo $solid_option['id_sk_title'];?></p>
							<ul>
								<?php
								if (count($solid_option['id_sk_name'])>count($solid_option['id_sk_proc']) || count($solid_option['id_sk_name'])==count($solid_option['id_sk_proc']))
								{
									$count_my_bar=count($solid_option['id_sk_name']);
								} else {$count_my_bar=count($solid_option['id_sk_proc']);}

								for($i=0;$i<$count_my_bar;$i++){ ?>
								<li>
									<div class="f_line_our main_flex__nowrap flex__jcontent_between flex__align-items_center">
										<p><?php echo $solid_option['id_sk_name'][$i];  ?></p>
										<p><?php echo $solid_option['id_sk_proc'][$i];  ?>%</p>

									</div>

									<div class="prog">
										<div class="pr_bar" data-skill="<?php echo $solid_option['id_sk_proc'][$i]; ?>">
										</div>
									</div>
								</li>
								<?php } ?>
							</ul>
						</div>

						<div class="testimonials">
							<p class="text_title">
								<?php echo $solid_option['id_testimonials_title'];?>
							</p>
							<div class="huw main_flex__nowrap" >
								<img src="<?php echo $solid_option['testimonials_select_image'];?>" alt="">
								<div class="testimonials_name main_flex__nowrap flex__align-items-center">
									<h3><?php echo $solid_option['id_testimonials_exp'];?></h3>
								</div>
							</div>

								<div class="testimonials_text">
									<p><?php echo $solid_option['id_testimonials_textarea'];?></p>
								</div>

						</div>

							<div class="services">

							<p><?php echo $solid_option['id_list_title'];?></p>

							<ol>
								<?php foreach ($solid_option['id_list_name'] as $list_sr){ 

													echo '<li>'.$list_sr.'</li>';
																}
								?>

							</ol>
						</div>

					</div>

				</div>

			</div>
	</main>
<?php get_footer();?>
