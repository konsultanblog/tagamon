<?php
/**
 * Author Page template file
 * */
get_header();
?>
<!--Author posts start-->
<section>
	<div class="page-banner col-md-12">
	<div class="blur-white"></div>
		<div class="container less-padding">
		   <h2 class="page-heading col-md-6">
			<?php
				_e('Published by', 'niche');
				echo " : " . get_the_author();
			?>
		   </h2>
			<div class="theme-breadcrumb">
				<?php niche_custom_breadcrumbs(); ?>
			</div>
		</div>
	</div>

	<?php get_template_part('content'); ?>
</section>
<!--Author posts end-->
<?php get_footer(); ?>
