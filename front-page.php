<?php get_header();?>



<!-- Header image + text -->
<div class="container-fluid">
  <div class="MainPageImage" style="background-image:url('<?php echo wp_get_attachment_url(get_theme_mod('bl-header-image'))?>')"></div>
  <div class="main-header-text">
      <div class="col-md-4 offset-md-2 header_text_props">
      <h1 class="maintitle "><?php echo get_theme_mod('bl-header-headline')?></h1>
      <p class="TypeTextShort"><?php echo get_theme_mod('bl-header-text')?></p>
        <div class="row" style="margin-top:6%; margin-left: -3%;">
          <div style="margin-right: 15px;" class="col-sm-3"><a href="<?php the_permalink();?>" type="button" class="btn btn-primary">Meer info</a></div>
          <div class="col-sm-3"><a href="<?php the_permalink();?>" type="button" class="btn btn-secondary">Contact</a></div>
        </div>
      </div>
  </div>
</div>

<!-- About Blokhut -->
<div class="container-fluid Main-info-section">
  <div class="row justify-content-md-center">
    <div class="col-lg-2 col-md-5 mb-3 mb-lg-0">
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

      <div class="col-md-4 box-front-info">
        <h2 class="Main-text-header">Wat is de blokhut?</h2></br>
        <p class="textfield_Style"><?php echo get_theme_mod('bl-Main-text')?></p>
      </div>
    </div>
  </div>
</div>

<!-- Nieuws -->
<div class="container-fluid Nieuws-section ">
  <h2 class="Main-Page-header" style="text-align:center; padding-top:2%;">Nieuws</h2>
  
  <div class="row  justify-content-center Nieuws-section-items ">
    <?php if (have_posts()) : while(have_posts()) : the_post();?>
      <div class="col-sm-3 ">
          <div class="p-4">
            <div class="card card-size ">
            <?php if (has_post_thumbnail()):?>
              <img class="card-img-top" src="<?php the_post_thumbnail_url();?>" alt="Card image cap">
              <?php endif;?>
                <div class="card-body">
                  <h5 class="card-title Main-text-header"><?php the_title();?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo get_the_date(); ?></h6>
                  <p class="card-text textfield_Style"><?php the_excerpt();?></p>
                  <a href="<?php the_permalink();?>" type="button" class="btn btn-primary">Lees meer</a>
                </div>
            </div>
          </div>
        </div>
      <?php endwhile;  endif;?>
  </div>
</div>


<!-- FAQ -->
<div class="container Main-faq-section">
  <h1 class="Main-Page-header" style="text-align:center; padding-bottom:5%;">Veelgestelde vragen</h1>
<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <?php echo get_theme_mod('bl-question1-headline')?>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      <?php echo get_theme_mod('bl-question1-text')?>          
     </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <?php echo get_theme_mod('bl-question2-headline')?>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
      <?php echo get_theme_mod('bl-question2-text')?>     
          </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <?php echo get_theme_mod('bl-question3-headline')?>
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
      <?php echo get_theme_mod('bl-question3-text')?>      
    </div>
    </div>
  </div>
</div>
</div>
<?php get_footer();?>