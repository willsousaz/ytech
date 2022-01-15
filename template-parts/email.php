<section class="bg-whisper">
        <div class="container">
          <div class="row">
        <?php

          query_posts( array ( 'category_name' => 'email,
            ', 'showposts' => 1 ) );

          if ( have_posts() ) : while ( have_posts() ) : the_post(); 

            $thumbnail_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array('246','300'), true );
            $thumbnail_url = $thumbnail_url[0];

          ?>
            <div class="col-md-10 col-lg-9 col-xl-7">
              <div class="section-50 section-md-75 section-xl-100">
      
                <h3><?php   the_title(); ?></h3>
                <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" >
                    <?php   the_content(); ?>
                </form>
              </div>
            </div>
            <div class="col-xl-5 d-none d-xl-block">
              <div style="margin-top: -40px;"><img src="<?php bloginfo('template_url')?>/images/home-4-472x753.png" alt="" width="472" height="753"/>
              </div>
            </div>

            <?php endwhile; else : ?>
             <?php endif; ?>
          </div>
        </div>

      </section>