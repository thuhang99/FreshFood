<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fresh Food</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="<?php echo URL;?>">
    <?php require_once 'home/css.php' ;?>
  </head>
  	<?php require_once 'home/site_brand.php';?>

    <?php require_once 'home/navbar.php';?>


	<?php require_once $data['main'].'.php';?>

    <hr>

    <?php require_once 'home/subscribe.php';?>

    <?php require_once 'home/footer.php';?>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

	<?php require_once 'home/js.php';?>
  
  </body>
</html>