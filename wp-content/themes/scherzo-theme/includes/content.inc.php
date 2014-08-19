<div id = "content">
<div class="content" id="AboutContent"> This is the About Page </div> 
<div class="content" id="RecipesContent"> <?php if($done==1) { ?>
		This is the mobile recipes page... 
        <?php } 
		else if ($done==0) { ?>	
        This is the Recipes Page
        <?php } ?>				  </div>
<div class="content" id="FavoritesContent"> This is the Favorites Page </div>
<div class="content" id="PhotosContent"> This is the Photos Page </div>
<div class="content" id="ContactContent"> <?php include("includes/contact.inc.php") ?> </div></div>