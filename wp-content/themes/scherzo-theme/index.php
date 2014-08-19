<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

	<article <?php post_class(); ?>>

		<header class="entry-header">
			
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="archive"><?php the_title(); ?></a></h1>
			
			<div class="entry-meta">
			
				<p>Posted by <?php the_author_posts_link(); ?> on <time datetime="<?php the_time('c'); ?>" pubdate><?php the_time(get_option('date_format')); ?></time>. <a href="<?php the_permalink(); ?>/#comments"><?php comments_number('No comments','One comment','% comments'); ?></a>.</p>
			
			</div>
			
		</header>
		
			<?php if ($post->post_excerpt != "" ) {

				echo "<div class=\"entry-summary\">";
		   
				the_excerpt();
				
				echo "<p><a href=\"";
				
				the_permalink();
				
				echo "\">Continue reading <em>";
				
				the_title();
				
				echo "</em></a></p>";
		       
				echo "</div>";

			}
			
			else {
			
				echo "<div class=\"entry-content\">";
		   
				the_content("Continue reading <em>" . the_title('', '', false));
			   
				echo "</div>";

			}

			?>
		
	</article>
	
<?php endwhile; ?>

<div class="pagination">
			       
	    <p class="next"><?php previous_posts_link('Newer posts', '0'); ?></p>
	    <p class="previous"><?php next_posts_link('Older posts', '0'); ?></p>
   
</div>

</div> <!-- end content -->

<div id="sidebar">

	<?php get_sidebar('universal'); ?>

	<?php get_sidebar('front'); ?>

</div>

<?php get_footer(); 
/**
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
    <div class="content" id="AboutContent">
    <h1> Who We Are </h1>
      <p>Cooking Away or cookingawayfromhome.com is an informational website on cooking in a temporary kitchen.  <br />
        Temp Kitchens include:<br />
      <ul>
        <li> Camping </li>
        <li> Temporary furnished apartments </li>
        <li> Boats </li>
        <li> RVs </li>
        <li> Ski condo</li>
        <li> Cabin/Cottage</li>
        <li> Hotel</li>
        <li> On the Road </li>
      <li> cooking for friends </li></ul>
    </div>
    <div class="content" id="RecipesContent">
      
      <h1>  <?php if ($done==1) { 
        echo('This is the mobile recipes page...');
         } 
		else { 
        echo('Recipes');
         } ?> 
      </h1>
      <p> <a href="#"> Here </a> is where you can find a list of all the Recipes we have, unique to every kind of Kitchen! </p>
      
    </div>
    <div class="content" id="FavoritesContent">
      <h1> Favorites </h1>
      <p> Here you will find a list of our favorite travel spots and recipes. </p>
      <p> As well, we give descriptions of our personal experiences </p>
      <p> <a href="#"> Switzerland </a><br /></p><p>
      <a href="#"> Canada </a> <br /></p><p>
      <a href="#"> Timbuktoo </a><br /></p>
    </div>
    <div class="content" id="PhotosContent">
      <h1> Photos </h1>
       <p> Click <a href="photos.php"> here </a> to see our favorite photos! </p>
       
        
       
        </p>
      
    </div>
    <div class="content" id="ContactContent">
    <h1> Have a question? </h1> 
 <p> Fill out the information below and we'd be glad to help!</p> 

      <?php   include("includes/contact.inc.php");
	   ?>
    </div>
  </div>
  <?php include("includes/footer.inc.php"); ?>
</div>
</div>
</body>
</html>
**/
?>
