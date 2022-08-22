<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['email'])){
    header('Location: login.html');
}

?>
<html>
<head>
  <title>Success page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="p-4 bg-primary text-white text-center">
  <h1>Successfully Logined !!</h1>
  <h2>Welcome !!!</h2>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="index.html">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.html">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
</li>
    </ul>
  </div>
</nav>

<div class="container mt-5">
      <h2>See the list of data in the Json file</h2>
      <?php include 'json.php';?>
      <h2>See the list of data in the table </h2>
      <?php include 'display.php';?>
</body>
</html>
