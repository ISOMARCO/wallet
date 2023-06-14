<!DOCTYPE html>
<html lang="az">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wallet Login</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style>
    .placeholder-color::-webkit-input-placeholder {
      color: red;
    }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="javascript:void(0)">Wallet</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"></p>
      <form action="{{URL::base('login/loginRequest')}}" method="post" id="loginForm">
        <div class="input-group mb-3">
          <input type="email" class="form-control" id="email" placeholder="{{ML::select('Email')}}" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password" placeholder="{{ML::select('Password')}}" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="rememberMe" name="rememberMe">
              <label for="rememberMe">
                {{ML::select('RememberMe')}}
              </label>
            </div>
          </div>
          <div class="col-4">
            <button type="button" class="btn btn-primary btn-block" id="loginButton">{{ML::select('SignIn')}}</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="javascript:void(0)">{{ML::select('ForgotPassword')}}</a>
      </p>
      <p class="mb-0">
        <a href="javascript:void(0)" class="text-center">{{ML::select('Register')}}</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script>
  $(document).ready(function(){
    alert(navigator.userAgent);
    $("#email,#password").on("keyup",function(){
      if($(this).val() == "")
      {
        $(this).attr("placeholder","Boş buraxıla bilməz.");
        $(this).addClass("placeholder-color");
      }
    });
    $("#loginButton").on("click",function(){
      $.ajax({
        type: "post",
        url: "{{URL::base('login/loginRequest')}}",
        data: $("#loginForm").serialize(),
        dataType: "json",
        success: function(e)
        {
          if(e.error){
            $(".login-box-msg").addClass("text-danger");
            $(".login-box-msg").text(e.error);
          }
          else 
          {
            $("input, button").attr("disabled","disabled");
            $(".login-box-msg").removeClass("text-danger");
            $(".login-box-msg").addClass("text-success");
            $(".login-box-msg").text(e.success);
            setTimeout(function(){window.location.href="{{URL::base('home')}}";},2500);
          }
        }
      });
    });
  });
</script>
</body>
</html>
