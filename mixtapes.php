 <?php
 /* Template Name: mixtapes
 */
 get_header();
 ?>
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="main_heading">
                Mixtapes
              </h2>
            </div>
			<?php foreach( get_cfc_meta( 'mixtapes' ) as $key => $value ){ ?>       
            <div class="col-md-3 col-sm-4">
              <div class="main_single_one">
                <div class="main_single_img">
                  <img src="<?php the_cfc_field( 'mixtapes','icon_img', false, $key ); ?>">
                  <div class="singleply_btn">
                    <a href="" data-lity data-lity-target="<?php the_cfc_field( 'mixtapes','zoom_img', false, $key ); ?>"><i class="fa fa-search" aria-hidden="true"></i></a>
                  </div>
                </div>
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
