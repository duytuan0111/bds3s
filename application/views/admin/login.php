<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Nhatro365.com</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url(); ?>"><b>Nhatro365</b>.timviec365.com</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <form onsubmit="validate(); return false;"  method="post">
      <span class="text-danger validate-error"></span>
        <div class="input-group mb-3">
          <input type="text" class="form-control username" placeholder="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          
          <!-- /.col -->
            <button type="submit" onclick="validate(); return false;" class="btn btn-primary btn-block">Đăng nhập</button>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/admin/dist/js/adminlte.min.js"></script>
<script type="text/javascript">
  function validate() {
    var username  = $('.username').val();
    var password  = $('.password').val();
    var base_url  = '<?php echo base_url(); ?>';
    var flag      = false;
    if (username == '') {
      $('.validate-error').html('Tên tài khoản không được để trống');
      return false;
    } else {
      $('.validate-error').html();
      flag = true;
    }
    if (password == '') {
      $('.validate-error').html('Mật khẩu không được để trống');
      return false;
    } else {
      $('.validate-error').html();
      flag = true;
    }
    if (flag == true) {
      $.ajax({
        url: base_url+'admin/auth/login',
        type: 'POST',
        dataType: 'json',
        data: {username: username, password: password},
        success: function(data) {
          if (data.status == true) {
            window.location.href = base_url+'admin/home';
          } else {
            $('.validate-error').html('Tên tài khoản hoặc mật khẩu không chính xác');
          }
        },
        error: function(xhr) {
          alert('Đăng nhập không thành công');
        }
      });
    }
  }
</script>
</body>
</html>
