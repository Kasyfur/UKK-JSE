<?php
require 'assets/konek.php'

$username="";
$email="";
$password="";
$error=array();

if (isset($_POST['register'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];

if (empty($username)) {echo"Username Kosong";}
if (empty($email)) {echo"Email Kosong";}
if (empty($pass)) {echo"Password Kosong";}

$user_check = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1  ";
$run = mysqli_query($konek,$user_check);
$user = mysqli_fetch_assoc($run);

if ($user){
  if($user['username']===$username){
    ($error[] = "Username telah digunakan");
  }
  if($user['email']===$email){
    ($error[] = "Email telah digunakan");
  }
  foreach($errors as $error){
    echo $error, '<br>';
  }
}

if (count($errors)==0)
  $password = md5($pass);
  $waktu = date("Y-m-d H:i:s");
  $query = "INSERT INTO user (id, username, email, password, waktu) VALUES ('', '$username', '$email', '$password')";
  mysqli_query($konek,$query);
  $_SESSION['username'] = $username;
  header('location: index.html');

}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 60%;
    position: absolute;
    left:300px;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

div {
    background-color: #000000;
    width: 10%;
    height: 100px;
}

.sidenav {
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="#">Akun Pelanggan</a>
  <a href="#">Pesanan</a>
</div>

<table>
  <tr>
    <th>Id</th>
    <th>Username</th>
    <th>Email</th>
    <th>Password</th>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>

   
</body>
</html> 
