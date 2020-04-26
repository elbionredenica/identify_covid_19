<?php		
	require 'init.php';

	if(isset($_POST['submit'])){
		$emri = $_POST['emri'];
		$mbiemri = $_POST['mbiemri'];
		$vendbanimi = $_POST['vendbanimi'];
        $adresa = $_POST['adresa'];
        $lastseen = $_POST['lastseen'];
        $extrainfo = $_POST['extrainfo'];

		if(empty($_POST['emri']) || empty($_POST['mbiemri']) || empty($_POST['vendbanimi']) || empty($_POST['lastseen']) ) {
			echo "<h1 class='com'>Complete all the informations</h1>";
			echo "<a class='b' href='index.php'> Back </a>";
		} else {
			$sql = "INSERT INTO mainTable (firstname, lastname, vendbanimi_qytet, adresa, lasttimeseen, extrainfo)
    		VALUES (:emri, :mbiemri, :vendbanimi, :adresa, :lastseen, :extrainfo)";

    		$sqlquery = $connect->prepare($sql);
    	$sqlquery->bindParam(':emri', $emri);
    	$sqlquery->bindParam(':mbiemri', $mbiemri);
    	$sqlquery->bindParam(':vendbanimi', $vendbanimi);
        $sqlquery->bindParam(':adresa', $adresa);
        $sqlquery->bindParam(':lastseen', $lastseen);
    	$sqlquery->bindParam(':extrainfo', $extrainfo);

    	$sqlquery->execute();
    echo "New record created successfully";
    header('Location: done.php');
		}
	}
?>
<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>MYSQL</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/jquery-ui.css">			
			
		</head>
		<body>	
			
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
 			<script src="js/jquery-ui.js"></script>			
		</body>
	</html>

<!--style-->

<style>
	.com {
		font-size: 50px;
	}

	.b {  
		font-size: 50px;
	}
</style>