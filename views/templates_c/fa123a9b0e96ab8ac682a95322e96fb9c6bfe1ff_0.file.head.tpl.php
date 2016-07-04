<?php
/* Smarty version 3.1.29, created on 2016-06-19 16:17:28
  from "C:\xampp\htdocs\18-6doan\views\templates\layout\head.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5766a978ea94a5_13258806',
  'file_dependency' => 
  array (
    'fa123a9b0e96ab8ac682a95322e96fb9c6bfe1ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\18-6doan\\views\\templates\\layout\\head.tpl',
      1 => 1464441827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5766a978ea94a5_13258806 ($_smarty_tpl) {
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>
    <?php if (isset($_smarty_tpl->tpl_vars['title_ung_dung']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['title_ung_dung']->value;?>

    <?php } else { ?>
        Công ty ABC
    <?php }?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/dist/css/dashboard.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href=".<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/dist/css/sticky-footer-navbar.css" rel="stylesheet">

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
  </head><?php }
}
