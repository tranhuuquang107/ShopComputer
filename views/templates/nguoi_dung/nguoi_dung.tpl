<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{$path}public/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{$path}public/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{$path}public/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{$path}public/dist/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{$path}public/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
    {if isset($err)}
    <h3 style="color:#ff0000;" align="center">{$err}</h3>
    {/if}
      <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Ðăng nhập</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" id="ten_dang_nhap" name="ten_dang_nhap" class="form-control" placeholder="Nhập tài khoản"  >
        <label for="inputPassword" class="sr-only">Mật khẩu</label>
        <input type="password" id="mat_khau" name="mat_khau" class="form-control" placeholder="Nhập mật khẩu" >
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Ghi nhớ
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="btnDangNhap" value="Đăng nhập" type="submit">Đăng nhập</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{$path}public/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
