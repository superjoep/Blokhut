<?php get_header();?>

<div class="PageImage" style="background-image:url('<?php echo wp_get_attachment_url(get_theme_mod('bl-header-image'))?>')"></div>
<div class="container-fluid">
<div class="d-flex justify-content-center "><h1 class="PageTitle"><?php the_title();?></h1></div>
</div>




<?php get_footer();?>