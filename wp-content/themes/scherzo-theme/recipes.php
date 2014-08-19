<?php 
include("includes/includedevicedetect.inc.php");
include("includes/random_background.inc.php");
if ($done == 0) {
include("includes/random_image.inc.php");


}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Cooking Away</title>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
<?php include("includes/includedevicedetect.inc.php"); 
?>
<style>
<?php if ($done==0) { ?>
#container {
 background-image: <?php echo $backgroundImage ?>;
}
<?php }
elseif ($done==1) { ?>
#PhotosContent { 
 background-image: <?php echo $backgroundImage ?>;
 
 <?php } ?>
#contentImage {
	background-attachment: fixed;
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center;
	height: 275px;
	width: 400px;
	
	padding: 30px;
	margin-left: 125px;
}




</style>
</head>

<body onload="Common();">
<div id="container">
  <div id="header">
    <div id="logo"><a href="index.php" >
      <p>p</p>
      </a></div>
    <?php include("includes/header.inc.php") ?>
  </div>
  <div id="sideleft">
    <p></p>
    <p>&nbsp;</p>
    <div id="navbox">
      <?php if($done==1) {
	  include("includes/mobilenav.inc.php");
  }
  else if ($done==0) {
	 include("includes/nav.inc.php");
  }
  ?>
    </div>
  </div>
  <div id="sideright"> </div>
  <div id = "content">
    <div id = "RecipesPage">
    
    <h1> Who We Are </h1>
      <p> Recipes? </p>
      </div>
  </div>
  <?php include("includes/footer.inc.php"); ?>
</div>
</div>
</body>
</html>
