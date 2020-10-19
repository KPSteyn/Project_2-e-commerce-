<?php session_start();
    require_once"VanaPDO.php";

	$_SESSION['errorC'] = "<br><br><br><br><br>";
  if(isset($_POST['vanaAdminName'])){
    $statement = $pdo->prepare(
         'SELECT vanaAdminName, adminPassword FROM admin WHERE vanaAdminName = :name AND adminPassword = :password'
      );
      $statement->execute(array( 
         ':name' => $_POST['vanaAdminName'], ':password' => $_POST['adminPassword']
      ));
      $resultRow = $statement->fetch(PDO::FETCH_ASSOC);
    if ( $resultRow === false ) { 
      $_SESSION['errorC'] = "<br><br><strong><span style = \"color:#ffc800\";>Login Information Submitted Is Invalid.</span></strong><br><br>";
    }else{
      $_SESSION['vanaAdminName'] = $_POST['vanaAdminName'];
        header( 'Location: mail.php') ;
        return;
      }
  }
?>
<html>
<head>
<link type="text/css" rel="stylesheet" href="login.css">
<title> Login </title>
<script>

</script>
</head>
<body>
    		<br><br><br><br><br><br>
    	<center style = "background-color: #3d3d3d; color: #ffffff;">
    		<br><br><br><br><br>
    		<h1>Vana Naturals Package Mailing System</h1>
	        <form method="POST">
            <br>
	            <label for="vanaAdminName">USERNAME&nbsp:</label>
	            <input type="text" name="vanaAdminName" id="vanaAdminName"><br><br>
	            <label for="adminPassword">PASSWORD&nbsp:</label>
	            <input type="password" name="adminPassword" id="adminPassword"><br><br>
	            <button type="submit" id="submit" >Login</button><br>
	        </form>
	        <?php 
	        	echo($_SESSION['errorC']);
	        ?>
	        </center>
</body>
</html>