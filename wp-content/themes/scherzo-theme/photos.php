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
	height: 300px;
	width: 450px;
	
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
      <span class="Link"><a href="index.php"> Click here to go back to the homepage </a> 
  </span></div>
  <div id="sideright"> </div> </div>
  <div id = "content">
    <div id = "PhotosPage">
    
    <h1> Photos </h1>
      <p> Recipes? </p>
     <div id="contentImage"  style="background-image: url(<?php echo $selectedImage; ?>);" >
        
          <?php if (isset($imageSize)) { ?>
         <img src="<?php echo $selectedImage; 
        ?>" alt="Random image" class="picBorder" size="<?php echo $imageSize[3]; } ?>
          <p id="caption"> <?php //echo $caption; 
		  ?> </p> </div>
  </div> 
  </div>
  <?php include("includes/footer.inc.php"); ?>


</body>
</html>
