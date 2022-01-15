<div class="rd-navbar-group">
   <div class="rd-navbar-panel">
      <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button><a class="rd-navbar-brand brand" href="index.html"><img src="<?=YDIR?>/images/logo-default-143x27.png" alt="" width="143" height="27"/></a>
   </div>
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-nav-inner">
                    <div class="rd-navbar-btn-wrap"><a class="button button-smaller button-primary-outline" href="#">Appointment</a></div>
             
                          <?php
                            $args = array(
                            'menu_class' => 'rd-navbar-nav',        
                            'menu' => '(menus)'
                            );
                          wp_nav_menu( $args );
                          ?>
                  </div>
              </div>
</div>