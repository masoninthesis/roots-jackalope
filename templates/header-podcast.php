<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="http://foreverjobless.com/wp-content/uploads/2014/03/foreverjobless.png" alt="<?php bloginfo('name'); ?>" /></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>

<div class="wrap container">
  <div class="row">
    <center>
    <div style="width: 80%;">
      <iframe onClick="ga('send', 'event', 'video', 'play', 'main video');" src="//fast.wistia.net/embed/iframe/4j775txdig?videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="668" height="376"></iframe>
      <script src="//fast.wistia.net/assets/external/iframe-api-v1.js"></script>
    </div>
    </center>
    <div class="col-sm-12">
      <center>
      <h3>Want to create businesses that print money and operate passively?</h3>
      <p>Listen to my Podcast and I'll show you how:</p>
      </center>
    </div>
  </div>
</div>
<div class="wrap container">
  <div class="row">
    <div class="col-sm-9 col-center">
      <center><button class="btn btn-lg btn-primary" href="#">Listen on iTunes</button></center>
    </div>
  </div>
</div>
<br />
<hr>
