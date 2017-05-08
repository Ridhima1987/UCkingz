 <?php
 /*Template Name:home
 */
 get_header();
 ?>
  <section>
        <div class="container">
          <div class="main_slider">
		  
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="responsive" id="main_slider">
				 <?php foreach( get_cfc_meta( 'home_slider' ) as $key => $value ){ ?>  
                  <div>
				  
                    <div class="slider_one">
                      <div class="slider_img">
                          <img src="<?php the_cfc_field( 'home_slider','slider_img', false, $key ); ?>">
                        <div class="slider_info">
                          <h3><?php the_cfc_field( 'home_slider','slider_title', false, $key ); ?></h3>
                        </div>
                      </div>
                    </div>
				
                  </div>
          <?php }  ?>  
           
                </div>
              </div>
            </div>
				  
          </div>
        </div>
      </section>

      <section>
        <div class="container">
          <div class="row">
		  	    <?php
        $the_query = new WP_Query( 'page_id=470' );
	 while ( $the_query->have_posts() ) : $the_query->the_post();  
	 	 $pic = wp_get_attachment_image_src(get_post_thumbnail_id(),'featured-home-thumb');


		
        ?>
		  
            <div class="col-md-12">
              <h2 class="main_heading">
                about us
              </h2>
            </div>
            <div class="col-md-6">
              <div class="about_text">
		
                <p><?php the_excerpt();?></p>
			
				
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
	 <section>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="main_heading">
                Latest Videos
              </h2>
              <a class="view_btn" href="http://www.uckingz.com/video/">view all</a>
            </div>
            <div class="video_slider">
              <div class="col-md-12">
                <div class="single-item" id="video_slider">
				<?php foreach( get_cfc_meta( 'latest_video' ) as $key => $value ){ ?>     
                  <div>
                    <div class="slider_video_one">
                      <div class="video_info">
                        <h3><?php the_cfc_field( 'latest_video','video_heading', false, $key ); ?></h3>
                        <small class="text-right">
                         Duration : <?php the_cfc_field( 'latest_video','video_duration', false, $key ); ?>
                        </small>
                        <p><?php the_cfc_field( 'latest_video','video_description', false, $key ); ?></p>
                      </div>
                      <div class="slider_video">
                        <img class="img-responsive" src="<?php the_cfc_field( 'latest_video','video_image', false, $key ); ?>">
                        <div class="slider_ply">
                          <a href="<?php the_cfc_field( 'latest_video','video_link', false, $key ); ?>" data-lity><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php }  ?>   
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="main_heading">
                Latest Singles
              </h2>
              <a class="view_btn" href="<?php echo get_permalink();?>">view all</a>
            </div>
		<ul class="audio-players">
		<?php foreach( get_cfc_meta( 'audio_player' ) as $key => $value ){ ?>   
      <li>
        <div class="audio-player js-audio-player">
          <button class="audio-player__control js-control">
            <div class="audio-player__control-icon"></div>
          </button>
          <h4 class="audio-player__title"><?php the_cfc_field( 'audio_player','audio-heading', false, $key ); ?></h4>
          <audio preload="auto">
            <source src="<?php the_cfc_field( 'audio_player','audio_path', false, $key ); ?>"/>
          </audio><img class="audio-player__cover" src="<?php the_cfc_field( 'audio_player','audio_image', false, $key ); ?>"/>
          <video preload="auto" loop="loop">
            <source src="https://dl.dropboxusercontent.com/u/5185018/audio-waves.mp4" type="video/mp4"/>
          </video>
        </div>
      </li>
   
<?php  } ?>
    </ul>
      </section>
      
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="main_heading">
                Latest Blogs
              </h2>
              <a class="view_btn" href="http://www.uckingz.com/blog/">view all</a>
            </div>
			<?php
			 $args = array(
                     'post_type' => 'blog',
                      'posts_per_page' => 2
                           );
						   
                       $the_query = new WP_Query($args);
                         if ($the_query->have_posts()) {
                          while ($the_query->have_posts()) {
                           $the_query->the_post();
						   $picc = wp_get_attachment_image_src(get_post_thumbnail_id(),'featured-home-thumb');
						   ?>
            <div class="blog_wrapper">
              <div class="col-md-4 col-sm-4">
                <div class="blog_img">
                 <img src="<?php echo $picc[0]; ?>">
                </div>
              </div>
              <div class="col-md-8 col-sm-8">
                <div class="blog_text">
              <a href="<?php echo get_permalink();?>"> <h3><?php the_title();?></h3></a>
                  <small class="text-right">
                 <?php echo get_the_time(); ?> , <?php the_time(get_option('date_format'));  ?>
                  </small>
                  <p><?php the_content();?></p>
                </div>
              </div>
            </div>
          <?php
                             }
									
                        }
                     wp_reset_postdata();
                    ?>	
            
          </div>
        </div>
      </section>

      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="main_heading">
               <?php the_cfc_field( 'home_working','heading'); ?>
              </h2>
            </div>
            <div class="col-md-4">
              <div class="working_text">
                <p><?php the_cfc_field( 'home_working','description' ); ?></p>
              </div>
            </div>
            <div class="col-md-8">
              <div class="woking_logo">
                <div class="row">
				<?php foreach( get_cfc_meta('home_working_logo') as $key => $value ){ ?>     
                  <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="logo1">
               <img src="<?php the_cfc_field('home_working_logo','working_logo', false, $key); ?>">
                    </div>
                  </div>
               
              <?php }  ?>   
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
	  <?php get_footer();?>