 <section class="section-50 section-md-75 section-lg-100">
        <div class="container">
          <div class="row row-40">



  <?php 
    $args = array('post_type' => 'servicos', 'showposts' => 3);
    $servicos = get_posts($args);
   
  if($servicos): foreach($servicos as $post) : setup_postdata($post);
  ?>
            <div class="col-md-6 col-lg-4 height-fill">
              <article class="icon-box">
                <div class="box-top">
                  <div class="box-icon"><span class="<?php the_field('icones');?>"></span></div>
                  <div class="box-header">
                    <h5><a href="#"><?php the_title();?></a></h5>
                  </div>
                </div>
                <div class="divider bg-accent"></div>
                <div class="box-body">
                  <p><?php the_excerpt(); ?></p>
              </article>
            </div>
  <?php 
  endforeach;
  endif;
 ?>  

          </div>
        </div>
      </section>
   