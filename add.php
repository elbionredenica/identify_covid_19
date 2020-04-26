<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
  <link rel="stylesheet" href="e_css/style.css">
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
  <title>Save Kosovo from Covid</title>
</head>
<body>
<div class="backarrow"><a href="index.php"><i class="theicon fas fa-arrow-left"></i></a></div>
<div class="all">
<div class="theform">
<form method="POST" action="added.php">
				<input id="emri" type="text" name="emri" placeholder="Emri (i kontaktit)">
				<input id="mbiemri" type="text" name="mbiemri" placeholder="Mbiemri (i kontaktit)">
				<input id="vendbanimi" type="text" name="vendbanimi" placeholder="Vendbanimi i personit të kontaktit (qyteti)">
				<input id="adresa" type="text" name="adresa" placeholder="Adresa (e kontaktit)">
        <input id="lastseen" type="date" name="lastseen" placeholder="Kontakti i fundit">
        <input id="extrainfo" type="text" name="extrainfo" placeholder="Informata shtesë">
				<input type="submit" name="submit">
</form>
</div> 
<div class="info">
  <img src="e_img/Picture1.png" alt="doctor" height="251" width="200">
  <h1 id="title"> Identifiko rastin me <br>COVID-19!</h1>
    <p id="tutorial"> Në formën ngjitur gjeni informatat që ju duhet të ofroni në mënyrë që ato të jenë sa më të vlefshme! Ne sigurohemi që të dhënat tuaja të procesohen vetëm tek instituti kompetent - IKSHP (Instituti Kombëtar i Shëndetësisë Publike).</h1>
    <p id="example"><i>p.sh. <strong> Personi në fjalë është poashtu rast kontakti, i infektuar nga një person i ardhur nga Italia para 3 ditëve</strong>  </i> </p>
  </div>

</div>

<script src="e_js/main.js"></script>
</body>
</html>