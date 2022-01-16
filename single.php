<?php get_header();?>
    <div class="container-fluid header-section">
    <div class="PageImage" style="background-image:url('<?php echo wp_get_attachment_url(get_theme_mod('bl-header-image'))?>')"></div>
    <div class="row justify-content-center">
      <div class="col-md-4"><h1 class="PageTitle"><?php the_title();?></h1></div>
    </div>
</div>

<div class="container-fluid Main-info-post">
<div class="row justify-content-md-center">
    <?php if( have_posts() ){
        while( have_posts() ){
            the_post();
           
            get_template_part( 'template-parts/content', 'article');
        }
    } ?>


</div>
</div>

<?php get_footer();?>