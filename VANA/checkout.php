<?php session_start();
    require_once"VanaPDO.php";

    if ( !isset($_POST['storeSubmit'])) { 
       
        header('Location: products.php');
        return;
    }else{
$_SESSION['IDfromStoreCountStore'] = array();

foreach($_SESSION['IDinDBpriceinDB'] as $id => $price) {
   $_SESSION['IDfromStoreCountStore'] [$id] = $_POST[$id];
  }
$testCart = 0;
foreach( $_SESSION['IDfromStoreCountStore'] as $id => $count) {
   if($count > 0){
   	$testCart = 1;
   }
  }
  if($testCart == 0){
  	
        header('Location: products.php');
        return;
  }
    }
?>
<html>
<head>
<link type="text/css" rel="stylesheet" href="checkout.css">
<script src = http://code.jquery.com/jquery-3.3.1.js>
</script>
<script defer src = "checkout.js"></script>
<title> Checkout </title>
<script>

</script>
</head>

<body>














<form action="homepage.php">
    <input type="submit" class ="homeButton" value="Home" style = "font-size: 22px;"/>
</form>

<form action="products.php">
    <input type="submit" class ="shopButton" value="Change Order" style = "font-size: 22px;" />
</form>












<div id = "bottomArea">
<?php 
$sql = "select ProductIdentifier, Name, Description, Cost FROM product;";

  $statement = $pdo->prepare(
      $sql
  );

  $statement->execute(array(     
  ));

echo("<center><span style = \"width:60%;font-size:45px; color:#ffe8f2; text-decoration: underline; text-decoration-color: #b30047;\">Your Cart</span></center><br>");

$totalPrice = 0;

echo("<table><tr><th style = \"width:29%;\">Product</th><th style = \"width:20%;\">Product Name</th><th style = \"width:17%;\">Product Price</th><th style = \"width:16%;\">Amount In Cart</th><th style = \"width:17%;\">Subtotal</th></tr>");
  while( $resultRow = $statement->fetch(PDO::FETCH_ASSOC)){
  


if(isset($_SESSION['IDfromStoreCountStore'][$resultRow['ProductIdentifier']]) && $_SESSION['IDfromStoreCountStore'][$resultRow['ProductIdentifier']] > 0){
echo("<tr><td style = \"width:29%;\"><img src= \"product/".$resultRow['ProductIdentifier'].".JPG\" class = \"productphoto\" style = \"max-width:100%; max-height:150px;\"></td><td style = \"width:20%;\">".$resultRow['Name']."</td><td style = \"width:17%;\">R ".$resultRow['Cost']."</td><td style = \"width:16%;\">".$_SESSION['IDfromStoreCountStore'][$resultRow['ProductIdentifier']] ."</td><td style = \"width:17%;\"> R".$_SESSION['IDfromStoreCountStore'][$resultRow['ProductIdentifier']] *$resultRow['Cost'] ."</td></tr>");
$totalPrice = $totalPrice + $_SESSION['IDfromStoreCountStore'][$resultRow['ProductIdentifier']] *$resultRow['Cost'] ;
}}
echo("</table>");






  echo("</span><br>");




  echo("<center><span style = \"width: 70%; text-align: center; display: flex; justify-content: center; align-items: center; text-align: center;
    align-items: center; justify-content: center;\"><table style = \" border-radius:25px;
    -moz-border-radius:25px;\"><tr><td style = \"font-size:25px;\">>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;>>&nbsp;&nbsp;&nbsp;Total Price &nbsp;&nbsp; R".$totalPrice."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<<&nbsp;&nbsp;<<</td></tr></table> </span></center>");

  echo("</form>");
  



  echo("<form action=\"payfast.php\" method=\"post\" id = \"myform\">");













