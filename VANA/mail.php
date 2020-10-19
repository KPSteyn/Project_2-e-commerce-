<?php session_start();
    require_once"VanaPDO.php";

    if ( !isset($_SESSION['vanaAdminName'])) { //Redirects to the Login Page if the user is not logged in or if their session has timed out
       
        header('Location:login.php');
        return;
    }

  if(isset($_POST['cid'])){
  $sql = "UPDATE `shippingemailconfirmation` SET `Sent` = :sent, `DateSent` = :todaydate  WHERE `shippingemailconfirmation`.`ConfirmationIdentifier` = :cid";


  $statement = $pdo->prepare(
      $sql
  );

  $statement->execute(array(     
  ':sent' => 1,
  ':todaydate' => date("Y-m-d"),
  ':cid' => $_POST['cid'],
  ));

  header('Location:mail.php');
        return;
    }

?>
<html>
<head>
<link type="text/css" rel="stylesheet" href="mail.css">
<script src = http://code.jquery.com/jquery-3.3.1.js>
</script>


<title> Mail </title>
<script>

</script>
</head>
<body>
<div id = "bottomArea">

<br><br>
<?php

  echo("<center><form action=\"logoutVana.php\"><div style = \"width: 70%; text-align: center; display: flex; justify-content: center; align-items: center;\"><table style = \" border-radius:25px;
    -moz-border-radius:25px;\"><tr><td> <button id = \"submit\" type=\"submit\" name = \"submit\" style = \"font-size:25px; border-radius: 25px; width:85%; background-color: #e6fffb;\">Logout</button></td></tr></table> </div></center><br>");
  echo("</form>");
  

?>


<?php 
$sql = "SELECT ConfirmationIdentifier, Content, PurchaseID FROM shippingemailconfirmation WHERE Sent = :sent;";

  $statement = $pdo->prepare(
      $sql
  );

  $statement->execute(array(     
  ':sent' => 0,
  ));

echo("<center><span style = \"width:60%;font-size:45px; color:#ffe8f2; text-decoration: underline; text-decoration-color: #b30047;\">Order List</span></center><br>");

$totalPrice = 0;

echo("<table><tr style = \"color:#ffffff; background-color: #636363;\"><th style = \"width:20%;\">Order</th><th style = \"width:10%;\">First Name</th><th style = \"width:10%;\">Last Name</th><th style = \"width:12%;\">Address</th><th style = \"width:8%;\">Residence</th><th style = \"width:8%;\">City</th><th style = \"width:6%;\">Country</th><th style = \"width:5%;\">Postcode</th><th style = \"width:15%;\">Email & Phone Number</th><th style = \"width:5%;\">Hide</th></tr>");
  while( $resultRow = $statement->fetch(PDO::FETCH_ASSOC)){

$emailContent = $resultRow['Content'];
$pid = $resultRow['PurchaseID'];
$cid = $resultRow['ConfirmationIdentifier'];

$sqll ="SELECT * FROM purchase WHERE PurchaseIdentifier = :p;";

  $statementt = $pdo->prepare(
      $sqll
  );

  $statementt->execute(array(     
  ':p' => $pid,
  ));

$resultR = $statementt->fetch(PDO::FETCH_ASSOC);

echo("<tr><td style = \"width:20%;\">".$emailContent."</td><td style = \"width:10%;\">". htmlentities($resultR['FirstName'])."</td><td style = \"width:10%;\">". htmlentities($resultR['LastName'])."</td><td style = \"width:12%;\">". htmlentities($resultR['Address'])."</td><td style = \"width:8%;\">". htmlentities($resultR['Residence'])."</td><td style = \"width:8%;\">". htmlentities($resultR['City'])."</td><td style = \"width:6%;\">". htmlentities($resultR['Country'])."</td><td style = \"width:5%;\">". htmlentities($resultR['PostalCode'])."</td><td style = \"width:15%;\">Email:<br>". htmlentities($resultR['Email'])."<br><br>Phone Number:<br>".  htmlentities($resultR['Phonenumber'])."</td><td style = \"width:5%;\"><form method = \"POST\" action = \"mail.php\"><input style = \"width:100%;\"id =\"Remove\" type = \"submit\" name = \"submit\" value = \"sent\"><input type = \"hidden\" name = \"cid\"id = \"cid\"value = \"".$cid."\" ></form></td></tr>");

}
echo("</table>");



?>
</body>
</html>