<?php
/* Smarty version 3.1.29, created on 2016-06-11 15:55:40
  from "C:\wamp\www\doan_222\models\nguoi_dung\nguoi_dung.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575c185ce26cc8_53784823',
  'file_dependency' => 
  array (
    '6e5386896124bd90d42a498d41d57ee29dd22e97' => 
    array (
      0 => 'C:\\wamp\\www\\doan_222\\models\\nguoi_dung\\nguoi_dung.tpl',
      1 => 1465652886,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_575c185ce26cc8_53784823 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/dist/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><?php echo '<script'; ?>
 src="../../assets/js/ie8-responsive-file-warning.js"><?php echo '</script'; ?>
><![endif]-->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/assets/js/ie-emulation-modes-warning.js"><?php echo '</script'; ?>
>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post">
        <h2 class="form-signin-heading">�ang nh?p</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" id="ten_dang_nhap" name="ten_dang_nhap" class="form-control" placeholder="Nh?p t�i kho?n" required autofocus>
        <label for="inputPassword" class="sr-only">M?t kh?u</label>
        <input type="password" id="mat_khau" name="mat_khau" class="form-control" placeholder="Nh?p m?t kh?u" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Ghi nh?
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="btnDangNhap" value="�ang nh?p" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/assets/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
