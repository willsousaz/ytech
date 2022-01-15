  <section class="section-66 section-md-90 section-xl-bottom-100">
        <div class="container">
    <?php
    $args = array('post_type' => 'casos', 'showposts' => -1);
    $casos = get_posts($args);
   
  if($casos): foreach($casos as $post) : setup_postdata($post);
  ?>

          <h3 class="text-center"><?php the_field('titulo') ?></h3>
   <?php 
    endforeach;
    endif;
   ?> 

          <div class="owl-carousel owl-spacing-1 owl-nav-classic owl-style-minimal" data-autoplay="true" data-items="1" data-md-items="2" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="true" data-nav="true" data-dots="true" data-dots-each="1">
    <?php
    $args = array('post_type' => 'casos', 'showposts' => -1);
    $casos = get_posts($args);
   
  if($casos): foreach($casos as $post) : setup_postdata($post);

    $thumbnail_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array('68','68'), true );
    $thumbnail_url = $thumbnail_url[0];
  ?>
            <div class="item">
              <blockquote class="quote-bordered">
                <div class="quote-body">
                  <div class="quote-open">
                    <svg version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="37px" height="27px" viewbox="0 0 21 15" preserveAspectRatio="none">
                      <path d="M9.597,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.349,1.316                    c-1.287,0-2.414-0.44-3.382-1.316C0.482,12.811,0,11.758,0,10.535c0-1.226,0.58-2.716,1.739-4.473L5.603,0H9.34L6.956,6.37                    C8.716,7.145,9.597,8.493,9.597,10.412z M20.987,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.35,1.316                    c-1.288,0-2.415-0.44-3.381-1.316c-0.966-0.879-1.45-1.931-1.45-3.154c0-1.226,0.582-2.716,1.74-4.473L16.994,0h3.734l-2.382,6.37                    C20.106,7.145,20.987,8.493,20.987,10.412z"></path>
                    </svg>
                  </div>
                  <div class="quote-body-inner">
                    <h6><?php the_title(); ?></h6>
                    <p>
                      <q><?php the_content(); ?></q>
                    </p>
                  </div>
                </div>
                <div class="quote-footer">
                  <div class="unit unit-horizontal unit-spacing-sm align-items-center">
                    <div class="unit-left"><img class="img-circle" src="<?php  echo ( !empty($thumbnail_url) ) ? $thumbnail_url : 'No thumb!';?>" alt="" width="68" height="68"/>
                    </div>
                    <div class="unit-body">
                      <cite><?php the_field('author'); ?></cite>
                      <p class="text-primary"><?php the_field('funcao'); ?></p>
                    </div>
                  </div>
                </div>
              </blockquote>
            </div>
            <?php 
       endforeach;
       endif;
      ?> 
          </div>
        </div>
      </section>