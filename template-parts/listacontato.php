
      <section class="section-60 section-lg-100">
        <div class="container">
          <div class="row row-40 align-items-sm-end">
       
        <?php

          query_posts( array ( 'category_name' => 'listacontato', 'showposts' => 3 ) );

          if ( have_posts() ) : while ( have_posts() ) : the_post(); 

            $thumbnail_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array('246','300'), true );
            $thumbnail_url = $thumbnail_url[0];

          ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="thumbnail-variant-2-wrap">
                <div class="thumbnail thumbnail-variant-2">
                  <figure class="thumbnail-image"><img src="<?php  echo ( !empty($thumbnail_url) ) ? $thumbnail_url : 'No thumb!';?>" alt="" width="246" height="300"/>
                  </figure>
                  <div class="thumbnail-inner">
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary material-icons-local_phone"></span><a class="link-white" href="tel:#"><?php the_field('telefone') ?></a></div>
                    <div class="link-group"><span class="novi-icon icon icon-xxs icon-primary fa-envelope-o"></span><a class="link-white" href="mailto:#"><?php the_field('email') ?></a></div>
                  </div>
                  <div class="thumbnail-caption">
                    <p class="text-header"><a href="#"><?php the_title(); ?></a></p>
                    <div class="divider divider-md bg-teak"></div>
                    <p class="text-caption"><?php the_field('funcao') ?></p>
                  </div>
                </div>
              </div>
            </div>
             <?php endwhile; else : ?>
             <?php endif; ?>

        <?php

          query_posts( array ( 'p' => '114' ) );

          if ( have_posts() ) : while ( have_posts() ) : the_post();
          ?>
      
            <div class="col-sm-6 col-md-12 col-lg-3 text-center">
              <div class="block-wrap-1">
                <div class="block-number">06</div>
                <h3 class="text-normal"><?php the_title(); ?></h3>

                <p class="h5 h5-smaller text-style-4">
                    <?php 
                        // Remover a criação de HTML dentro do the_content();
                        $content = get_the_excerpt(); 
                        echo wp_filter_nohtml_kses( $content );

                        ?>
              </p>

                <p><?php the_content(); ?></p><a class="link link-group link-group-animated link-bold link-secondary" href="#"><span>Read more</span><span class="novi-icon icon icon-xxs icon-primary fa fa-angle-right"></span></a>
              </div>
            </div>
           <?php endwhile; else : ?>
            <?php endif; ?>
          </div>
        </div>
      </section>