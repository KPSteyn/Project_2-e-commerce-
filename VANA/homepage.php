<?php session_start();
    require_once"VanaPDO.php";
?>

<!DOCTYPE html>

<html>
<head>
<link type="text/css" rel="stylesheet" href="home.css">
<title> Home </title>

</head>

<form action="homepage.php">
    <input type="submit" class ="homeButton" value="Home" style = "font-size: 22px;"/>
</form>

<form action="products.php">
    <input type="submit" class ="shopButton" value="Shop" style = "font-size: 22px;" />
</form>
<a href="https://www.facebook.com/VanaOnline/">
<image src = "design/facebook.png" style = "width:10%; right:6%;  top: 6%; position: absolute;"></image>
</a>

<a href="https://www.instagram.com/vananaturals/?hl=en">
<image src = "design/instagram.png" style = "width:10%; right:20%;  top: 6%; position: absolute;"></image>
</a>

	<div class = "bottomBorder">
		<center>
	<div class = "bottomArea">
	
	<span style = "width:70%;" class = "welcome">


<h2 style = "text-decoration: underline; text-decoration-color: #b30047; color:#bdc9d5;">Hello and welcome to Vana Naturals!</h2>
<br>
Here, we partner with nature to create effective, organic haircare products for natural, afro-textured, coily, curly hair types.
<br><br>
We believe in effective, Clean Beauty solutions to nourish, protect and grow healthy, lustrous hair. We only use premium natural and organic botanical ingredients.
<br><br>
All the ingredients in our hair and skin care products are carefully curated and rigorously sourced in order to formulate high performance products.
<br><br>
Our products are handmade in small batches and include our signature #MustBeThatEverythingButter, a triple whipped shea and mango seed multi-purpose moisturiser and our brand new Vana Make Me Collection! <br><br>

	</span>
<script>
var myCount = 3;
var picture = [];
picture[0] = 'design/shop1.jpg';
picture[1] = 'design/shop2.jpg';
picture[2] = 'design/shop3.jpg';
picture[3] = 'design/shop4.jpg';

function shopChange()
{

	document.slide.src = picture[myCount];
  	setTimeout("shopChange()",6000);// timer
  	
  	if( myCount < picture.length-1){
  		myCount++;
  	}
  	else
  	{
  		myCount = 0;

  	}
}

window.onload = shopChange;

</script>

<a href="products.php">
<image name="slide" width ="55%">
</a>






	<span style = "width:70%;" class = "aUs">
		<h2 style = "text-decoration: underline; text-decoration-color: #b30047; color:#bdc9d5;" >About Us</h2>
		Founded in 2018, Vana Naturals was created with a commitment to natural, clean living. Stephanie's Kenyan, farm-style upbringing nurtured a unique appreciation for the amazing benefits of living a life in partnership with, and, conscious of, one's natural environment. 
		<br><br>
		Since moving to South Africa in 2004, Stephanie's love and respect for the power of natural, botanical ingredients to amplify a healthier alternative to hair and skin care led to a close working partnership with an organic cosmetic formulator. 
		<br><br>
		Together, they formulated the beautiful #VanaMakeMeCollection, highlighting the benefits of hibiscus extract, aloe vera, argan oil, avocado oil, inulin, squalane and a host of other nutrient rich ingredients.  
		<br><br>
		All our ingredients are rigorously and ethically sourced and are only tested on humans.
		<br><br>
		Their 'kind' nature is less likely to cause irritations and are therefore safe for the whole family.
		<br><br>
	</span>
	

	</div>
</center>
</div>
</body>
<footer>
	<strong>info@vananaturals.co.za &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Follow Us @VANANATURALS@</strong>
</footer>
</html>