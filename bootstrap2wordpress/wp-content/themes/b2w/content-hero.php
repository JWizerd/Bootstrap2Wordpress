<?php
// Custom Fields

$prelaunch_price = get_post_meta(9, 'prelaunch_price', true);
$launch_price = get_post_meta(9, 'launch_price', true);
$final_price = get_post_meta(9, 'final_price', true);
$priceButton_URL = get_post_meta(9, 'priceButton_URL', true);
$priceButton_text = get_post_meta(9, 'priceButton_text', true);
$optin_text = get_post_meta(9, 'optin_text', true);
$optin_button_text = get_post_meta(9, 'optin_button_text', true);

?>

  <!-- HERO SECTION -->
  <section id="hero" data-type="background" data-speed="5">
      <div class="container clearfix">
        <div class="row">
          <div class="col-sm-5">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-badge.png" alt="Logo Badge" class="logo">
          </div><!-- col sm 5 -->
          <div class="col-sm-7 hero-text">
            <div id="price-timeline">
              <h1><?php bloginfo('name'); ?></h1>
            <p class="lead"><?php bloginfo('description') ?></p>
              <div class="price active">
                <h4>Lorem Ipsum <small>Small lorem</small></h4>
                <span><?php echo $prelaunch_price; ?></span>
              </div><!-- price active -->
              <div class="price">
                <h4>Lorem Ipsum <small>Small lorem</small></h4>
                <span><?php echo $launch_price; ?></span>
              </div><!-- price -->
              <div class="price">
                <h4>Lorem Ipsum <small>Small lorem</small></h4>
                <span><?php echo $final_price; ?></span>
              </div><!-- price -->
              <p><a href="<?php echo $priceButton_URL; ?>" class="btn btn-lg btn-danger" role="button"><?php echo $priceButton_text; ?></a></p>
            </div><!-- price timeline -->
          </div><!-- col sm 7 hero text -->
        </div><!-- row -->
      </div><!-- container -->
    </section>

  <!-- OPT IN -->
  <section id="optin">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <p class="lead">
            <?php echo $optin_text; ?>
          </p>
        </div>
        <div class="col-sm-4">
          <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php echo $optin_button_text; ?></button>
        </div><!-- col sm 4 -->
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- optin -->