<?php
/**
 * The default template for displaying content
 */
?>
<div class="theme-content page-margin-top col-md-12">
	<div class="container less-padding">
		<div class="row">
			<div class="content-blog col-md-8 col-sm-8">
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
						<a class="post-title" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_attr(get_the_title()); ?></a>
					<div class="post-meta">
							<?php niche_entry_meta(); ?>
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
		<?php get_sidebar(); ?>
		</div>  
	</div>
</div>
    
