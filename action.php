<?php 
include('connection.php');
$uname = $_GET['name'];
$mobile = $_GET['mobile'];
$email = $_GET['email'];
$company = $_GET['cname'];
$nationality = $_GET['nation'];
$insert_q = "INSERT INTO customers values('','$uname','$mobile','$email','$company','$nationality')";

if(mysqli_query($connection,$insert_q))
    {
    	echo " Data submitted sucessfully!";
    }
      else
      {
        $submit_error = '<b class="text-danger text-center>You are not able to submit. please try again.</b>';
      }
 ?>