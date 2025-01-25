<?php
session_start();
$a_email = "andre.yunizar@gmail.com";
$a_pass = password_hash("phampham06", PASSWORD_DEFAULT);


if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $email= $_POST["email"];
    $password= $_POST["password"];
if ($email == "$a_email") {
    if(password_verify($password,$a_pass)) {
    // echo"Login Berhasil";
    $_SESSION["email"] = $a_email;
    header('Location: Biodata.php');
    exit;
} else {
    echo "<script>
    alert('passwordnya salah, coba lagi deh :)');
    window.location.href = 'Login.php';
    </script>";
    exit;
}
}else{
    echo "<script>
    alert('emailnya belum terdaftar, daftar dulu gih :p');
    window.location.href = 'Login.php';
    </script>";
    exit;
}   
    echo $email." - ". $password;
   }
?>