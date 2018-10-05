<?php include('server2.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
  
  

<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register2.php">
  	<?php include('errors2.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $username; ?>">
  	</div>
    <div class="input-group">
      <label>You are a</label>
      <select name="who" class= "drop" style="width:93%;">
  <option value="Customer">Customer</option>
  <option value="Employee">Employee</option>
  
  </select>
   <div class="input-group">
     <label>You reside in</label>
     <select name="area" class="drop" style="width:93%;">
  <option value="Saket">saket</option>
  <option value="INA">INA</option>
  <option value="Chattarpur">Chattarpur</option>
   <option value="Dwarka">Dwarka</option>
  <option value="Rajori">Rajori </option>
  <option value="janakpuri">Janakpuri</option>
   <option value="Rithala">Rithala</option>
  <option value="Pitampura">Pitampura</option>
  <option value="Inderlok">Inderlok</option>
  </select>
    </div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div>
  	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="register" a href= "cust.html">Register as customer</button>
  	</div>
    <div class="input-group">
      <button type="submit" class="btn" name="register" a href= "cust.html">Register as worker</button>
    </div>
    <p>
      Already a member? <a href="login2.php">Sign in</a>
    </p>
  	
  </form>
</body>
</html>