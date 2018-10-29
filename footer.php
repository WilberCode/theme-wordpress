<?php

 printf('<div class="main-info">
            <div class="footer customizer-bg"> '); 
      printf(''. wp_nav_menu(array(
                'theme_location' => 'main-menu', 
                'container_class' => 'footer-container',
                'container_id' => 'footer-container',
                'menu_class'=>'footer-menu',
                'menu_id'=>'footer-menu',
                'link_after' => '<span class="menu-item__line"></span>'
            )).'   
            '); 
     printf('<div class="footer__info">
             <h1 class="footer__title">'.get_bloginfo('name').'</h1>
              <p class="footer__copy">'.get_bloginfo('name').' '.get_the_time('Y').'</p>
            </div> ') ;
    printf('</div> 
        </div>');
        printf(' 
     </div>
</main> ');
wp_footer();
?> 

     
        <script src=" <?php bloginfo('template_url');?>./assets/ed-grid/js/ed-grid.js"></script> 
        <script src=" <?php bloginfo('template_url');?>./assets/js/index-dist.js"></script> 

    </body>
</html>

