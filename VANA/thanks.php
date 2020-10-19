<?php 
	session_start();
	if(!isset($_SESSION['phone'])){
	    header("Location: homepage.php");
	    return;
	}
	    require_once"VanaPDO.php";
	$sql = "INSERT INTO purchase (FirstName, LastName, Address, Residence, City, Country, PostalCode, Phonenumber, Email, DatePurchased)  VALUES (:FirstName, :LastName, :Address, :Residence, :City, :Country, :PostalCode, :Phonenumber, :Email, :DatePurchased)";
	            $statemnt = $pdo->prepare($sql);
	            $statemnt->execute(array(
	    ':FirstName' => $_SESSION['firstname'], 
	    ':LastName' => $_SESSION['lastname'] ,
	    ':Address' => $_SESSION['address'] ,
	    ':Residence' => $_SESSION['residence'] ,
	    ':City' => $_SESSION['city'] ,
	    ':Country' => $_SESSION['country'] ,
	    ':PostalCode' => $_SESSION['postalcode'],
	    ':Phonenumber' => $_SESSION['phone'] ,
	    ':Email' => $_SESSION['email'],
	    ':DatePurchased' => date("Y-m-d"),
	              ));
	$purchaseId = $pdo -> lastInsertId();
	if($_SESSION['promo'] == 1){
		$myQuery = "SELECT * FROM promotionemailinglist WHERE EmailAddress=:email";
	 	$statemnt = $pdo->prepare($myQuery);
		$statemnt->execute(array(
		 ':email' => $_SESSION['email'],
	    ));
		$row = $statemnt->fetch(PDO::FETCH_ASSOC);
		if(!$row) {
		 	$sql = "INSERT INTO promotionemailinglist (EmailAddress)  VALUES (:Email)";
		    $statemnt = $pdo->prepare($sql);
		    $statemnt->execute(array(
			':Email' => $_SESSION['email']
		    ));
		}
	}
	$total = 0;
	$order = "This email is sent on behalf of Vana Naturals in order to inform you that your package has been mailed.<br><br>The mailed product(s) are as follows:<br><br>";
	foreach($_SESSION['IDfromStoreCountStore'] as $id => $count) {
	   if($_SESSION['IDfromStoreCountStore'] [$id] >0){
			$sql = "SELECT Name, Cost FROM product WHERE  ProductIdentifier = :pid;";
			$statement = $pdo->prepare(
	      		$sql
	  		);
			$statement->execute(array(
	  			':pid' => $id,  
	  		));
	  		$resultRow = $statement->fetch(PDO::FETCH_ASSOC);
			$total = $total + $resultRow['Cost']*$count;
	   		$order = $order . 'Product:&nbsp;'.$resultRow['Name'] . '&nbsp;&nbsp;&nbsp;Amount:&nbsp;'. $_SESSION['IDfromStoreCountStore'] [$id] . '&nbsp;&nbsp;&nbsp;Price:&nbsp;R'.$resultRow['Cost']*$_SESSION['IDfromStoreCountStore'] [$id].'<br>' ;
	   		$sql = "INSERT INTO productpurchase (PurchaseID, ProductID, ItemCount)  VALUES (:PurchaseID, :ProductID, :ItemCount)";
	            $statemnt = $pdo->prepare($sql);
	            $statemnt->execute(array(
			    ':PurchaseID' => $purchaseId,
			    ':ProductID' => $id,
			    ':ItemCount' => $_SESSION['IDfromStoreCountStore'] [$id],
	              ));
	   }
	}
	$order = $order . "<br>Total Price: R".$total."<br><br>We here at Vananaturals thank you for your support.";

	$sql = "INSERT INTO shippingemailconfirmation (Content, PurchaseID, Sent, DateSent)  VALUES (:Content, :PurchaseID, :Sent, :DateSent)";
	            $statemnt = $pdo->prepare($sql);
	            $statemnt->execute(array(
			    ':Content' => $order,
			    ':PurchaseID' => $purchaseId,
			    ':Sent' => 0,
			    ':DateSent' => null,
	              ));
	session_destroy();
?>
<html>
<head>
<link type="text/css" rel="stylesheet" href="thanks.css">
<title> Thanks </title>
<script>

</script>
</head>

<form action="homepage.php">
    <input type="submit" class ="homeButton" value="Home" style = "font-size: 22px;"/>
</form>

<form action="products.php">
    <input type="submit" class ="shopButton" value="Shop" style = "font-size: 22px;" />
</form>
<a href="https://www.facebook.com/VanaOnline/">
<image src = "design/facebook.png" style = "width:10%; left:2.5%;  top: 8%; position: absolute;"></image>
</a>

<a href="https://www.instagram.com/vananaturals/?hl=en">
<image src = "design/instagram.png" style = "width:10%; left:16.5%;  top: 8%; position: absolute;"></image>
</a>


<body>
  <div class = "bottomBorder">
    <center>
  <div class = "bottomArea" style = "color:#e8ffe9;">
    We thank you for your support and hope you enjoy your purchase!<br>&nbsp;<br><br>&nbsp;<br>
    A notificaiton email will be sent in the near future when your package has been mailed.<br>&nbsp;<br><br>&nbsp;<br>
    We would love to hear your feedback so please reach out to us at info@vananaturals.co.za<br>&nbsp;<br><br>&nbsp;<br>
    ~>&nbsp;&nbsp;Follow us @VANANATURALS&nbsp;&nbsp;<~

  </div>
</center>
</div>
</body>

<footer>
<strong> info@vananaturals.co.za &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Follow Us @VANANATURALS </strong>
</footer>

</html>