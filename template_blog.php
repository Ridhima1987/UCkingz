<?php
/* Template Name: blog
*/
get_header();
?> 
 <section>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="main_heading">
                All Blogs
              </h2>
              <a class="view_btn" href="<?php echo get_permalink();?>">view all</a>
            </div>
			 <?php
                    // set the "paged" parameter (use 'page' if the query is on a static front page)
                    //$page = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;
           
                    //$paged = (get_query_var('page')) ? get_query_var('page') : 1;
                    $query = new WP_Query( array( 'paged' => $paged ) );

                    // the query
                    $the_query = new WP_Query('post_type=blog&order=desc&showposts=9');
                     
                    ?>

                    <?php if ( $the_query->have_posts() ) : ?>

                    <?php
                    // the loop
                    while ( $the_query->have_posts() ) : $the_query->the_post();
					$pic = wp_get_attachment_image_src(get_post_thumbnail_id(),'featured-home-thumb');
                    ?>
            <div class="blog_wrapper">
              <div class="col-md-4 col-sm-4">
                <div class="blog_img">
                  <img src="<?php echo $pic[0]; ?>">
                </div>
              </div>
              <div class="col-md-8 col-sm-8">
                <div class="blog_text">
                  <a href="<?php echo the_permalink();?>"><h3><?php the_title();?></h3></a>
                  <small class="text-right">
            <?php echo get_the_time(); ?> , <?php the_time(get_option('date_format'));  ?>
                  </small>
                  <p><?php the_content();?></p>
                </div>
              </div>
            </div>
<?php endwhile; ?>
                 
      
            <div class="col-md-12">
              <div class="pagination">
                <span class="prevpage"><?php next_posts_link( 'Older Entries', $the_query->max_num_pages ); ?></span>
                <span class="nextpage"><?php previous_posts_link( 'Newer Entries' ); ?></span>
              </div>
            </div>
			<?php
                    // clean up after our query
                    wp_reset_postdata();
                    ?>

                    <?php else:  ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>  
          </div>
        </div>
		
				
      </section>
	  <?php get_footer();?>