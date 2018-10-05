<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '1234', 'waste');

 

// REGISTER USER
if (isset($_POST['register'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $who = mysqli_real_escape_string($db, $_POST['who']);
  $area = mysqli_real_escape_string($db, $_POST['area']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");}
  if(!isset($_POST['who'])){ array_push($errors, "You forget to select who you are");}
  if(!isset($_POST['area'])){ array_push($errors, "You forget to select where you reside");}


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password, who,area) 
  			  VALUES('$username', '$email', '$password','$who','$area')";
  	if(mysqli_query($db, $query)){
      echo "new record";
    } else echo "error";
    $a= "aa";
    $b="bb";
    $c="cc";
    $d="admin";
    
  	$_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    if($c===$username){
      
    header('location: complain.html');

    }
    else if($b==$username){
    header('location: productbought.php');}
    else if($a==$username){
    header('location: mainpage.php');}
  
  else if($d==$username){
    header('location: admin.php');}
  }
}
//log in from login page
if(isset($_POST['login'])){
  $username=mysqli_real_escape_string($db,$_POST['username']);
  $password=mysqli_real_escape_string($db,$_POST['password']);

  if (empty($username)) {
    array_push($errors,"Username is required" );

  }
  if (empty($password)) {
    array_push($errors,"Password is required" );

  }
  if(count($errors)==0){
    $password = md5($password);
    $query="SELECT* FROM users WHERE username='$username' AND password='$password'";
    $result= mysqli_query($db,$query);
    if(mysqli_num_rows($result)==1){
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: index2.php');


    }
    else{
      array_push($errors,"wrong username/password combination");
      header('location:login2.php');
    }
  }
}

//logout
if(isset($_GET['logout'])){
  session_destroy();
  unset($_SESSION['username']);
  header('location: login2.php');
}
?>