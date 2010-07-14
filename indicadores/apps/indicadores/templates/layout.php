<?php use_helper('Javascript') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<?php include_http_metas() ?>
<?php include_metas() ?>

<?php include_title() ?>

<link rel="shortcut icon" href="/favicon.ico" />
</head>
<body class="yui-skin-sam"> 
<div class="wrapper">
<div class="header">
<?php echo image_tag("logo.png") ?>
</div>
<?php include('_menu.php') ?>
<div class="main">
<?php echo $sf_data->getRaw('sf_content') ?>
</div>
</div>
</body>
</html>
