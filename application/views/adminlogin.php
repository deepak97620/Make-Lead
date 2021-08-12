<!Doctype html>
<html lang="en">
<head>

<title>Login Page</title>
<link rel="stylesheet" href="assets2\style.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
a.nav-link{font-size : 150%;}</style>


<body> 
<nav class="navbar navbar-expand-sm bg-dark navbar-dark"  >
  <ul class="navbar-nav" >
    <li class="nav-item active">
      <a class="nav-link" href="http://localhost/codeigniter">Home</a>
      </li>
  </ul>
</nav>

<div class="col-lg-5 col-lg-offset-3">
<h1>Login Page </h1> 
<p>Fill all the Details to Login</p>
<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
<?php if(isset($_SESSION['error'])) { ?>

<div class="alert alert-danger"><?php echo $_SESSION['error'];  ?></div>
<?php 
} 
?>

   <form action="" method="POST">
   
    <div class="form-group">
    <label for="username" >Username:</label>
    <input class="form-control" name="username" id="username" type="text" value="<?php echo $_POST['username'] ?? ''; ?>">
    </div>
<br>
    

    <div class="form-group">
    <label for="password" >Password:</label>
    <input class="form-control" name="password" id="password" type="password">
    </div><br>

    
<div class="text-center">
<button class="btn btn-primary" name="adminlogin">Login</button>
</div>
</form>
</div>

</body>
</head>
</html>