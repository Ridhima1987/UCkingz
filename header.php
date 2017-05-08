<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
  <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>U.C. Kingz</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_url');?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/slick/slick.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/slick/slick.css"/>
        <script src="https://use.fontawesome.com/adcbef638d.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/slick/slick-theme.css"/>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/audio.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/node-waves/0.7.5/waves.min.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/lity.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css">
		
        <script type="text/javascript">
        $(document).ready(function(){
          $('.responsive').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 6,
	    arrows: true,
            slidesToScroll: 1,
            responsive: [
              {
                breakpoint: 1200,
                settings: {
                  slidesToShow: 5,
                  slidesToScroll: 1,
                  infinite: true,
                  dots: false
                }
              },
              {
                breakpoint: 992,
                settings: {
                  slidesToShow: 4,
                  slidesToScroll: 1
                }
              },
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1
                }
              },
              {
                breakpoint: 460,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1
                }
              }
              // You can unslick at a given breakpoint now by adding:
              // settings: "unslick"
              // instead of a settings object
            ]
          });
          $('.single-item').slick({
            dots: false,
             infinite: false,
           });
        });
        </script>
        <script>
        $(document).ready(function(){
        $(".menu").click(function() {
        $(".down").toggleClass('downstart');
        $(".fade").toggleClass("fadestart");
        $(".up").toggleClass("upstart");
        });
        $(".menu").click(function() {
        $("#m_nav").slideToggle('slow');
        
        });
        });
        </script>
		 <body>
    <div class="main">
      <header>
        <div class="container">
          <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-2">
              <div class="logo">
           
		 <h1><a href="<?php echo get_permalink();?>"><img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" /></a></h1>
              </div>
            </div>
            <div class="col-md-10 col-sm-10 col-xs-10" style="position: static;">
              <div class="main_nav">
 <?php $defaults = array(
    'theme_location'  => '',
    'menu'            => 'Project Nav',
    'container'       => 'ul',
    'container_class' => 'topmenu-{topmenu slug}-container',
    'container_id'    => 'topmenu',
    'menu_class'      => 'topmenu',
    'menu_id'         => 'topmenu-{topmenu slug}[-{increment}]',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth'           => 0,
    'walker'          => ''
); ?>
<?php wp_nav_menu( $defaults );
?>
              </div>
              <div class="top_nav_elements">
                <div class="menu">
                  <div id="bar" class="down"></div>
                  <div id="bar" class="fade"></div>
                  <div id="bar" class="up"></div>
                </div>
            
				 <?php $defaults = array(
    'theme_location'  => '',
    'menu'            => 'Project Nav',
    'container'       => 'ul',
    'container_class' => 'topmenu-{topmenu slug}-container',
    'container_id'    => 'm_nav',
    'menu_class'      => 'topmenu',
    'menu_id'         => 'topmenu-{topmenu slug}[-{increment}]',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth'           => 0,
    'walker'          => ''
); ?>
<?php wp_nav_menu( $defaults );
?>
              </div>
            </div>
          </div>
        </div>
      </header>
		<?php wp_head();?>
    </head>

