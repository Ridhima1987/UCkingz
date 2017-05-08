 <?php
 /* Template Name: uckingz
 */
 get_header();
 ?>
   <section>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="main_heading">
                U.C. Kingz Collection
              </h2>
            </div>
	    <?php foreach( get_cfc_meta( 'uckingz' ) as $key => $value ){ ?>
<?php 

$type=get_cfc_field( 'uckingz','types', false, $key ); 

if ( $type == 'Audio' ){


?>
            <div class="col-md-3 col-sm-4">
              <div class="audio-player js-audio-player">

                <button class="audio-player__control js-control">
                  <div class="audio-player__control-icon"></div>
                </button>
                <h4 class="audio-player__title"><?php the_cfc_field( 'uckingz','main_title', false, $key ); ?><p class="song_name"><?php the_cfc_field( 'uckingz','subtitel', false, $key ); ?></p></h4>

                <audio preload="auto">
                  <source src="<?php the_cfc_field( 'uckingz','audio_uckingz', false, $key ); ?>"/>
                </audio><img class="audio-player__cover" src="<?php the_cfc_field( 'uckingz','upload_image', false, $key ); ?>"/>
                <div class="av_sign">
                  <i class="fa fa-microphone" aria-hidden="true"></i>
                </div>
                <video preload="auto" loop="loop">
                 <!-- <source src="<?php //the_cfc_field( 'uckingz','video_uckingz', false, $key ); ?>"/>-->
                </video>
              </div>
            </div>
		<?php }}
		foreach( get_cfc_meta( 'uckingz' ) as $key => $value ){
			$type=get_cfc_field( 'uckingz','types', false, $key ); 
if ( $type == 'Video' ){
	
	?>
	
	
	
	   <div class="col-md-3 col-sm-4">
            <a href="<?php the_cfc_field( 'uckingz','video_uckingz', false, $key ); ?>" data-lity>
              <div class="audio-player js-audio-player">

                <button class="audio-player__control js-control">
                  <div class="audio-player__control-icon"></div>
                </button>
                <h4 class="audio-player__title"><?php the_cfc_field( 'uckingz','main_title', false, $key ); ?><p class="song_name">what's my name</p></h4>
                
                <!-- <audio preload="auto">
                  <source src="http://pd.npr.org/anon.npr-mp3/npr/codeswitch/2016/08/20160803_codeswitch_11b.mp3"/>
                </audio> --><img class="audio-player__cover" src="<?php the_cfc_field( 'uckingz','upload_image', false, $key ); ?>"/>
                <div class="av_sign">
                  <i class="fa fa-video-camera" aria-hidden="true"></i>
                </div>
                <video preload="auto" loop="loop">
                  <!--<source src="https://dl.dropboxusercontent.com/u/5185018/audio-waves.mp4" type="video/mp4"/>-->
                </video>
              </div>
              </a>
            </div>
	
		<?php }}

  ?> 
      
          <!--  <div class="col-md-12">
              <div class="pagination">
                <span class="prevpage"><?php //previous_post_link('%link', 'Prev Page . . .'); ?></span>
                <span class="nextpage"><?php //next_post_link('%link', 'Next Page . . .'); ?></span>
              </div>
            </div>-->
	   
          </div>
        </div>
      </section>
	  <?php get_footer();?>