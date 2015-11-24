<?php
/**
 * Archive Page template file
 * */
get_header();
?>
<section>
	<div class="page-banner col-md-12">
	<div class="blur-white"></div>
		<div class="container less-padding">
		   <h2 class="page-heading col-md-6">
			<?php the_archive_title(); ?>
		   </h2>
			<div class="theme-breadcrumb">
				<?php niche_custom_breadcrumbs(); ?>
			</div>
		</div>
	</div>

    <?php get_template_part('content'); ?>
</section>
<!--Archive posts end-->
<?php get_footer(); ?>
