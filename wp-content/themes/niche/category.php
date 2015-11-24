<?php
/*
 * Category Template File.
 */
get_header();
?>
<!--category posts start-->
<section>
<div class="page-banner col-md-12">
	<div class="blur-white"></div>
		<div class="container less-padding">
		   <h2 class="page-heading col-md-6">
				<?php echo single_cat_title('', false); ?>
		   </h2>
			<div class="theme-breadcrumb">
				<?php niche_custom_breadcrumbs(); ?>
			</div>
		</div>
	</div>

    <?php get_template_part('content'); ?>
</section>
<!--category posts end-->
<?php get_footer(); ?>
