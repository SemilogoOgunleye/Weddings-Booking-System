<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lagos Internal Revenue Service</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="ajax/ajax.js"></script>
</head>
<body>

<?php 
include 'database.php';
if (isset($_POST['Count'])){
$min=$_POST['min'];




$sql = "SELECT venue.name   as 'VenueName', count(venue_booking.venue_id) as 'Number_month' FROM `venue` INNER JOIN `venue_booking` ON venue.venue_id = venue_booking.venue_id where booking_date = '$min' group by venue.name";  
$rs_result = mysqli_query($conn, $sql);  
?>
<table class="table table-bordered table-striped">  
<thead>  
<tr>  
<th>Venue Name</th>  
<th>Week day Price</th> 

</tr>  
</thead>  
<tbody>  
<?php  
while ($row = mysqli_fetch_array($rs_result)) {  
?>  
            <tr>  
            <td><?php echo $row["VenueName"]; ?></td> 
			<td><?php echo $row["Number_month"]; ?></td> 
			 
			

</tr>
<?php  }?>


</table>
     
<?php  } ?>	