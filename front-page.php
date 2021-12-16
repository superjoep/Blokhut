<?php get_header();?>

<div class="MainPageImage" style="background-image:url('<?php echo wp_get_attachment_url(get_theme_mod('bl-header-image'))?>')"></div>
<div class="container-fluid">
<div class="main-header-text row ">
<div class="col-md-4 offset-md-2 header_text_props">
    <h1 class="maintitle"><?php echo get_theme_mod('bl-header-headline')?></h1>
    <p class="TypeTextShort"><?php echo get_theme_mod('bl-header-text')?></p>
    <div class="row" style="margin-top:6%">
    <div class="col-sm-3"><button type="button" class="btn btn-primary">Meer Info</button></div>
    <div class="col-sm-3"><button type="button" class="btn btn-secondary">Contact</button></div>
    </div>
    </div>
</div>
</div>
</div>

<?php get_footer();?>