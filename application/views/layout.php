<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>BandHunter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap-responsive.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/main.css'); ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li><a data-toggle="modal" data-target="#signup-modal" href="javascript:;">Sign in</a></li>
        </ul>
        <h3 class="muted"><img src="<?php echo base_url('assets/images/logo.png') ?>" alt=""></h3>
      </div>

      <div class="content">
        <?php echo $this->view($tpl_view, $tpl_data); ?>
      </div>

      <div class="modal hide fade" id="signup-modal">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>Sign up</h3>
        </div>
        <div class="modal-body">
            <div class="row-fluid login-popup">
              <div class="span6">
                <img src="<?php echo base_url('assets/images/login-usuarios.png') ?>" alt=""> 
              </div>

              <div class="span6">
                <a href="<?php echo site_url('/auth/login/google'); ?>">
                  <img src="<?php echo base_url('assets/images/login-bandas.png') ?>" alt="">
                </a>
              </div>
            </div>
        </div>
      </div>


    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>

  </body>
</html>
