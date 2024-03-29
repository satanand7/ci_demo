<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url('assets/')?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('assets/')?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url('assets/')?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('assets/')?>dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url('assets/')?>plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>CI</b>DEMO</a>
  </div>


  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>
    <?=form_open("auth/register")?>
     <div class="form-group has-feedback">
        <?=form_input('first_name',set_value("first_name"),array("class"=>"form-control","placeholder"=>"First name"))?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <?=form_error("first_name")?>
      </div>
      <div class="form-group has-feedback">
        <?=form_input('last_name',set_value("last_name"),array("class"=>"form-control","placeholder"=>"Last name"))?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <?=form_error("last_name")?>  
    </div>
    <div class="form-group has-feedback">
        <?=form_label("Gender")?><br>
        <?=form_label("Female","female")?>
        <?=form_radio('gender',set_value("gender",'female'),array("id"=>"female"))?>
        <?=form_label("Male","male")?>
        <?=form_radio('gender',set_value("gender",'male'),array("id"=>"male"))?>
        <?=form_label("Other","other")?>
        <?=form_radio('gender',set_value("gender",'other'),array("id"=>"other"))?>
        <?=form_error("gender")?>  

    </div>
    

      <div class="form-group has-feedback">
        <input type="email" name="email" value="<?=set_value("email")?>" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <?=form_error("email")?>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <?=form_error("password")?>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="confirm_password" class="form-control" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        <?=form_error("confirm_password")?>
      </div>
      <div class="row">
        <div class="col-xs-8">
            <?=anchor("auth/login","Already have an account?")?>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    <?=form_close()?>
   
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="<?=base_url('assets/')?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url('assets/')?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?=base_url('assets/')?>plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
