<?php
 /*Template Name:video
 */
get_header();
?>  
 <section>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="main_heading">
                all videos
              </h2>
            </div>
			
			<?php foreach( get_cfc_meta( 'videos' ) as $key => $value ){ ?>   
            <div class="col-md-6">
              <div class="main_video_one">
                <div class="main_video_img">
                  <img src="<?php the_cfc_field( 'videos','video_img', false, $key ); ?>">
                </div>
                <div class="main_video_text">
                  <h3><?php the_cfc_field( 'videos','video_title', false, $key ); ?></h3>
                  <p class="song_name"><?php the_cfc_field( 'videos','subtitle', false, $key ); ?></p>
                  <p class="song_duration">Time : <?php the_cfc_field( 'videos','video_time', false, $key ); ?> min</p>
                  <h5><?php the_cfc_field( 'videos','video_descriptions', false, $key ); ?></h5>
                  <a href="<?php the_cfc_field( 'videos','video_links', false, $key ); ?>" class="videoply_btn" data-lity>play<i class="fa fa-play" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          <?php } ?>
            <div class="col-md-12">
              <div class="pagination">
                <span class="prevpage"><?php previous_post_link('%link', 'Prev Page . . .'); ?></span> 
                <span class="nextpage"><?php next_post_link('%link', 'Next Page . . .'); ?>
				
              </div>
            </div>
			
          </div>
        </div>
      </section>
     
        
          
	  <?php get_footer();?>