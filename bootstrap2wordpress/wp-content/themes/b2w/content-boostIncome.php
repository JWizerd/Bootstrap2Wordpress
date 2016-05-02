<?php
// Custom Fields

$income_featured_image = get_field('income_featured_image');
$income_section_title = get_field('income_section_title');
$income_section_description = get_field('income_section_description');
$reason_1_title = get_field('reason_1_title');
$reason_1_description = get_field('reason_1_description');
$reason_2_title = get_field('reason_2_title');
$reason_2_description = get_field('reason_2_description');

?>


  <section id="boost-income">
    <div class="container">
      <div class="section-header">
        <!-- if user did not upload an image -->
        <?php if(!empty($income_featured_image)){ ?>
          <img src="<?php echo $income_featured_image["url"]; ?>" alt="<?php echo $income_featured_image["alt"]; ?>">
        <?php } ?>
        <h2><?php echo $income_section_title; ?></h2>
        <p class="lead"><?php echo $income_section_description; ?></p>
      </div><!-- section header -->
        <div class="row">
          <div class="col-sm-6">
            <h3><?php echo $reason_1_title; ?></h3>
            <p><?php echo $reason_1_description; ?></p>
          </div><!-- col sm 6 -->
          <div class="col-sm-6">
            <h3><?php echo $reason_2_title; ?></h3>
            <p><?php echo $reason_2_description; ?></p>
          </div><!-- col sm 6 -->
        </div><!-- row -->
    </div><!-- container -->
  </section><!-- boost income -->