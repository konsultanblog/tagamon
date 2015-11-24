<?php
/**
 * Single Post template file
 * */
get_header();
?>
<section>
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
<div class="theme-content page-margin-top col-md-12">
	<div class="container less-padding">
		<div class="row">
			<div class="content-blog col-md-8">
			<?php while (have_posts()) : the_post(); ?>	
				<div class="ourblog-box">
					<?php if ( has_post_thumbnail() ) : ?>
					<div class="post-header">
						<div class="image-wrapper">
						<?php the_post_thumbnail( 'niche-blog-thumbnail-image', array( 'alt' => get_the_title(), 'class' => 'img-responsive') ); ?>
						</div>
					</div>
					<?php endif; ?>
					<div class="post-detail">
						<span class="post-title"><?php the_title(); ?></span>
						<div class="post-meta">
							<?php  niche_entry_meta(); ?>  
						</div>
						<?php
							the_content();
							wp_link_pages(array(
								'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'niche') . '</span>',
								'after' => '</div>',
								'link_before' => '<span>',
								'link_after' => '</span>',
							));
						?>
					</div>
				</div>
				<!--pagination-->
				<div class="nex-pre-button col-md-12">
					<?php
						the_post_navigation(array(
							'next_text' =>
							'<span class="page-numbers previous-post pre"> %title </span>',
							'prev_text' =>
							'<span class="page-numbers next-post nex"> %title </span>',
						));
					?>
				</div>
			<?php endwhile; ?>
				<div class="comments-article">
					<div class="clearfix"></div> 
					<?php comments_template('', true); ?>
				</div>
			</div>
		<?php get_sidebar(); ?>
		</div>  
	</div>
</div>
</section>
<?php get_footer(); ?>
