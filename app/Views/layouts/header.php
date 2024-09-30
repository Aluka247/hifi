
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/hifi/assets/css/app.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>

<?php ?>

<div class="menu-overlay"></div>
<nav class="myNavBar">

<div>
  <a class="logo-head" href="#">Video App</a>
</div>

<ul class="nav-ul">
        <li class="nav-item"><a class="nav-link active" href="/hifi/dashboard/">Dashboard</a></li>

        <li class="nav-item"><a class="nav-link" href="/hifi/users">Users</a></li>

        <li class="nav-item"><a class="nav-link" href="/hifi/videos/">Videos</a></li>

        <li class="nav-item"><a class="nav-link" href="/hifi/auth/login">Login</a></li>

        <li class="nav-item"><a class="nav-link" href="/users/contact">Contact</a></li>

        <li class="float-end">
          <span>
         <?php 
         if(isset($_SESSION['username'])){
          echo 'Welcome '. $_SESSION['username'];
         }
         ?>
          </span>
        </li>
      </ul>

      <div class="menu-bars">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>

         


</nav>






<script src="/hifi/assets/js/app.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
</body>
</html>