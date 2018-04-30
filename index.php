<?php get_header();
/*
Template Name: Home page
*/
?>

	<main>

		<div class="work_list main_flex flex__jcontent_start">

		<?php if (have_posts ()): query_posts ('cat=2&order=ASC');
					while (have_posts ()): the_post ();
					$work_view=get_field('work_view');?>

			<div class="work_box sort <?php echo get_field('proj_fl'); ?>">
				<?php the_post_thumbnail()?>
				<a href="<?php echo get_page_link( 11 ); ?>?post=<?php the_ID();?>">
					<h2><?php the_title()?></h2>
					<h3><?php echo $work_view;?></h3>
					<p class="arrow">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 490.4 490.4" style="enable-background:new 0 0 490.4 490.4;" xml:space="preserve">

							<path d="M245.2,490.4c135.2,0,245.2-110,245.2-245.2S380.4,0,245.2,0S0,110,0,245.2S110,490.4,245.2,490.4z M245.2,24.5
								c121.7,0,220.7,99,220.7,220.7s-99,220.7-220.7,220.7s-220.7-99-220.7-220.7S123.5,24.5,245.2,24.5z"/>
							<path d="M138.7,257.5h183.4l-48,48c-4.8,4.8-4.8,12.5,0,17.3c2.4,2.4,5.5,3.6,8.7,3.6s6.3-1.2,8.7-3.6l68.9-68.9
								c4.8-4.8,4.8-12.5,0-17.3l-68.9-68.9c-4.8-4.8-12.5-4.8-17.3,0s-4.8,12.5,0,17.3l48,48H138.7c-6.8,0-12.3,5.5-12.3,12.3
								C126.4,252.1,131.9,257.5,138.7,257.5z"/>
						</svg>
					</p>
				</a>
			</div>

			<?php  endwhile; endif; wp_reset_query(); ?>
		</div>
	</main>

	<?php get_footer( ) ?>
