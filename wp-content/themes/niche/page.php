<?php
/**
 * Main Page template file
 * */
get_header();
?>
<section class="section-main">
    <div class="page-banner col-md-12">
		<div class="blur-white"></div>
		<div class="container less-padding">
		   <h2 class="page-heading col-md-6">
				<?php the_title(); ?>
		   </h2>
			<div class="theme-breadcrumb">
				<?php niche_custom_breadcrumbs(); ?>
			</div>
		</div>
	</div>
    
<!-- page content start-->
<div class="theme-content page-margin-top col-md-12">
	<div class="container less-padding">
		<div class="row">
			<div class="content-blog col-md-8">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="ourblog-box">
					<?php if ( has_post_thumbnail() ) : ?>
					<div class="post-header">
						<div class="image-wrapper">
							<?php the_post_thumbnail( 'niche-blog-thumbnail-image', array( 'alt' => get_the_title(), 'class' => 'img-responsive') ); ?>
						</div>
					</div>	
					<?php endif; ?>
					<div class="post-detail">
						<?php the_content(); ?> 
				</div>
				<?php comments_template( '', true ); ?>
			</div>
		<?php endwhile;  ?> 	
				<!--pagination-->
				<div class="pagination col-md-12">
					 <?php
                       // Previous/next page navigation.
                       the_posts_pagination();
                     ?>
				</div>
			</div>
		<?php get_sidebar(); ?>
		</div>  
	</div>
</div>
<!-- page content end-->
</section>
<?php get_footer(); ?>
