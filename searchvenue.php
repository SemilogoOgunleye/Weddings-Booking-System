<?php
include 'database.php';
session_start();
	
	if($_SESSION['user'] != "Active" ){
		
		echo "<script>alert('Access Denied!'); location.href='wedding.php';</script>";
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>21COA123</title>
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
    <div class="container">
	<p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    
				 <div class="col-sm-8"><h3 class="text-primary">Welcome  <?php echo $_SESSION['email']?></h3>
			
			
			 
                </div>
            </div>
<!--pagination  ends--------------------->				
			
			<?php

$limit = 5;
$sql = "SELECT
  count(venue.name)  
FROM venue
JOIN venue_booking
  ON venue.venue_id = venue_booking.venue_id
JOIN catering
  ON catering.venue_id =  venue_booking.venue_id;";  
$rs_result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit); 
?>
			
			
	<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                   <div class="col-sm-6">
				   <form action="">
                     <div class="form-group">
							<label>Date From</label>
							<input type="number" id="from"  name="from" class="form-control" required>
						</div>

                     <div class="form-group">
							<label>Date To</label>
							<input type="number" id="to" name="to" class="form-control" required>
					</div>
                    <div class="form-group">
							<label>Venue Capacity</label>
							<input type="number" id="capacity" name="capacity" class="form-control" required>
					</div>
                    <div class="form-group">
							<label>Catering Grade</label>
							<input type="number" id="grade" name="grade" class="form-control" required>
					</div>
 
                     <div class="form-group">
					<button type="button" class="btn btn-info" id="viewsearch">SEARCH</button>
					</div> 




				   </form>
				   
				   
										
					</div>
					
					
                </div>
            </div>
			<div id="target-content">loading...</div>
            
			<div class="clearfix">
               
					<ul class="pagination">
                    <?php 
					if(!empty($total_pages)){
						for($i=1; $i<=$total_pages; $i++){
								if($i == 1){
									?>
								<li class="pageitem active" id="<?php echo $i;?>"><a href="JavaScript:Void(0);" data-id="<?php echo $i;?>" class="page-link" ><?php echo $i;?></a></li>
															
								<?php 
								}
								else{
									?>
								<li class="pageitem" id="<?php echo $i;?>"><a href="JavaScript:Void(0);" class="page-link" data-id="<?php echo $i;?>"><?php echo $i;?></a></li>
								<?php
								}
						}
					}
								?>
					</ul>
               </ul>
            </div>
        </div>
    </div>		
			
<!--pagination  ends--------------------->			
			
					</tbody>
			</table>
			
        </div>
    </div>
	<!-- Add Modal HTML -->

	<!-- Edit Modal HTML -->

	<!-- Delete Modal HTML -->
	
</body>


 

<script>  
 $(document).ready(function(){  
      $('#viewsearch').click(function(){  
           var to = $('#to').val(); 
           var from = $('#from').val(); 
           var grade = $('#grade').val(); 
           var capacity = $('#capacity').val();
             if (to == '')
			 {
				alert('Enter a valid Month'); 
			 }
			 else if(capacity == '')
			 {
				alert('Enter a value for capacity');  
			 }
			 else if(grade == '')
			 {
				alert('Enter a value for grade');  
			 }
			 else if(to == '')
			 {
				alert('Enter a value for To');  
			 }
          	else  
			{   
           $.ajax({  
                url:"prosearchvenue.php",  
                method:"post",  
                data:{to:to,  
				     from:from,  
				     grade:grade,
                     capacity:capacity},
                	
                success:function(data)
				
				{  
                     $('#leader_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           }); 
	  }		   
      });  
 });  
 </script>

<script>
	$(document).ready(function() {
		$("#target-content").load("pagination.php?page=1");
		$(".page-link").click(function(){
			var id = $(this).attr("data-id");
			var select_id = $(this).parent().attr("id");
			$.ajax({
				url: "pagination.php",
				type: "GET",
				data: {
					page : id
				},
				cache: false,
				success: function(dataResult){
					$("#target-content").html(dataResult);
					$(".pageitem").removeClass("active");
					$("#"+select_id).addClass("active");
					
				}
			});
		});
    });
</script>
</html>    
<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">×</button>  
                     <h4 class="modal-title">Venue Details</h4>  
                </div>  
                <div class="modal-body" id="leader_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  