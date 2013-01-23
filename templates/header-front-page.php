<?php
$header_background_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'front-page-huge');
?>
<header id="banner" class="navbar" role="banner" style="background-image: url(<?php echo $header_background_image_url[0]; ?>)">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="<?php echo home_url(); ?>/">
        <?php bloginfo('name'); ?>
      </a>
      <nav id="nav-main" class="nav-collapse" role="navigation">
        <ul class="nav">
          <li><a href="<?php echo home_url(); ?>/#news">News</a></li>
        </ul>
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
          endif;
        ?>
      </nav>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="span12 content">
        <h1><?php echo get_the_title(); ?></h1>
        <div class="row">
            <div class="span6">
              <?php get_template_part('templates/content', 'page'); ?>
            </div>
        </div>
      </div>
    </div>
  </div>
</header>
