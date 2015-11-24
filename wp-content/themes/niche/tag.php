<?php
/*
 * Tag Template File.
 */
get_header();
?>
<!--Blogs posts start-->
<section class="section-main">
	<div class="page-banner col-md-12">
	<div class="blur-white"></div>
		<div class="container less-padding">
		   <h2 class="page-heading col-md-6">
			<?php _e('Tag', 'niche'); echo " : " . single_tag_title('', false); ?>
		   </h2>
			<div class="theme-breadcrumb">
				<?php niche_custom_breadcrumbs(); ?>
			</div>
		</div>
	</div>
    <?php get_template_part('content'); ?>
</section>
<!--Blogs posts end-->
<?php get_footer(); ?>
