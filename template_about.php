 <?php
 /* Template Name: about
 */
 get_header();
 ?>
 <section>
        <div class="container">
          <div class="row">
	      <?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); 
    $pic = wp_get_attachment_image_src(get_post_thumbnail_id(),'featured-home-thumb');
    ?>
            <div class="col-md-12">
              <h2 class="main_heading">
<?php the_title();?>
              </h2>
            </div>
            <div class="col-md-6">
              <div class="about_text">
                <?php the_content();?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="about_img">
                <img class="img-responsive" src="<?php echo $pic[0]; ?>">
              </div>
            </div>
	      <?php
    endwhile;
    wp_reset_query();
    ?>

          </div>
        </div>
      </section>
      <?php get_footer ?>