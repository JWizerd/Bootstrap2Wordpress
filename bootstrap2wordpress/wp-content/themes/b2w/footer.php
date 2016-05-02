<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap2Wordpress_Framework
 */

?>

<?php wp_footer(); ?>
<!-- SIGN UP SECTION -->
  <section id="signUp">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <h2>lorem ipsum dolor sit <strong>amet</strong>?</h2>
            <p><a href="/" class="btn btn-lg btn-block btn-success">lorem ipsum</a></p>
        </div><!-- col-sm-6 col-sm-offset-3 -->
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- signUp -->

<!-- FOOTER -->
  <footer>
    <div class="container">
      <div class="col-sm-3">
        <p><a href="/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="Skeleton Boot"></a></p>
      </div><!-- col-sm-3 -->
      <div class="col-sm-6">
        <nav>
          <ul class="list-unstyled list-inline">
            <li><a href="index.html">Home</a></li>
            <li><a href="/">Blog</a></li>
            <li><a href="/">Resources</a></li>
            <li><a href="/">Contact</a></li>
            <li id="signUp-link"><a href="/">Sign up now</a></li>
          </ul>
        </nav>
      </div><!-- col-sm-6 -->
        <div class="col-sm-3">
          <p class="pull-right">&copy;Copyright 2016</p>
        </div><!-- col-sm-3 -->
    </div><!-- container -->
  </footer>

  <!-- MODAL -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" type="button" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe button for Mailing List</h4>
        </div><!-- modal header -->
        <div class="modal-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <em>Lorem ipsum</em></p>
            <form role="form" class="form-inline">
              <div class="form-group">
                <label for="subscribe-name" class="sr-only">Your First Name</label>
                <input type="text" class="form-control" id="subscribe-name" placeholder="Your First Name">
              </div><!-- form group -->
              <div class="form-group">
                <label for="subscribe-email" class="sr-only">Enter Your Email</label>
                <input type="text" class="form-control" id="subscribe-email" placeholder="Enter Email Here">
              </div><!-- form group -->
              <input type="submit" class="btn btn-danger" value="Subscribe!">
              <hr>
              <p><small>small disclaimer: Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small></p>
            </form>
        </div><!-- modal body -->
      </div><!-- modal content -->
    </div><!-- modal dialog-->
  </div><!-- modal fade -->


<!-- JAVASCRIPT HERE: PLACE BELOW HERE FOR FASTER PAGE LOAD SPEED -->
  <script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/js/jquery-1.12.1.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/js/bootstrap.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/assets/js/main.js"></script>
</body>
</html>
