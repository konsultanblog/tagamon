<?php 
/**
 * The right sidebar template file
**/

if(is_page_template('page-template/left-sidebar.php')){ 
	$niche_offset_class= '';
}else{
	$niche_offset_class= 'col-md-offset-1';
}
?>
<div class="main-sidebar col-md-3 col-sm-4 <?php echo $niche_offset_class; ?>">
        <?php
        if (is_active_sidebar('sidebar-1')) {
            dynamic_sidebar('sidebar-1');
        }
        ?>
</div>
