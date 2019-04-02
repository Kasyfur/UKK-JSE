
<?php
session_start();
require 'konek.php';


    $user = $_POST['username'];
    $pass = $_POST['password'];
    
    if (empty($user)) {("Username kosong");}
    if (empty($pass)) {("Password kosong");}
    if (!empty($user . $pass)){
        $pass = $pass;
        $query  = ("SELECT * FROM user WHERE email='$user' AND password='$pass' LIMIT 1");
        $run = mysqli_query($koneksi, $query);
        $rows = mysqli_fetch_assoc($run);
        if ($rows > 0){
            $_SESSION['uid'] = $rows["id_user"];
            $_SESSION['username'] = $rows["username"];
            echo $_SESSION['uid'];
            header('location:../index.php');
        }else{
            echo "username atau password salah";
        }
    }


?>