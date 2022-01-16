<?php 
/* Template Name: Agenda Page */
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
<div class="container-fluid Main-agenda-page">
    <div class="row justify-content-center">
<iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%237CB342&ctz=Europe%2FAmsterdam&title=Blokhut&src=am9lcGRla29ja0BnbWFpbC5jb20&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=bmwuZHV0Y2gjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039BE5&color=%237986CB&color=%23009688" style="border-width:0" class="agenda" width="1000" height="600" frameborder="0" scrolling="no"></iframe>
</div>
</div>
</body>





<?php get_footer();?>