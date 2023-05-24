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
	<script type="text/javascript">
function do_login()
{
 var email=$("#email").val();
 var username=$("#username").val();
 if(email!="" && username!="")
 {
  $("#loading_spin").css({"display":"block"});
  $.ajax
  ({
  type:'post',
  url:'prowedding.php',
  data:{
   dologin:"dologin",
   email:email,
   username:username
  },
  success:function(response) {
  if(response=="success")
  {
    window.location.href="searchvenue.php";
  }
  else
  {
    $("#loading_spin").css({"display":"none"});
    alert("Wrong Details");
  }
  }
  });
 }

 else
 {
  alert("Please Fill All The Details");
 }

 return false;
}
</script>
	</head>
<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Welcome to Wedding venue where all wedding venue is available at a glance</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <!--<form id="login-form" class="form" action="" method="post" onsubmit="return do_login();>-->
                            <form method="post" action="prowedding.php" onsubmit="return do_login();">
							<h3 class="text-center text-info">To get started, enter your name and email address</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Name:</label><br>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="text" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span></span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                               <input type="submit" name="login" value="DO LOGIN" id="login_button">
 
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info"></a>
                            </div>
                        </form>
						<p id="loading_spin"><img src="image/loader1.gif"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<style>
#loading_spin
{
 display:none;
}
	
	</style>
</body>
<style>


body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}


</style>


</html>

