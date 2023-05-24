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
if (isset($_POST['Capacity'])){
$min=$_POST['min'];
$max=$_POST['max'];




$sql = "SELECT * FROM venue where   capacity  between '$min'  and '$max'  and   licensed= 1";  
$rs_result = mysqli_query($conn, $sql);  
?>
<table class="table table-bordered table-striped">  
<thead>  
<tr>  
<th>Venue Name</th>  
<th>Week day Price</th> 
<th>Weekend Price</th> 
<th>Licensed Status</th>
</tr>  
</thead>  
<tbody>  
<?php  
while ($row = mysqli_fetch_array($rs_result)) {  
?>  
            <tr>  
            <td><?php echo $row["name"]; ?></td> 
			<td><?php echo $row["weekend_price"]; ?></td> 
			<td><?php echo $row["weekday_price"]; ?></td> 
			<td><?php
                   if($row["licensed"] == 1){

				   echo "licensed";} ?></td> 
			

</tr>
<?php  }?>


</table>
     
<?php  } ?>	