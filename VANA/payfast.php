<?php session_start();
    require_once"VanaPDO.php";

    if ( !isset($_POST['submit'])) {
       
        header('Location: checkout.php');
        return;
    }

    if(!isset($_POST['promo'])){
    	$_SESSION['promo'] = 0;
    }else{
    	$_SESSION['promo'] = 1;
    }
    $_SESSION['firstname'] = $_POST['firstname'];
    $_SESSION['lastname'] = $_POST['lastname'];
    $_SESSION['address'] =  $_POST['address'];
    $_SESSION['residence'] =  $_POST['residence'];
    $_SESSION['city'] =  $_POST['city'];
    $_SESSION['country'] = $_POST['country'] ;
    $_SESSION['postalcode'] =$_POST['postalcode'];
    $_SESSION['phone'] = $_POST['phone'] ;
    $_SESSION['email'] = $_POST['email'];
?>

<html>
<head>
<link type="text/css" rel="stylesheet" href="payfast.css">
<title>Payfast</title>

</head>
<body>
<div onclick = "location.href = 'thanks.php';" style = "height:100%; width: 100%;">&nbsp;</div>
</body>
</html>