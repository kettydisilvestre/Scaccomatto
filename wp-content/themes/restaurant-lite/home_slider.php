<section id="home_slider">
  <div class="sm_slider">
    <div class="sm_slider_item">
      <div class="sm_slider_item_inner">
        <div class="sm_sliderimage" style="background-image: url(<?php echo get_field('immagine_slide1'); ?>)"></div>
        <?php if(get_field('titolo_slide1') && get_field('testo_slide1')) :?>
        <div class="sm_slider_infos">
          <div class="sm_slider_infos_title"><?php echo get_field('titolo_slide1'); ?></div>
          <div class="sm_slider_infos_subtitle"><?php echo get_field('testo_slide1'); ?></div>
        </div>
      <?php endif;?>
      </div>
    </div> 
    <div class="sm_slider_item">
      <div class="sm_slider_item_inner">
        <?php if(get_field('titolo_slide2') && (!get_field('testo_slide2') || get_field('testo_slide2')=='')):?>
          <div class="sm_slide_solo_title_bg"></div>
          <div class="sm_slide_solo_title"><?php echo get_field('titolo_slide2')?></div>
        <?php endif; ?>
      <div class="sm_sliderimage" style="background-image: url(<?php echo get_field('immagine_slide2'); ?>)"></div>
        <?php if(get_field('titolo_slide2') && get_field('testo_slide2')) :?>
         <div class="sm_slider_infos">
          <div class="sm_slider_infos_title"><?php echo get_field('titolo_slide2'); ?></div>
          <div class="sm_slider_infos_subtitle"><?php echo get_field('testo_slide2'); ?></div>
        </div>
      <?php endif; ?>
    </div> 
  </div> 
    <div class="sm_slider_item">
      <div class="sm_slider_item_inner">
      <div class="sm_sliderimage" style="background-image: url(<?php echo get_field('immagine_slide3'); ?>)"></div>
        <?php if(get_field('titolo_slide3') && get_field('testo_slide3')) :?>
         <div class="sm_slider_infos">
          <div class="sm_slider_infos_title"><?php echo get_field('titolo_slide3'); ?></div>
          <div class="sm_slider_infos_subtitle"><?php echo get_field('testo_slide3'); ?></div>
        </div>
      <?php endif; ?>
    </div>
  </div>
  </div>


</section>
<div class="clear"></div>