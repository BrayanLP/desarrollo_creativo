<nav>
  <div class="container">
    <div class="nav-wrapper">
      <?php
        $args = array(
            'post_type' => 'informacion',
           'posts_per_page' => '1'
        );
      ?>
      <?php $the_query = new WP_Query($args); ?>
      <?php if ($the_query->have_posts()) : ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <?php $logo= get_field('logo'); ?>
    
            <a href="<?php echo site_url(); ?>" class="brand-logo center"><img  width="200px" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['title']; ?>" title="<?php echo $logo['title']; ?>"></a>
           <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
      <?php endif; ?> 

      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons az-menu6"></i></a>
      <!-- <ul class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul> -->
      <ul class="side-nav" id="mobile-demo">
        <li class="height-nav">
          <?php
            $args = array(
                'post_type' => 'informacion',
               'posts_per_page' => '1'
            );
          ?>
          <?php $the_query = new WP_Query($args); ?>
          <?php if ($the_query->have_posts()) : ?>
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <?php $logo= get_field('logo'); ?>
        
                <a href="<?php echo site_url(); ?>" class="brand-logo center"><img  width="200px" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['title']; ?>" title="<?php echo $logo['title']; ?>"></a>
               <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
          <?php endif; ?> 

        </li>
        <br>
        <?php $items = wp_get_nav_menu_items('primary-menu'); ?>  
        <?php $cont = 0; ?>
        <?php foreach ($items as $key => $menu_item): ?>
            <?php $cssClass = $menu_item->classes[0] ?>
            <li><a href="<?php echo $menu_item->url ?>" class="<?php echo $cssClass ?>" title="<?php echo $menu_item->title ?>" ><?php echo $menu_item->title ?></a></li>
        <?php endforeach; ?>
        <li></li>
        <li></li>
        <br>
        <br>
      </ul>
    </div>
  </div>
</nav>