<?php
/**
 * 404 page template file
 * */
get_header();
?>
<section>
<div class="page-banner col-md-12">
	<div class="blur-white"></div>
		<div class="container less-padding">
		   <h2 class="page-heading col-md-6">
				<?php _e('404 - Article Not Found', 'niche'); ?>
		   </h2>
			<div class="theme-breadcrumb">
				<?php niche_custom_breadcrumbs(); ?>
			</div>
		</div>
	</div>

    <!-- 404 Content Start -->
    <div class="container theme-content">
        <div class="page-article">
            <div class="row blog-page">
                <div class="col-md-12 col-sm-12 no-padding">
                    <div class="jumbotron">
                        <h1><?php _e('Epic 404 - Article Not Found', 'niche') ?></h1>
                        <p><?php _e("This is embarassing. We can't find what you were looking for.", "niche") ?></p>
                        <p><?php _e('Whatever you were looking for was not found, but maybe try looking again or search using the form below.', 'niche') ?></p>
                        <div class="row">
                            <div class="col-sm-12 search-formmain">
                                <?php get_search_form(); ?>
                            </div>
                        </div>
                    </div>            
                </div>
            </div> </div>
    </div>
    <!-- 404 Content End -->
</section>
<?php get_footer(); ?>
