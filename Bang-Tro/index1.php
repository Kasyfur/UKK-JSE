<?php
session_start();
require 'assets/konek.php';

if(isset($_POST['register'])){
    $user = null;
    $pass = null;
    $email = null;
    $user = $_POST['userRegis'];
    $pass = $_POST['passRegis'];
    $email = $_POST['emailRegis'];
    $error = 0;

    if (empty($user)){echo "username kosong";}
    if (empty($pass)){echo "password kosong";}
    if (empty($user)){echo "username kosong";}

    if(!empty($user . $pass . $email)){
    
    $user_check = "SELECT * FROM user WHERE username='$user' OR email='$email' LIMIT 1";
    $run = mysqli_query($koneksi,$user_check);
    $user_row = mysqli_fetch_assoc($run);
        if ($user_row){
            if($user_row['username']===$user){
                echo "Username telah diambil";
                $error = 1;
            }
            if($user_row['email']===$email){
                echo "Email telah digunakan";
                $error = 1;
            }
        }
        if ($error == 0){
            if($user. $pass . $email != null){
            $query = "INSERT INTO user (id, username, email, password) VALUES ('', '$user', '$email', '$pass')";
            if(mysqli_query($koneksi,$query)){
                $_SESSION['username'] = $user;
                echo "register berhasil";
            }else{
                echo "register gagal";
            }}
        }
    }
}


    if(isset($_POST['login'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];

        $loginQuery = ("SELECT * FROM user WHERE username = '$user'");
        $loginRun = mysqli_query($koneksi,$loginQuery);
    }

//login//

if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['pass'];
    
    if (empty($user)) {("Username kosong");}
    if (empty($pass)) {("Password kosong");}
    if (!empty($user . $pass)){
        $pass = md5($pass);
        $query  = ("SELECT * FROM user WHERE username='$user' AND pass='$pass' LIMIT 1");
        $run = mysqli_query($conn, $query);
        $rows = mysqli_fetch_assoc($run);
        if ($rows > 0){
            $_SESSION['uid'] = $rows["id"];
            echo $_SESSION['uid'];
            //header('location:home.php');
        }else{
            echo "username atau password salah";
        }
    }
}
//End-Login//

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Bang-Tro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
            
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="assets/ceklogin.php" method="post" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="index1.php" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form method="post" autocomplete="on"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="userRegis" name="userRegis" required="required" type="text" placeholder="mysuperusername690" /><?phpvalue="$user"?>
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailRegis" name="emailRegis" required="required" type="email" placeholder="mysupermail@mail.com"/><?phpvalue="$email"?>
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passRegis" name="passRegis" required="required" type="password" placeholder="eg. X8df!90EO"/><?phpvalue="$pass"?>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" name="register" value="register"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>