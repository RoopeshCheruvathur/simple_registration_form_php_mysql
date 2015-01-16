<?php
   // if(isset($_POST['signup'])) {
    require "dbconfig.php";
    if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = strip_tags($_POST['username']);
    $password=md5(strip_tags($_POST['password']));//md5 used for encryption.
    $repass=md5(strip_tags($_POST['repassword']));
  
    if($username==''){
    header('location:./regstr.php?err_msg=user name cant be empty');
    exit();
    }
    if(!strcmp($password,$repass)==0) {
    header('Location:./regstr.php?err_msg=password not match');
    exit();
    }
    
       $query = "select * from registration where username='$username'";
    $result = mysql_query($query);
    if (mysql_num_rows($result) >= 1) {
    //Username is taken
    header('location:regstr.php?err_msg=username already exists.');
    exit();
    }
   
    mysql_query("INSERT INTO registration(username,password) VALUES ('$username','$password')") or die("".mysql_error());
   
    echo "Register success"; //Here you can write success message or use header to redirect another page
   // header("location:userhome.php");
    }
   // }
   // else {
   // header('location:regstr.php');
   // exit();
   // }
   // ?>

