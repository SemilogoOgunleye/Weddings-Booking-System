<?php
session_start();
if(isset($_POST['dologin']))
{

 $email=$_POST['email'];
 $username=$_POST['username'];
 
 if($username  != "")
 {
  $_SESSION['email']=$email;
  $_SESSION['user']="Active";
  echo "success";
 }
 else
 {
  echo "fail";
 }
 exit();
}
A?>