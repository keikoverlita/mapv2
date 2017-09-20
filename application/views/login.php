<!DOCTYPE html>
  <html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $this->apps->title; ?></title>
    
    <link rel="shortcut icon" href="<?=base_url().'assets/sidebar/images/logoTelkom_icon.png'; ?>" />
    
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?=base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="<?=base_url();?>assets/plugins/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?=base_url();?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    
    <link href="<?=base_url();?>assets/dist/css/login.css" rel="stylesheet" type="text/css" />

    <link href="<?=base_url();?>assets/dist/css/style.css" rel="stylesheet" type="text/css" />
    
  </head>
  
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="<?=base_url();?>"><b>MAP</b><img class="mainimage" src="<?php echo base_url().'assets/sidebar/images/logoTelkom_sm.png'; ?>" width="100" /><br>ODP & DP<br>Witel Denpasar</a>
      </div><!-- /.login-logo -->
      
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <?php 
            echo form_open(uri_string());
            if (isset($error)){
                echo "<div class='error'><center>$error</center></div>";
            }
        ?>
           
          <div class="form-group has-feedback">
              <label>Username : </label>
              <input type="text" name="username" class="form-control" placeholder="Username" autofocus=""/>
              <td class="error"><?php echo form_error('username'); ?></td>

            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
              <label>Password : </label>
              <input type="password" name="password" class="form-control" placeholder="Password"/>
              <td class="error"><?php echo form_error('password'); ?></td>
              <br>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          <div class="row">
              <div class="col-xs-12">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
              </div><!-- /.col -->
          </div>
        <?php echo form_close();?>
        <div class="social-auth-links text-center">
          <p><?php echo $this->apps->copyright;?>
            <br>
            <?php echo $this->apps->ver;?>
          </p>
        </div>
      </div><!-- /.login-box-body -->        
    </div><!-- /.login-box -->
  </body>
  
</html>

