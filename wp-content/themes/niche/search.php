<?php
/*
 * Search Template File
 */
get_header();
?>
<section class="section-main">
	<div class="page-banner col-md-12">
	<div class="blur-white"></div>
		<div class="container less-padding">
		   <h2 class="page-heading col-md-6">
			<?php
				_e('Search results for', 'niche');
				echo " : " . get_search_query();
			?>
		   </h2>
			<div class="theme-breadcrumb">
				<?php niche_custom_breadcrumbs(); ?>
			</div>
		</div>
	</div>
    <!--search template start-->
    
<div class="theme-content page-margin-top col-md-12">
	<div class="container less-padding">
		<div class="row">
			<?php if (have_posts()) : ?>
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
						<a class="post-title" href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
					<div class="post-meta">
							<?php  niche_entry_meta(); ?>
					</div>
					<?php the_excerpt(); ?>  
				</div>
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
			<?php get_sidebar(); 
				else : ?>
		<div class="latest-blog-img">
			<div class="col-sm-12 search-formmain">
				<p class="spage"><?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords', 'niche'); ?>.</p> 
				<p><?php get_search_form(); ?></p>
			</div>
		</div>
	<?php endif; ?>
		</div>  
	</div>
</div>
    
    

</section>
<?php get_footer(); ?>
