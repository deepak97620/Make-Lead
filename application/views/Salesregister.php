<!Doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Register Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
a.nav-link{font-size : 150%;}</style>



<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="http://localhost/codeigniter">Home</a>
    </li>
    <li class="nav-item active">      
<a class="nav-link" href="<?php echo base_url(); ?>index.php/auth2/saleslogin">Login</a>
    </li>  
  </ul>
</nav>
<div class="col-lg-6 col-lg-offset-5"> 
<h1>Sales Registration </h1>

<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
<?php if(isset($_SESSION['success'])) { ?>

<div class="alert alert-success"><?php echo $_SESSION['success'];  ?></div>
<?php 
} 
?>
 
   <form action="" method="POST">
   <div class="form-group">
    <label for="name" >Name:</label>
    <input class="form-control" name="name" id="name" type="text" placeholder="Enter Your Name" value="<?php echo $_POST['name'] ?? ''; ?>">
    </div>

   <div class="form-group">
    <label for="username" >Username:</label>
    <input class="form-control" name="username" id="username" type="text" placeholder="Enter your username" value="<?php echo $_POST['username'] ?? ''; ?>">
    </div>
<!--
    <div class="form-group">
    <label for="email" >Email:</label>
    <input class="form-control" name="email" id="email" type="text"  placeholder="abc@mail.com" >
    </div>
   
   
  
<div class="form-group">
    <label for="password" >Confirm Password:</label>
    <input class="form-control" name="password" id="password" type="password"  placeholder="Insert the same Password as above">
    </div>

    <div class="form-group">
    <label >Designation:</label>
 <select class="form-control" id="designation" name="designation">
 <option>Select</option>
 <option value="Web Developer">Web Developer</option>
 <option value="Sales">Sales</option>
 </select>
    </div> -->
    
    <div class="form-group">
    <label for="password" >Password:</label>
    <input class="form-control" name="password" id="password" type="password"  placeholder="Password field">
   </div>

<div class="form-group">
    <label for="phone" >Phone:</label>
    <input class="form-control" name="phone" id="phone" type="text"  placeholder="Contact No." value="<?php echo $_POST['phone'] ?? ''; ?>">
    </div>
   
<div class="text-center">
<button class="btn btn-primary" name="salesregister">Register</button>
</div>
</form>
</div>



</body>
</head>
</html>
</html>