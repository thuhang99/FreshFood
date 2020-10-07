<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>
  <base href="<?php echo URL;?>">

  <?php require_once'home/css.php' ;?>

</head>
<body id="page-top">
 
  <div id="wrapper">

  <?php require_once'home/navbar.php' ; ?>

  <?php require_once $data['main'].'.php';?>

  </div>

  <?php require_once'home/logout.php' ; ?>
  
  <?php require_once'home/js.php' ; ?>

</body>

</html>
