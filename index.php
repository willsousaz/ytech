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



      <section class="section parallax-container bg-black" data-parallax-img="<?php bloginfo('template_url')?>/images/progress-bars-parallax-1.jpg">
        <div class="parallax-content">
          <div class="section-50 section-md-90">
            <div class="container">
              <div class="row row-40">
                <div class="col-sm-6 col-md-3">
                  <div class="box-counter box-counter-inverse"><span class="novi-icon icon icon-lg icon-primary mercury-icon-group"></span>
                    <div class="text-large counter">1450</div>
                    <p class="box-header">Happy Clients</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="box-counter box-counter-inverse"><span class="novi-icon icon icon-lg-smaller icon-primary mercury-icon-scales"></span>
                    <div class="text-large counter">23</div>
                    <p class="box-header">Years of Experience</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="box-counter box-counter-inverse"><span class="novi-icon icon icon-lg-smaller icon-primary mercury-icon-partners"></span>
                    <div class="text-large counter counter-percent">98</div>
                    <p class="box-header">Successful Cases</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="box-counter box-counter-inverse"><span class="novi-icon icon icon-lg icon-primary mercury-icon-case"></span>
                    <div class="text-large counter">7500</div>
                    <p class="box-header">Personal Injury Cases</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


    <?php get_template_part('/template-parts/casos');?>


    <?php get_template_part('/template-parts/email');?>

      
      <section class="section-50 section-md-75 section-xl-100">
        <div class="container">
          <h3 class="text-center">Latest News</h3>
          <div class="row row-40 row-offset-1 justify-content-sm-center justify-content-md-start">
            <div class="col-sm-9 col-md-6 col-lg-4 col-xl-3">
              <article class="post-boxed">
                <div class="post-boxed-image"><img src="<?php bloginfo('template_url')?>/images/home-5-268x182.jpg" alt="" width="268" height="182"/>
                </div>
                <div class="post-boxed-body">
                  <div class="post-boxed-title"><a href="#">The Lawyers Collective Women's Rights Initiative</a></div>
                  <div class="post-boxed-footer">
                    <ul class="post-boxed-meta">
                      <li>
                        <time datetime="2019-06-14">JUNE 14, 2019</time>
                      </li>
                      <li><span>by</span><a href="#">Admin</a></li>
                    </ul>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-9 col-md-6 col-lg-4 col-xl-3">
              <article class="post-boxed">
                <div class="post-boxed-image"><img src="<?php bloginfo('template_url')?>/images/home-6-268x182.jpg" alt="" width="268" height="182"/>
                </div>
                <div class="post-boxed-body">
                  <div class="post-boxed-title"><a href="#">Legal Documents Every Landlord Needs</a></div>
                  <div class="post-boxed-footer">
                    <ul class="post-boxed-meta">
                      <li>
                        <time datetime="2019-06-20">JUNE 20, 2019</time>
                      </li>
                      <li><span>by</span><a href="#">Admin</a></li>
                    </ul>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-9 col-md-6 col-lg-4 col-xl-3">
              <article class="post-boxed">
                <div class="post-boxed-image"><img src="<?php bloginfo('template_url')?>/images/home-7-268x182.jpg" alt="" width="268" height="182"/>
                </div>
                <div class="post-boxed-body">
                  <div class="post-boxed-title"><a href="#">Help Us Make the Law Accessible for Everyone</a></div>
                  <div class="post-boxed-footer">
                    <ul class="post-boxed-meta">
                      <li>
                        <time datetime="2019-06-23">JUNE 23, 2019</time>
                      </li>
                      <li><span>by</span><a href="#">Admin</a></li>
                    </ul>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-9 col-md-6 col-lg-4 col-xl-3">
              <article class="post-boxed">
                <div class="post-boxed-image"><img src="<?php bloginfo('template_url')?>/images/home-8-268x182.jpg" alt="" width="268" height="182"/>
                </div>
                <div class="post-boxed-body">
                  <div class="post-boxed-title"><a href="#">5 Legal Documents for Military Service People</a></div>
                  <div class="post-boxed-footer">
                    <ul class="post-boxed-meta">
                      <li>
                        <time datetime="2019-06-12">JUNE 12, 2019</time>
                      </li>
                      <li><span>by</span><a href="#">Admin</a></li>
                    </ul>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
<?php get_footer(); ?>
