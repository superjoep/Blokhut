<?php get_header();?>
<body>
    <div class="container-fluid header-section">
    <div class="PageImage" style="background-image:url('<?php echo wp_get_attachment_url(get_theme_mod('bl-header-image'))?>')"></div>
    <div class="row justify-content-center">
      <div class="col-md-4"><h1 class="PageTitle"><?php the_title();?></h1></div>
    </div>
</div>
<div  class="container-fluid Main-agenda-page">
<div style="padding-left:12%; padding-right: 12%" class="row justify-content-center">
<?php if (have_posts()) : while(have_posts()) : the_post();?>
<?php the_content();?>
<?php endwhile;  endif;?>
</div>
</div>
</div>
</body>





<?php get_footer();?>