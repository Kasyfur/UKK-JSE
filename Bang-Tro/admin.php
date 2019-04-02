<?php
session_start();
include 'assets/konek.php';

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
  <?php
  $sql = ("SELECT * FROM user");
  $run = mysqli_query($koneksi,$sql);
  if(mysqli_num_rows($run)>0){
    while($ambilData = mysqli_fetch_assoc($run)){
      echo'
        <tr>
          <td>'.$ambilData['id'].'</td>
          <td>'.$ambilData['username'].'</td>
          <td>'.$ambilData['email'].'</td>
          <td>'.$ambilData['password'].'</td>
        </tr>';
    }
  }
  ?>
</table>

   
</body>
</html> 
