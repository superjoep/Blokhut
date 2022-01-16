<header>
    
</header>
<div class="col-md-4">
<div class="meta mb-3"> <span class="date"><?php the_date(); ?></span></div>
<?php echo wp_strip_all_tags( get_the_content() ); ?>
</div>
<div class="col-md-4">
<img
          src="<?php the_post_thumbnail_url(); ?>"
          class="w-100 shadow-1-strong rounded mb-4"
        />
</div>