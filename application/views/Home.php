<!Doctype html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" href="assets2\cssown\style.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
</style>
<body class="body">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  
  <!-- Links -->

 
  <ul class="navbar-nav">
      <li class="nav-item">
      <div class="cmplogo">
      <img src="img/lead.png" height="25px" width="250px" alt="Image"><br><p style="color:white;">Lead Management System</p>
      </li>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <li class="nav-item">
      <a class="nav-link" href="#"  id="change">Home</a>
    </li>
    
    <li class="nav-item">
    <div class="dropdown">
      <a class="nav-link" href="#" >Admin</a>
      <div class="dropdown-content">
      
  <a href="#">Registration</a>
  <a href="<?php echo base_url(); ?>index.php/auth/adminlogin">Login</a>
  </div>
</div>
</li>

  <!--
    <li class="nav-item">
    <div class="dropdown">
      <a class="nav-link" href="#">Web Developer</a>
      <div class="dropdown-content">
  <a href="#">Registration</a>
  <a href="#">Login</a>
  </div>
</div>
 </li>
-->

    <li class="nav-item">
    <div class="dropdown">  
      <a class="nav-link" href="#">Sales</a>
      <div class="dropdown-content">
  <a href="<?php echo base_url(); ?>index.php/auth2/salesregister">Registration</a>
  <a href="<?php echo base_url(); ?>index.php/auth2/saleslogin">Login</a>
  </div>
</div>
    </li>
  </ul>
</nav>

                <!--Body-->



<div class="footer">
<p style="color:white;"><b>Address:</b>
Mumbai
</p>

</div>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</head>
