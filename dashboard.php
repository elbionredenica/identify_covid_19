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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <title>Save Kosovo from Covid</title>
</head>
<body class="dashboardbody">
<?php
include_once ("init.php");

$sql = "SELECT * FROM mainTable";

$selectusers = $connect->prepare($sql);

$selectusers->execute();

$userat = $selectusers->fetchAll();

?>
			<table id="mytable">
				<thead>
						<th> <i class="fas fa-sort-amount-down"></i>  ID </th>
						<th> <i class="fas fa-user"></i> Emri </th>
						<th> <i class="far fa-user"></i> Mbiemri </th>
						<th> <i class="fas fa-map-pin"></i> Qyteti </th>
						<th> <i class="fas fa-location-arrow"></i> Adresa </th>
            			<th> <i class="far fa-clock"></i></span> Data e kontaktit </th>
						<th> <i class="fas fa-info-circle"></i> Informata shtesë </th>
						<th> Harta </th>
						<th> I kontaktuar </th>
				</thead>

				<tbody>
						<?php
foreach ($userat as $user)
{
?>	
						
						<tr>
						  <td> <?=$user['id'] ?> </td>
						  <td> <?=$user['firstname'] ?> </td>
						  <td> <?=$user['lastname'] ?> </td>
						  <td> <?=$user['vendbanimi_qytet'] ?> </td>
						  <td> <?=$user['adresa'] ?> </td>
              <td> <?=$user['lasttimeseen'] ?> </td>
						  <td> <?=$user['extrainfo'] ?> </td>
						  <td> <?= "<a target='_blank' href='map.php?id=$user[id]'><i class='fas fa-map-marked-alt'></i></a>" ?> </td>
						  <td> <!-- Button trigger modal -->
<a style="cursor:pointer;" data-toggle="modal" data-target="#basicExampleModal">
  <i class='fas fa-trash-alt'></i>
</a>

<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dëshironi të fshini rast kontakti?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Nëse klikoni 'Po' ky rast kontakti do të fshihet pasi që tanimë është kontaktuar. Klikoni "Jo" në të kundërtën!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Jo</button>
        <?="<a type='button' class='btn btn-primary' href='delete.php?id=$user[id]'> Po </a>" ?>      </div>
    </div>
  </div>
</div></td>
						</tr>

						<?php

}

?>
							
				</tbody>
			</table>
<a href="add.php"><div class="addone" style="background-image: url('e_img/add.png');"></div></a>
<script src="e_js/main.js"></script>
</body>
</html>
