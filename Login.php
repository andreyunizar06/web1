<!DOCTYPE html>
<?php
     session_start();
     if(isset($_SESSION['email'])){
     header('Location: Biodata.php');
     }
     ?>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
        body{
            height: 100vh;
            display: flex;
            align-items: center;
            background-color: #fffdf6;
        }
        .form-login {
            max-width: 280px;
            margin: auto;
        }       
    </style>
    </head>

<body>
<div class="container-fluid">
  <form class="form-login" method="post" action="proses.php">
  <h3 class="fw-normal text-center">Login Akun</h3>
  
  <div class="form-floating mb-2">
    <input type="text" name="email" class="form-control" placeholder="E-mail" required>
    <label>E-mail</label>
  </div>

  <div class="form-floating mb-2">
    <input type="password" name="password" class="form-control" placeholder="Password" required>
    <label>Password</label>
  </div>
  <button class="btn btn-dark w-100 mb-2" type="submit">
  <i class="fa fa-user-plus" aria-hidden="true"></i>
    Login
      </button>
  <p class="text-center mb-2">kaga punya akun?<a href="Daftar.php"> daftar gih </a></p>
  <p class="text-muted text-center">&copy; Pham2025</p>
  </form>
</div>
</body>
    
</html>