?>
<center>
<br>
  <span style = "width:60%;font-size:45px; color:#ffe8f2; text-decoration: underline; text-decoration-color: #b30047;">Contact & Shipment Information</span><br><br>

            <table style = "width:80%; font-size: 20px;">

            <tr><td><span class = "infolabel">First Name</span></td>
            <td><input type = "text" id = "firstname" name = "firstname" class ="inputField"  placeholder="Your Name"></td>

            <td><span class = "infolabel">Last Name</span></td>
            <td><input type = "text" id = "lastname" name = "lastname" class ="inputField" placeholder="Your Surname"></td></tr>
            <tr><td colspan="4" style = "background-color: #303030; font-size:10px;">&nbsp;</td></tr>

            <tr><td colspan="2"><span class = "infolabel">Address</span></td>
            <td colspan="2"><input type = "text" id = "address" name = "address" class ="inputField" placeholder="Delivery Address"></td></tr>

            <tr><td colspan="4" style = "background-color: #303030; font-size:10px;">&nbsp;</td></tr>
            <tr><td colspan="2"><span class = "infolabel">Apartment, suite, etc.</span></td>

            <td colspan="2"><input type = "text" id = "residence" name = "residence" class ="inputField" placeholder="Your Residence"></td></tr>
            <tr><td colspan="4" style = "background-color: #303030; font-size:10px;">&nbsp;</td></tr>

            <tr><td colspan="2"><span class = "infolabel">City</span></td>
            <td colspan="2"><input type = "text" id = "city" name = "city" class ="inputField" placeholder="Your City"></td></tr>

            <tr><td colspan="4" style = "background-color: #303030; font-size:10px;">&nbsp;</td></tr>
           
            <tr><td><span class = "infolabel">Country</span></td>
            <td>
                  <select id="country" name="country" class ="inputField" style = "text-align: center;">
                  <option value="Select" selected>Select</option>
                  <option value="Algeria">Algeria</option>
                  <option value="Angola">Angola</option>
                  <option value="Benin">Benin</option>
                  <option value="Botswana">Botswana</option>
                  <option value="Burkina Faso">Burkina Faso</option>
                  <option value="Burundi">Burundi</option>
                  <option value="Cabo Verde">Cabo Verde</option>
                  <option value="Cameroon">Cameroon</option>
                  <option value="Central African Republic (CAR)">Central African Republic (CAR)</option>
                  <option value="Chad">Chad</option>
                  <option value="Comoros">Comoros</option>
                  <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
                  <option value="Congo, Republic of the">Congo, Republic of the</option>
                  <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                  <option value="Djibouti">Djibouti</option>
                  <option value="Egypt">Egypt</option>
                  <option value="Equatorial Guinea">Equatorial Guinea</option>
                  <option value="Eritrea">Eritrea</option>
                  <option value="Eswatini (formerly Swaziland)">Eswatini (formerly Swaziland)</option>
                  <option value="Ethiopia">Ethiopia</option>               
                  <option value="Gabon">Gabon</option>
                  <option value="Gambia">Gambia</option>
                  <option value="Ghana">Ghana</option>
                  <option value="Guinea">Guinea</option>
                  <option value="Guinea-Bissau">Guinea-Bissau</option>
                  <option value="Kenya">Kenya</option>
                  <option value="Lesotho">Lesotho</option>
                  <option value="Liberia">Liberia</option>                 
                  <option value="Libya">Libya</option>
                  <option value="Madagascar">Madagascar</option>
                  <option value="Malawi">Malawi</option>
                  <option value="Mali">Mali</option>
                  <option value="Mauritania">Mauritania</option>
                  <option value="Mauritius">Mauritius</option>
                  <option value="Morocco">Morocco</option>
                  <option value="Mozambique">Mozambique</option>
                  <option value="Namibia">Namibia</option>                 
                  <option value="Niger">Niger</option>
                  <option value="Nigeria">Nigeria</option>
                  <option value="Rwanda">Rwanda</option>
                  <option value="Sao Tome and Principe">Sao Tome and Principe</option>             
                  <option value="Senegal">Senegal</option>
                  <option value="Seychelles">Seychelles</option>
                  <option value="Sierra Leone">Sierra Leone</option>
                  <option value="Somalia">Somalia</option>               
                  <option value="South Africa">South Africa</option>
                  <option value="South Sudan">South Sudan</option>
                  <option value="Sudan">Sudan</option>
                  <option value="Tanzania">Tanzania</option>
                  <option value="Togo">Togo</option>
                  <option value="Tunisia">Tunisia</option>
                  <option value="Uganda">Uganda</option>
                  <option value="Zambia">Zambia</option>
                  <option value="Zimbabwe">Zimbabwe</option>
                </select>
            </td>







            <td><span class = "infolabel">Postal Code</span></td>


            <td><input type = "text" id = "postalcode" name = "postalcode" class ="inputField" placeholder="Your Postal Code"></td></tr>
            <tr><td colspan="4" style = "background-color: #303030; font-size:10px;">&nbsp;</td></tr>

            <tr><td colspan="2"><span class = "infolabel">Phone Number</span></td>
            <td colspan="2"><input type = "text" id = "phone" name = "phone" class ="inputField" placeholder="Your Contact Number"></td></tr>

            <tr><td colspan="4" style = "background-color: #303030; font-size:10px;">&nbsp;</td></tr>
            <tr><td colspan="2"><span class = "infolabel">Email Address</span></td>

            <td colspan="2"><input type = "text" id = "email" name = "email" class ="inputField" placeholder="Your Email Address"></td></tr>
            <tr><td colspan="4" style = "background-color: #303030; font-size:10px;">&nbsp;</td></tr>

            <tr><td colspan="2"><span class = "infolabel">Subscribe For Future Email Promotions</span></td>
            <td colspan="2"><input type = "checkbox" id = "promo" name = "promo" class ="inputField"></td></tr>

</table><br>
</center>
            <span id = "submissionError" style = "font-size:20px;"></span>  
            <br><br>
<?php


  echo("<center><div style = \"width: 70%; text-align: center; display: flex; justify-content: center; align-items: center;\"><table style = \" border-radius:25px;
    -moz-border-radius:25px;\"><tr><td> <button id = \"submit\" type=\"submit\" name = \"submit\" style = \"font-size:25px; border-radius: 25px; width:85%; background-color: #e6fffb;\">Proceed With Payment</button></td></tr></table> </div></center><br>");
  echo("</form>");
  

?></div>
</body>

<footer>
<strong> info@vananaturals.co.za &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Follow Us @VANANATURALS@ </strong>
</footer>

</html>