<?php
@include 'config.php';
if (isset($_POST['submit'])){
   $name = mysqli_real_escape_string($conn,$_POST['username']);
   $email = mysqli_real_escape_string($conn,$_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   
   $select = "SELECT * FROM register WHERE email = '$email' && password = '$pass' ";
   $result = mysqli_query($conn, $select);
   if(mysqli_num_rows($result)>0){
      $error[] = 'user already exist';
   }

};