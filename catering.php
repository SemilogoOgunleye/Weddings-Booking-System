<?php
if(isset($_POST['Submit']))
{ 

$max = $_POST['max'];
$min = $_POST['min'];
$c1 = $_POST['c1'];
$c2 = $_POST['c2'];
$c3 = $_POST['c3'];
$c4 = $_POST['c4'];
$c5 = $_POST['c5'];

$maxc1 =  $max *  $c1;
$maxc2 =  $max *  $c2;
$maxc3 =  $max *  $c3;
$maxc4 =  $max *  $c4;
$maxc5 =  $max *  $c5;
$minc1 =  $min *  $c1;
$minc2 =  $min *  $c2;
$minc3 =  $min *  $c3;
$minc4 =  $min *  $c4;
$minc5 =  $min *  $c5;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
 <div class="panel panel-danger">
                <div class="panel-body">COA 123 - Server Side Programming</div>
                <div class="panel-heading">Individual Coursework - Wedding Planner</div>
                <div class="panel-body">Task 1 - Catering (Catering.php)</div>
              </div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Cost per person &#8594;<br>&#8595; Party Size</th>
        <th>C1 <?php echo  "= ". $c1 ;    ?></th>
        <th>C2  <?php echo  "= ". $c2 ;    ?></th>
		<th>C3  <?php echo  "= ". $c3 ;    ?></th>
		<th>C4  <?php echo  "= ". $c4 ;    ?></th>
		<th>C5  <?php echo  "= ". $c5 ;    ?></th>
      </tr>
    </thead>
    <tbody>
	<tr class="success">
        <td><?php echo  "Min = ". $min ;    ?></td>
        <td><?php echo   $minc1 ;    ?></td>
        <td><?php echo   $minc2 ;    ?></td>
		<td><?php echo   $minc3 ;    ?></td>
		<td><?php echo   $minc4 ;    ?></td>
		<td><?php echo   $minc5 ;    ?></td>
      </tr>
      <tr>
        <td><?php echo  "Max = ". $max ;    ?></td>
        <td><?php echo   $maxc1 ;    ?></td>
        <td><?php echo   $maxc2 ;    ?></td>
		<td><?php echo   $maxc3 ;    ?></td>
		<td><?php echo   $maxc4 ;    ?></td>
		<td><?php echo   $maxc5 ;    ?></td>
      </tr>      
      
     
      
    </tbody>
  </table>
</div>

</body>
</html>

