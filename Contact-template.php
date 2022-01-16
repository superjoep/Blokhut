<?php 
/* Template Name: Contact Page */
?>
<?php get_header();?>
<body>
    <div class="container-fluid header-section">
    <div class="PageImage" style="background-image:url('<?php echo wp_get_attachment_url(get_theme_mod('bl-header-image'))?>')"></div>
    <div class="row justify-content-center">
      <div class="col-md-4"><h1 class="PageTitle"><?php the_title();?></h1></div>
    </div>
</div>
  
</div>
<div class="container-fluid Main-info-page">
<div class="row justify-content-center">
<div class="col-md-3">
        <h2 class="Main-text-header">Informatie</h2></br>
        <p class="textfield_Style">Adolf van kortenbackstraat 92<br>
        0612736748<br>
Blokhut@gmail.com<br></p>
<iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=Adolf%20van%20Cortenbachstraat%2092&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    <br><style>.mapouter{text-align:left;height:500px;width:600px;}</style><style>.gmap_canvas {background:none;height:500px;width:600px;}</style>
      </div>
      <div class="col-md-1">
</div>
<div class="col-md-3">
      <h2 class="Main-text-header">Contact formulier</h2></br>
        <?php if (have_posts()) : while(have_posts()) : the_post();?>
        <?php the_content();?>
        <?php endwhile;  endif;?>
      </div>
  </div>
</div>

</body>





<?php get_footer();?>