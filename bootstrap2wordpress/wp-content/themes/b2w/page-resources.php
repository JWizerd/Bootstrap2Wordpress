<?php
/**
 * Template Name:  Resources
 */
 
$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
get_header(); ?>

<?php if(has_post_thumbnail()) { ?>
	<!-- FEATURE IMAGE -->
  <section class="feature-image" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat;" data-type="background" data-speed="2">
    <h1 class="page-title"><?php the_title(); ?></h1>
  </section><!-- feature image -->
 <?php } else { ?>
 	<!-- FEATURE IMAGE -->
  <section class="feature-image feature-image-default" data-type="background" data-speed="2">
    <h1 class="page-title"><?php the_title(); ?></h1>
  </section><!-- feature image -->
 <?php } ?>
<!-- RESOURCES -->
    <div class="container">
      <div class="row" id="primary">
        <div class="col-sm-12">
          <section class="main-content">
            <?php while (have_posts() ) : the_post(); ?>
            
            	<?php the_content(); ?>
            	
            <?php endwhile; ?>
            <hr>
            <div class="resource-row clearfix">
	            <?php $loop = new WP_Query(array('post_type' => 'resources', 'orderby' => 'post_id', 'order' => 'ASC' ));?>
          <?php while($loop->have_posts() ) : $loop->the_post();?>
          
          		<?php 
	          		 // Custom Fields
$resource_image = get_field('resource_image');
$resource_url = get_field('resource_url');
$button_text = get_field('button_text');
							?>
          		
              <div class="resource">
                <img src="<?php echo $resource_image[url]; ?>">
                <h3><a href="<?php echo $resource_url; ?>"><?php the_title(); ?></a></h3>
                <?php the_content(); ?>
                <?php if(!empty($button_text)) { ?>
                <a href="<?php echo $resource_url; ?>" class="btn btn-success"><?php echo $button_text; ?></a>
                <?php } ?>
              </div><!-- resource -->
              <?php endwhile; ?>
            </div><!-- resource-row -->
          </section><!-- main content -->
        </div><!-- col-sm-12 -->
      </div><!-- row -->
    </div><!-- container -->

<?php get_footer(); ?>