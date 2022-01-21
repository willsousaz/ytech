<section class="section-50 section-md-75 section-xl-100">
        <div class="container">


  <?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); 

    $thumbnail_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array('268','182'), true );
    $thumbnail_url = $thumbnail_url[0];
  ?>

          <h3 class="text-center">Latest News</h3>
          <div class="row row-40 row-offset-1 justify-content-sm-center justify-content-md-start">
            <div class="col-sm-9 col-md-6 col-lg-4 col-xl-3">
              <article class="post-boxed">
                <div class="post-boxed-image"><img src="<?php  echo ( !empty($thumbnail_url) ) ? $thumbnail_url : 'No thumb!';?>" alt="" width="268" height="182"/>
                </div>
                <div class="post-boxed-body">
                  <div class="post-boxed-title"><a href="#"><?php the_title(); ?></a></div>
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
          </div>
  <?php endwhile; ?>
<?php endif; ?>
        </div>
      </section>