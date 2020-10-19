<?php session_start();
    require_once"VanaPDO.php";

?>

<!DOCTYPE html>

<html>
<head>
<link type="text/css" rel="stylesheet" href="products.css">

	<script type="text/javascript" src="jquery.min.js">
		//imports JQuery
	</script>

<title> Products </title>
<script>
	
	function calcTotal(){ //to execute upon being called
		
var tempTot = 0;
for (var key in IDinDBpriceinDB) {

	tempTot = parseFloat(tempTot) +  (parseFloat(document.getElementById(key).value) * parseFloat(IDinDBpriceinDB[key])); 
}
	document.getElementById('Total').innerHTML = tempTot;

}


</script>

<script type = "text/javascript">
	
$( document ).ready(function() {//to execute upon the page being loaded

var tempTot = 0;
for (var key in IDinDBpriceinDB) {
	tempTot = parseFloat(tempTot) +  (parseFloat(document.getElementById(key).value) * parseFloat(IDinDBpriceinDB[key])); 
}
	document.getElementById('Total').innerHTML = tempTot;
});
</script>
</head>


<form action="homepage.php">
    <input type="submit" class ="homeButton" value="Home" style = "font-size: 22px;"/>
</form>

<form action="products.php">
    <input type="submit" class ="shopButton" value="Shop" style = "font-size: 22px;" />
</form>
<a href="https://www.facebook.com/VanaOnline/">
<image src = "design/facebook.png" style = "width:10%; left:20%;  top: 6%; position: absolute;"></image>
</a>

<a href="https://www.instagram.com/vananaturals/?hl=en">
<image src = "design/instagram.png" style = "width:10%; left:6%;  top: 6%; position: absolute;"></image>
</a>


<body>
	<div id = "bottomArea">
<?php 
$sql = "select ProductIdentifier, Name, Description, Cost FROM product WHERE StockAvailable = :available;";

	$statement = $pdo->prepare(
	    $sql
	);

	$statement->execute(array(
	  	':available' => 1        
	));

echo("<form action=\"checkout.php\" method=\"post\" >");
echo("<span class = \"products\">");
echo("<div style = \"width: 90%; text-align: center;display: flex; justify-content: center; align-items: center;

    \"><table style = \"width:90%; background-color:  #484848; border-style: solid; border-radius:25px;
    border-color: #dfeb91;
    border-width: 0.5px;\"><tr><td style =\"color: #9affed;font-size:45px; width:30%;\">Total: R<span id = \"Total\" style = \"color: #9affed;\"></span></td><td style = \"width:30%;\"> <button type=\"submit\" name = \"storeSubmit\" style = \"font-size:45px; background-color: #484848; color:#dbe985;  border-radius:25px;\">Proceed to Checkout</button></td></tr></table> </div><br>");
	$_SESSION['IDinDBpriceinDB'] = array();
	?><script>
		var IDinDBpriceinDB = [];
	</script>

	<?php
	while( $resultRow = $statement->fetch(PDO::FETCH_ASSOC)){
	
	  $_SESSION['IDinDBpriceinDB'][$resultRow['ProductIdentifier']] = $resultRow['Cost'];
?>
	<script>IDinDBpriceinDB[<?php echo($resultRow['ProductIdentifier']); ?>] = <?php echo($resultRow['Cost']); ?>;</script>
<?php
	echo("<span class= \"descriptionproduct\">
		Order Amount:	&nbsp;	&nbsp;<input type = \"number\" style = \"width:30%; font-size:30px; text-align: center;\" min=\"0\" max=\"9\" value = \"");
	if(isset($_SESSION['IDfromStoreCountStore'][$resultRow['ProductIdentifier']])){
echo($_SESSION['IDfromStoreCountStore'][$resultRow['ProductIdentifier']]."\" onchange = \"calcTotal()\" id = \"".$resultRow['ProductIdentifier']."\" name = \"".$resultRow['ProductIdentifier']."\"></input>
		<h3 style = \"width:100%\"> R".$resultRow['Cost']."</h3><span style = \"width: 100%;\"><img src= \"product/".$resultRow['ProductIdentifier'].".JPG\" class = \"productphoto\"></span><br><br>".$resultRow['Name']."<br><br>"."<span style = \"width: 100%;\"><details style = \"color : #700b00; cursor: pointer; \"><summary style = \"cursor: pointer;\">Product Description</summary><p  style = \"text-align: left; font-size: 20px;\">".$resultRow['Description']."</p></details></span></span>");

	}else{
	echo("0\" onchange = \"calcTotal()\" id = \"".$resultRow['ProductIdentifier']."\" name = \"".$resultRow['ProductIdentifier']."\"></input>
		<h3 style = \"width:100%\"> R".$resultRow['Cost']."</h3><span style = \"width: 100%;\"><img src= \"product/".$resultRow['ProductIdentifier'].".JPG\" class = \"productphoto\"></span><br><br>".$resultRow['Name']."<br><br>"."<span style = \"width: 100%;\"><details style = \"color : #700b00;\"><summary>Product Description</summary><p  style = \"text-align: left; font-size: 20px;\">".$resultRow['Description']."</p></details></span></span>");
	}
}
	echo("</span>");
	echo("</form>");
?></div>
</body>
<footer>
	<strong>info@vananaturals.co.za &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Follow Us @VANANATURALS@</strong>
</footer>
</html>