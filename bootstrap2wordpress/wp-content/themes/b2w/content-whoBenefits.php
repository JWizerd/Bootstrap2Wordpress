<?php 
// Custom Fields

$who_should_featured_image = get_field('who_should_featured_image');
$who_should_section_title = get_field('who_should_section_title');
$who_should_sub_section_title = get_field('who_should_sub_section_title');
$who_should_section_description = get_field('who_should_section_description');

?>

<section id="who-benefits">
    <div class="container">
      <div class="section-header">
        <!-- if user did not upload an image -->
        <?php if(!empty($who_should_featured_image)){ ?>
          <img src="<?php echo $who_should_featured_image["url"]; ?>" alt="<?php echo $who_should_featured_image["alt"]; ?>">
        <?php } ?>
        <h2><?php echo $who_should_section_title; ?></h2>
      </div><!-- section header -->
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <h3><?php echo $who_should_sub_section_title; ?></h3>
            <p><?php echo $who_should_section_description; ?></p>
          </div><!-- col sm 6 -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- who benefits -->