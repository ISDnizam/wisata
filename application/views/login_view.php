<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- meta section -->
        <title>Login | Sistem Informasi Wisata</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" >
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" >
        <!-- css styles -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/default-blue-white.css" id="dev-css">
        <!-- ./css styles -->                                   
              
        <!-- javascripts -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/modernizr.js"></script>
		  <link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">

        <!-- ./javascripts -->
        
        <style>.dev-page{visibility: hidden;}</style>
    </head>
    <body>
       <!-- page wrapper -->
        <div class="dev-page dev-page-login dev-page-login-v2">
                      <BR>
                <BR><BR>
                <BR>
            <div class="dev-page-login-block"> <div class="title">
             <h1>  <center> <a class="dev-page-login-block_logo"><strong>Sistem Informasi Wisata</a></h1></div>
                <div class="dev-page-login-block__form">
               <br>
                <?php echo $this->session->flashdata('message'); ?>
                     <?php echo form_open('pages/verify_login'); ?>                     
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                  <input type="text" size="20" id="username" class="form-control" name="username" placeholder="username">
                            </div>
                        </div>                        
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                             <input type="password" size="20" class="form-control" id="passowrd" name="password" placeholder="password"/>
                            </div>
                        </div>
                        <div class="form-group no-border margin-top-20">
                            <button class="btn btn-success btn-block">Login</button>
                        </div>
                    <?php echo form_close();?>
                </div>  <div class="dev-page-login-block__footer">
                    © 2018 <strong></strong>. All rights reserved.
                </div>
            </div>
            
        </div>
        <!-- ./page wrapper -->  
          
        
        <!-- javascript -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>       
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/raphael-min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/dev-clock.js"></script>        
        <!-- ./javascript -->
</body>
</html>