<?php
// Custom Fields

$course_features_featured_image = get_field('course_features_featured_image');
$course_features_title = get_field('course_features_title');
$course_feature_icon = get_field('course_feature_icon');

?>

  <section id="course-features">
    <div class="container">
      <div class="section-header">
      <?php if(!empty($course_features_featured_image)){ ?>
          <img src="<?php echo $course_features_featured_image["url"]; ?>" alt="<?php echo $course_features_featured_image["alt"]; ?>">
        <?php } ?>
        <h2><?php echo $course_features_title; ?></h2>
      </div><!-- section header -->
        <div class="row">
          
          <?php $loop = new WP_Query(array('post_type' => 'course_feature', 'orderby' => 'post_id', 'order' => 'ASC' ));?>
          <?php while($loop->have_posts() ) : $loop->the_post();?>
            <div class="col-sm-2">
             <i class="<?php the_field('course_feature_icon'); ?>"></i>
              <h4><?php the_title(); ?></h4>
            </div><!-- col sm 2 -->
          <?php endwhile; wp_reset_query(); ?>
        </div><!-- row -->
      </div><!-- section header -->
    </div><!-- container -->
  </section><!-- course features -->