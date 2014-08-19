<script type = "text/javascript">

    

function Common(){
	
	  
	if (document.getElementById("Common").value=="ABOUT") {
	   $('.content').not('#AboutContent').hide();
	   $('#AboutContent').fadeIn();  	
   }
     if (document.getElementById("Common").value=="RECIPES") { 
	   $('.content').not('#RecipesContent').hide();
	   $('#RecipesContent').fadeIn();   
   }
    if (document.getElementById("Common").value=="FAVORITES") {
	   $('.content').not('#FavoritesContent').hide();
	   $('#FavoritesContent').fadeIn();   
   }
    if (document.getElementById("Common").value=="PHOTOS") {
	   $('.content').not('#PhotosContent').hide();
	   $('#PhotosContent').fadeIn();  
   }
    if (document.getElementById("Common").value=="CONTACT") {
	   $('.content').not('#ContactContent').hide();
	   $('#ContactContent').fadeIn();  
   }
   }
   


  $(document).ready(function(){
	
	  $('.content').not('AboutContent').hide();
	  $('#AboutContent').fadeTo('slow', 1);
	
    $('#ABOUT').bind('click', function() {
	   $('.content').not('#AboutContent').hide();
	   $('#AboutContent').fadeIn();
	  	document.getElementById("Common").value="ABOUT";
   });
     $('#RECIPES').bind('click', function() {
		 	 
	   $('.content').not('#RecipesContent').hide();
	   $('#RecipesContent').fadeIn();
	   document.getElementById("Common").value="RECIPES";
   });
    $('#FAVORITES').bind('click', function() {
	   $('.content').not('#FavoritesContent').hide();
	   $('#FavoritesContent').fadeIn();
	   document.getElementById("Common").value="FAVORITES";
   });
    $('#PHOTOS').bind('click', function() {
	   $('.content').not('#PhotosContent').hide();
	   $('#PhotosContent').fadeIn();
	   document.getElementById("Common").value="PHOTOS";
   });
    $('#CONTACT').bind('click', function() {
		
	   $('.content').not('#ContactContent').hide();
	   $('#ContactContent').fadeIn();
	   document.getElementById("Common").value="CONTACT";
   });
 });
    </script>
    
    <ul> <li><a href="#" id="ABOUT">About</a></li>
     
    <li><a href="#" id="RECIPES">Recipes</a></li>
   
    <li><a href="#" id="FAVORITES">Favorites</a></li>
    <li><a href="#" id="PHOTOS">Photos</a></li>
    <li><a href="#" id="CONTACT">Contact</a></li> </ul>
    
