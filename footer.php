<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->
  <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="contact_info">
              
                    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar-1')) : else : ?>
					<?php endif; ?>

              
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="join_us">
                
                    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('serviceone')) : else : ?>
					<?php endif; ?>
              
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="touch">
                <h3>Get In Touch</h3>
              <?php echo do_shortcode('[contact-form-7 id="578" title="myform"]');?>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>


    <script src="<?php bloginfo('template_url');?>/js/vendor/all.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/vendor/lity.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/vendor/wave.js"></script>
    <script>
      var audio = document.getElementById("audio-player");

      $(document).ready(function() {
        $("#play-button").click(function() {
          if ($(this).hasClass("unchecked")) {
            $(this)
              .addClass("play-active")
              .removeClass("play-inactive")
              .removeClass("unchecked");
            $(".info-two")
              .addClass("info-active");
            $("#pause-button")
              .addClass("scale-animation-active");
            $(".waves-animation-one, #pause-button, .seek-field, .volume-icon, .volume-field, .info-two").show();
            $(".waves-animation-two").hide();
            $("#pause-button")
              .children('.icon')
              .addClass("icon-pause")
              .removeClass("icon-play");
            setTimeout(function() {
              $(".info-one").hide();
            }, 400);
            audio.play();
            audio.currentTime = 0;
          } else {
            $(this)
              .removeClass("play-active")
              .addClass("play-inactive")
              .addClass("unchecked");
            $("#pause-button")
              .children(".icon")
              .addClass("icon-pause")
              .removeClass("icon-play");
            $(".info-two")
              .removeClass("info-active");
            $(".waves-animation-one, #pause-button, .seek-field, .volume-icon, .volume-field, .info-two").hide();
            $(".waves-animation-two").show();
            setTimeout(function() {
              $(".info-one").show();
            }, 150);
            audio.pause();
            audio.currentTime = 0;
          }
        });
        $("#pause-button").click(function() {
          $(this).children(".icon")
            .toggleClass("icon-pause")
            .toggleClass("icon-play");

          if (audio.paused) {
            audio.play();
          } else {
            audio.pause();
          }
        });
        $("#play-button").click(function() {
          setTimeout(function() {
            $("#play-button").children(".icon")
              .toggleClass("icon-play")
              .toggleClass("icon-cancel");
          }, 350);
        });
        $(".like").click(function() {
          $(".icon-heart").toggleClass("like-active");
        });
      });

      function CreateSeekBar() {
        var seekbar = document.getElementById("audioSeekBar");
        seekbar.min = 0;
        seekbar.max = audio.duration;
        seekbar.value = 0;
      }

      function EndofAudio() {
        document.getElementById("audioSeekBar").value = 0;
      }

      function audioSeekBar() {
        var seekbar = document.getElementById("audioSeekBar");
        audio.currentTime = seekbar.value;
      }

      function SeekBar() {
        var seekbar = document.getElementById("audioSeekBar");
        seekbar.value = audio.currentTime;
      }

      audio.addEventListener("timeupdate", function() {
        var duration = document.getElementById("duration");
        var s = parseInt(audio.currentTime % 60);
        var m = parseInt((audio.currentTime / 60) % 60);
        duration.innerHTML = m + ':' + s;
      }, false);

      Waves.init();
      Waves.attach("#play-button", ["waves-button", "waves-float"]);
      Waves.attach("#pause-button", ["waves-button", "waves-float"]);
    </script>
 <script type="text/javascript">
        var $player = $('.js-audio-player')
          , $playbackClass = 'is-playing'
          , $fadeDuration = 500

        $player.each(function(index) {
          var $this = $(this)
            , id = 'audio-player-' + index

          $this.attr('id', id)

          $this.find('.js-control')[0].addEventListener('click', function() {
            resetPlayback(id)
            playback($this, $this.find('audio'), $this.find('video'))
          })
          
          // Reset state once audio has finished playing
          $this.find('audio')[0].addEventListener('ended', function() {
            resetPlayback()
          })
        })

        function playback($player, $audio, $video) {
          if ($audio[0].paused) {
            $audio[0].play()
            $video[0].play()
            $audio.animate({ volume: 1 }, $fadeDuration)
            $player.addClass($playbackClass)
          } else {
            $audio.animate({ volume: 0 }, $fadeDuration, function() {
              $audio[0].pause()
              $video[0].pause()
            })
            $player.removeClass($playbackClass)
          }
        }

        function resetPlayback(id) {
          $player.each(function() {
            var $this = $(this)

            if ($this.attr('id') !== id) {
              $this.find('audio').animate({ volume: 0 }, $fadeDuration, function() {
                $(this)[0].pause()
                $this.find('video')[0].pause()
              })
              $this.removeClass($playbackClass)
            }
          })
        }
      </script>
<?php wp_footer(); ?>

</body>
</html>
