<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar') && is_category(podcast) ) {
      get_template_part('templates/header-podcast');
    } else if (current_theme_supports('bootstrap-top-navbar') && !is_page(podcast) ) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>

  <div class="supreme-container">

  <div class="wrap container" role="document">
    <div class="content row">
      <main class="main <?php echo roots_main_class(); ?>" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

    </div> <!-- SUPREME -->

<script language="JavaScript">
  <!--
    function _submit_form(frm){
      var email = frm.email.value;
      var valid_email = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
      
      if( valid_email.test( email ) ){
        document.getElementById('before').style.display = 'none';
        document.getElementById('after').style.display = 'block';
        return true;
      } else {
        alert("Invalid email address");
      }
      return false;
    }
//-->
</script>

<script type="text/javascript"
        src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.3.1/jquery.cookie.min.js"></script>
  <script type="text/javascript">
    function showPopup() {
      $('#myModal').modal('show');
    }

    function timeOut() {
      if ($.cookie('foreverjobless') !== '1') {
        setTimeout(function() {
          showPopup();
          jQuery.cookie('foreverjobless', '1', { expires: 7 });
        }, 120000);
      }
    }

    $(document).ready(function () {
      timeOut();
      stickyElement();
    });

  </script>

   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <button type="button" class="close" style="margin-right: 10px;margin-top: 5px;" data-dismiss="modal" aria-hidden="true">&times;</button>
          <br /><br />
          <center>
          <!-- <h3 class="modal-title" id="myModalLabel" style="margin-top: 15px;margin-bottom:0;">Redeem your blank check:</h3> -->
          </center>
          <div class="modal-body">

            <form method="post" class="af-form-wrapper" action="http://www.aweber.com/scripts/addlead.pl"  >
            <div style="display: none;">
            <input type="hidden" name="meta_web_form_id" value="1819965538" />
            <input type="hidden" name="meta_split_id" value="" />
            <input type="hidden" name="listname" value="foreverjobless" />
            <input type="hidden" name="redirect" value="http://www.aweber.com/thankyou.htm?m=default" id="redirect_29afee66116af3d07d67125c0894fc70" />

            <input type="hidden" name="meta_adtracking" value="FJ:_Pop-up" />
            <input type="hidden" name="meta_message" value="1" />
            <input type="hidden" name="meta_required" value="email" />

            <input type="hidden" name="meta_tooltip" value="" />
            </div>
            <div id="af-form-1819965538" class="af-form"><div id="af-body-1819965538"  class="af-body af-standards">
            <div class="af-element">
            <div class="af-textWrap">
              <div class="check">
              <div class="inline">
                  <i class="icon-arrow-right"></i><input class="text email" id="awf_field-60198821" type="text" name="email" value="" tabindex="500" placeholder="Your email..."  />
                  <input class="amount" type="text" name="amount" value="$" />
              </div>
            </div><div class="af-clear"></div>
            </div>
            <div class="af-element buttonContainer">
              <center>
            <button name="submit" class="submit btn btn-primary btn-lg" type="submit" value="Submit" tabindex="501">Cash My Check</button>
              </center>
            <div class="af-clear"></div>
            </div>
            </div>
            </div>
            </div>
            <div style="display: none;"><img src="http://forms.aweber.com/form/displays.htm?id=jByMnJxsrKzMHA==" alt="" /></div>
            </form>




            <!-- <form>
              <div class="check">
                <div class="inline">
                  <i class="icon-arrow-right"></i><input class="email" type="text" name="email" placeholder="Your email" />
                  <input class="amount" type="text" name="amount" value="$" />
                </div>
              </div>
              <center>
              <button class="btn btn-primary btn-lg" href="#">Cash My Check</button>
              </center>
            </form> -->
          </div>
        </div>
      </div>
    </div>

</body>
</html>
