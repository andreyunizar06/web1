<!DOCTYPE html>
<?php
     session_start();
     if(!isset($_SESSION['email'])){
     header('Location: Login.php');
     }
          $teks = "HALOOOOO, SELAMAT DATANG !!!";
     ?>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biodata</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
        body{
            background-color: #c6e2ef;
        }
    </style>
    </head>

<body>
     <style>
    
    .marquee {
        overflow: hidden;
        white-space: nowrap;
        position: relative;
        width: 50%; 
        margin: 20px auto; 
        background-color:rgb(200, 247, 255);
        border: 1px solid #ccc;
        padding: 10px; 
        box-shadow: 0 4px 6px rgb(255, 255, 255);
    }

    
    .marquee span {
        display: inline-block;
        padding-left: 100%;
        animation: moveText 6s linear infinite;
    }

    
    @keyframes moveText {
        0% {
            transform: translateX(100%);
        }
        100% {
            transform: translateX(-100%);
        }
    }
</style>
</head>
<body>
<div class="marquee">
    <span><?php echo $teks; ?></span>
</div>
     
<div class="container-fluid">
    <div class="text-center px-4 py-5">
     <img src="assets/kucing.jpg" width="100" height="100">

    

     <h1 class="fw-bold mt-3">Biodata Kamu</h1>
     <p>
        Nama : M Andre Yunizar<br>
        Umur : 19 tahun<br>
        Hobi : vibin with spotify
     </p>
     <a href="Logout.php" class="btn btn-light">
        <i class="fa fa-sign-out" aria-hidden="true"></i>
         Log out
     </a>
     
    </div>
</div>
</body>
    
</html>
