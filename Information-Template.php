<?php 
/* Template Name: Information Page */
?>
<?php get_header();?>
<body>
    <div class="container-fluid header-section">
    <div class="PageImage" style="background-image:url('<?php echo wp_get_attachment_url(get_theme_mod('bl-header-image'))?>')"></div>
    <div class="row justify-content-center">
      <div class="col-md-2"><h1 class="PageTitle"><?php the_title();?></h1></div>
    </div>
</div>
  
</div>
<div class="container-fluid Main-info-page">
<div class="row justify-content-md-center">
<div class="col-md-4 box-info ">
        <h2 class="Main-text-header">Wat is de blokhut?</h2></br>
        <p class="textfield_Style"><?php echo get_theme_mod('bl-Main-text')?></p>
      </div>
  
      
   
      <div class="col-lg-2 col-md-5 mb-1 mb-lg-0">
        <img
          src="<?php echo wp_get_attachment_url(get_theme_mod('bl-main-image'))?>"
          class="w-100 shadow-1-strong rounded mb-4"
        />

        <img
          src="<?php echo wp_get_attachment_url(get_theme_mod('bl-main-image3'))?>"
          class="w-100 shadow-1-strong rounded mb-4"
        />
      </div>

      <div class="col-lg-2 mb-4 mb-lg-0">
        <img
          src="<?php echo wp_get_attachment_url(get_theme_mod('bl-main-image2'))?>"
          class="w-100 shadow-1-strong rounded mb-4"
        />
      </div>
    </div>
  </div>
</div>

</body>





<?php get_footer();?>