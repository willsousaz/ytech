<?php get_header(); ?>
      <section>
        <div class="swiper-container swiper-slider swiper-variant-1 bg-black" data-loop="false" data-autoplay="5500" data-simulate-touch="true">
          <div class="swiper-wrapper text-center"> 
            <!-- Div inicio do slider -->

<?php 
    $args = array('post_type' => 'slider', 'showposts' => 5);
    $myslider = get_posts($args);
   
 ?>
         
<?php if($myslider): foreach($myslider as $post) : setup_postdata($post);
   $count = 0;
   $thumbnail_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array('1950','650'), true );
   $thumbnail_url = $thumbnail_url[0];
  ?>

            <div class="swiper-slide" data-slide-bg="<?php echo ( !empty($thumbnail_url) ) ? $thumbnail_url : 'No thumb!'; ?>">
              <div class="swiper-slide-caption text-center">
                <div class="container">
                  <div class="row justify-content-md-center">

                    <div class="col-md-11 col-lg-10 col-xl-9">
                      <div class="header-decorated" data-caption-animate="fadeInUp" data-caption-delay="0s">
                        <h3 class="medium text-primary"><?php the_title();?></h3>
                      </div>
                      <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="150"><?php the_excerpt(); ?></h2>
                       <p class="text-bigger slider-text" data-caption-animate="fadeInUp" data-caption-delay="250">
                        
                        <?php 
                        // Remover a criação de HTML dentro do the_content();
                        $content = get_the_content(); 
                        echo wp_filter_nohtml_kses( $content );

                        ?>
                        </p>
                      <div class="button-block" data-caption-animate="fadeInUp" data-caption-delay="400"><a class="button button-lg button-primary-outline-v2" href="<?php  the_field('link_do_slider'); ?>">Veja Mais</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

<?php 
  endforeach;
  endif;
 ?>            <!-- Div fim Slider -->
          </div>

          <!-- ********************************************************************************-->
          <div class="swiper-scrollbar d-lg-none"></div>
          <div class="swiper-nav-wrap">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </section>

  <?php get_template_part('/template-parts/servicos');?>

  <?php get_template_part('/template-parts/sobrenos');?>

  <?php get_template_part('/template-parts/listacontato');?>

   <?php get_template_part('/template-parts/casos');?>

   <?php get_template_part('/template-parts/email');?>

   <?php get_template_part('/template-parts/noticias');?>

      
      

<?php get_footer(); ?>
