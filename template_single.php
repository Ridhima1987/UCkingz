 <?php
 /* Template Name: single
 */
 get_header();
 ?>
   <section>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="main_heading">
                all singles
              </h2>
            </div>
	    <?php foreach( get_cfc_meta( 'single' ) as $key => $value ){ ?>     
            <div class="col-md-3 col-sm-4">
              <div class="audio-player js-audio-player">

                <button class="audio-player__control js-control">
                  <div class="audio-player__control-icon"></div>
                </button>
                <h4 class="audio-player__title"><?php the_cfc_field( 'single','title', false, $key ); ?><p class="song_name"><?php the_cfc_field( 'single','subtitles', false, $key ); ?></p></h4>

                <audio preload="auto">
                  <source src="<?php the_cfc_field( 'single','audio_uploads', false, $key ); ?>"/>
                </audio><img class="audio-player__cover" src="<?php the_cfc_field( 'single','img', false, $key ); ?>"/>
                <div class="av_sign">
                  <i class="fa fa-microphone" aria-hidden="true"></i>
                </div>
                <video preload="auto" loop="loop">
                
                </video>
              </div>
            </div>
         <?php }  ?> 
      
            <div class="col-md-12">
              <div class="pagination">
                <span class="prevpage"><?php previous_post_link('%link', 'Prev Page . . .'); ?></span>
                <span class="nextpage"><?php next_post_link('%link', 'Next Page . . .'); ?></span>
              </div>
            </div>
	   
          </div>
        </div>
      </section>
	  <?php get_footer();?>