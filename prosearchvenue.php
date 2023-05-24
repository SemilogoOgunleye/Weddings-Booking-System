<?php
include('database.php');  
if (isset($_POST['capacity'])) 
  $capa = $_POST['capacity'];
  $to = $_POST['to'];
  $from = $_POST['from'];
  $grade = $_POST['grade'];
  $months = range(($from + 1), ($to));
	 {
     
      $results = '';  
       
      $sql = "SELECT venue.venue_id as id, venue.name as venue,venue.weekday_price as weekdayprice, venue.weekend_price as weekendprice, venue.licensed as licensed, catering.grade as grade, venue_booking.booking_date as bookingdate, venue.capacity as venuecapacity, catering.cost as cost, catering.grade as grade FROM venue JOIN venue_booking  ON venue.venue_id = venue_booking.venue_id
JOIN catering  ON catering.venue_id =  venue_booking.venue_id  WHERE  grade = '$grade' and capacity= '$capa' and booking_date between '$from' and '$to'   ORDER BY name";  
      $result = mysqli_query($conn, $sql);   
      $results .= '  
      <div class="table-responsive">  
           <table class="table table-bordered"><tr> <th>Venue</th> <th>Capacity</th> <th>Booking Month</th><th> Weekday Price  </th>  <th> Weekend Price  </th> <th> Licensed  </th> <th> Cost  </th>    </tr>';  
      while($data = mysqli_fetch_array($result))  
      {  
           $results .= '  
                <tr>  
                       
                     <td width="70%">'.$data["venue"].'</td>
                     <td width="70%">'.$data["venuecapacity"].'</td>
                     <td width="70%">'.$data["bookingdate"].'</td> 
                     <td width="70%">'.$data["weekdayprice"].'</td>
                     <td width="70%">'.$data["weekendprice"].'</td>
					 <td width="70%">'.$data["licensed"].'</td> 
					 <td width="70%">'.$data["cost"].'</td>   					 
                </tr>  
                
                
                ';  
      }  
      $results .= "</table></div>";  
      echo $results;  
 }  
 ?>
