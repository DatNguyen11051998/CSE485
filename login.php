<!DOCTYPE html>
<html lang="en">
<head>
  <title>Template for an interactive web page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" 
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" 
  integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" 
  crossorigin="anonymous">
   <script src="verify.js"></script> 
</head>
<body>
	<?php include('header.php');?>
<div class="container" style="margin-top:30px">
<!-- Header Section -->
<header class="jumbotron text-center row col-sm-14"
style="margin-bottom:2px; background:linear-gradient(white, #0073e6); padding:20px;"> 
 
</header>
<!-- Body Section -->
  <div class="row" style="padding-left: 0px;">
<!-- Left-side Column Menu Section -->
 
  <!-- Validate Input -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {                                //#1
 require('process-login.php');
} // End of the main Submit conditional.
?>
<div class="col-sm-8">
<h2 class="h2 text-center">Login</h2>
<form action="login.php" method="post" name="loginform" id="loginform">
  <div class="form-group row">
    <label for="email" class="col-sm-4 col-form-label">Email Address:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="email" name="email" 
	  placeholder="Email" maxlength="30" required
	  value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" >
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-sm-4 col-form-label">Password:</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="password" name="password" 
	  placeholder="Password" maxlength="40" required
	  value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>">
	  <span>&nbsp;Between 8 and 12 characters.</span></p>
    </div>
  </div>
<div class="form-group row">
    <div class="col-sm-12">
	<input id="submit" class="btn btn-primary" type="submit" name="submit" value="Login">
    </div>
	</div>
	</form>
</div>

<!-- Right-side Column Content Section -->
<?php
 
  include('footer.php'); 
 ?>
</footer>
</div>
</body>
</html>
