<section id="wrapfirst">
 <div class="container">
  <div class="welcomewrap">
    <img src="<?php echo get_field('immagine_informazioni') ?>" height="380px" width="570px" />
    <h1><?php echo get_field('titolo_informazioni') ?></h1>         
    <?php echo get_field("testo_informazioni") ?>
    <br />
    <br />
    <?php if(get_theme_mod('moreinfo_link', '#')) { ?>
    <a class="MoreLink" href="<?php echo get_theme_mod('moreinfo_link',true); ?>"><?php _e('More Info','restaurant'); ?></a>
    <?php } ?>
    <div class="clear"></div>

  </div><!-- services-wrap-->
  <div class="clear"></div>
</div><!-- container -->
</section>
<div class="clear"></div>