   
      <section class="bg-displaced-wrap">
          <?php

           query_posts( array ( 'category_name' => 'sobrenos', 'posts_per_page' => -1 ) );

          if ( have_posts() ) : while ( have_posts() ) : the_post(); 

            $thumbnail_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array('342','338'), true );
            $thumbnail_url = $thumbnail_url[0];

          ?>
        <div class="bg-displaced-body">
          <div class="container">
            <div class="inset-xl-left-70 inset-xl-right-70">
              <article class="box-cart bg-ebony-clay">

     
                

                <div class="box-cart-image"><img src="<?php  echo ( !empty($thumbnail_url) ) ? $thumbnail_url : 'No thumb!';?>" alt="" width="342" height="338"/>
                </div>
                <div class="box-cart-body">
                  <blockquote class="blockquote-complex blockquote-complex-inverse">
                    <h3><?php the_title();?></h3>
                    <p>
                      <q><?php the_excerpt();?></q>
                    </p>
                    <div class="quote-footer">
                      <cite><?php the_field('author'); ?></cite><small><?php the_field('funcao'); ?></small>
                    </div>
                  </blockquote>
                  <div class="button-wrap inset-md-left-70"><a class="button button-responsive button-medium button-primary-outline-v2" href="#" >Request a Free Consultation</a></div>


                </div>
              </article>
            </div>
          </div>
        </div>
        <?php endwhile; else : ?>
                    <?php endif; ?>
        <div class="bg-displaced bg-image" style="background-image: url(<?php bloginfo('template_url')?>/images/home-1.jpg);"></div> 
      </section>