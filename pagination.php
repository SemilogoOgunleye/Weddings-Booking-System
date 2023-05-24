<?php
include('database.php');
$limit = 5;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT venue.venue_id as id, venue.name as venue, catering.grade as grade, venue_booking.booking_date as bookingdate, venue.capacity as venuecapacity FROM venue JOIN venue_booking  ON venue.venue_id = venue_booking.venue_id
JOIN catering  ON catering.venue_id =  venue_booking.venue_id ORDER BY name ASC LIMIT $start_from, $limit";  
$rs_result = mysqli_query($conn, $sql);  
?>
<table class="table table-bordered table-striped">  
<thead>  
<tr>  
<th>Name of Venue</th>  
<th>Catering Grade</th> 
<th>Booking date</th> 
<th>Venue Capacity</th>  
 
</tr>  
</thead>  
<tbody>  
<?php  
while ($row = mysqli_fetch_array($rs_result)) {  
?>  
            <tr>  
            <td><?php echo $row["venue"]; ?></td> 
			<td><?php echo $row["grade"]; ?></td>
            <td><?php echo $row["bookingdate"]; ?></td> 
			<td><?php echo $row["venuecapacity"]; ?></td> 
			
			
			
			
            		
            </tr>  
<?php  
};  
?>  
</tbody>  
</table>  