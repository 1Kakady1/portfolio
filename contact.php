<?php get_header(  );
/*Template Name:Contact*/ ?>
<?php global $solid_option; ?>
	<main id="map">
			<div class="wrap bg_contact">

				<div id="contact_box" class="write">
						<div id="form-content">

							<div class="name-f-msg">
								<?php the_post(); the_content();?>
								<div id="main_flex__nowrap">
								<?php echo do_shortcode('[contact-form-7 id="73" title="myform"]'); ?>
							</div>
						</div>
				</div>



			</div>
			<?php if($solid_option['switch-off']==1){ ?>
			<div id="map_goole">
				<iframe src="<?php echo $solid_option['id_map']; ?>" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<?php } ?>
		</div>

	</main>

<?php get_footer(); ?>
