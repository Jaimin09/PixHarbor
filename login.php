<?php
if(isset($_POST["email"])){
    session_start();

    $connection = mysqli_connect("localhost", "root", "", "pixharbor");

    $email = $_POST["email"];
    $password = $_POST["password"];

    if($connection){

        $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";

        $res=mysqli_query($connection,$query);
        if(mysqli_num_rows($res)>0){
            $user=mysqli_fetch_all($res,MYSQLI_ASSOC);
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $user[0]['name'];
            header("location: gallery.php");
        }

        else{
            echo '<script>alert("Invalid username or password")</script>'; 
        }

    }
    else{
        echo '<script>alert("Session connection not established")</script>'; 
    }
}
?>
<html>
<head>
      <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <title>
           LOGIN 
       </title>
       <style>
           @import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
           body{
               margin: 0;
               padding: 0;
               background-image: linear-gradient(rgba(0,0,0,.55),rgba(0,0,0,.55)),url("https://wallpapercave.com/wp/wp4991569.jpg");;
               background-repeat: no-repeat;
               background-size: cover;
               font-family: sans-serif;
               color: white;             
           }
     
           
           .login-box{
               width: 45%;
               border: 1px solid white;
               padding: 40px;
           }
           
           @media only screen and (max-width: 600px) {
                .login-box{
               width: 95%;
               border: 1px solid white;
               padding: 40px;
               border-radius: 5px;
           }
           }
           
           .login-box h1{
               border-bottom: 4px solid #6cffe0;
               margin-bottom: 40px;
               padding-bottom: 10px;
               
           }
           .input input{
               background: none;
                border: none;
               border-bottom: 2px solid #6cffe0;
               width: 80%;
               height: 35px;
               margin-bottom: 30px;
               color: aliceblue;
               font-size: 18px;
              
           }
           .btn button{
               align-self: center;
               background: none;
               border: 2px solid #6cffe0;
               border-radius: 5px;
               color: aqua;
               font-size: 20px;
               width: 100%;
           }
           
           .btn button:hover{
               background-color: aquamarine;
               color: black;
           }
           
           .signup{
               color: #6cffe0;
           }
           
      .navbar-nav{
              float: right;

          }
          .navbar{
                margin-top: 50px;
              margin-bottom: 50px;
          }
          .navbar-nav a{
              color: white;
              padding: 0;
          }
            .navbar-nav a:hover{
              color: black;
         
          }
           .header{
              display: inline;
          }
           
     
           
           ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: lightblue;
  opacity: 0.8; /* Firefox */
}
       </style>
       
   </head>
<body>
    
                  <nav class="navbar">
  <div class="container">
            <div class="header">

    <div class="navbar-header">
        <a class="navbar-brand" href="#"><img style="height: 50px; width: 25%; margin-top: 30px;"
                src="Images/pixharbor2.png" /></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.html">HOME</a></li>
      <li><a href="signup.html">SIGNUP</a></li>

    </ul>
    </div>
  </div>
</nav>
    
     <div class="container">
       <center>
        <div class="login-box">
            <h1> Login </h1>
            <form action="login.php" method="POST">
            <div class="input">
            <i style="padding: 5px; width:20px; text-align: center;" class="fa fa-user" aria-hidden="true"></i><input name="email" type="text" placeholder="Email" ></div>
            <div class="input">
            <i  style="padding: 5px; width:20px; text-align: center;" class="fa fa-key" aria-hidden="true"></i><input name="password" type="password" placeholder="Password"></div>
            <center><div class="btn"><button type="submit">Sign In</button></div></center>
            </form>
             <h3>Don't have an Account ?</h3>
    <a class="signup" href = "signup.html">Sign Up</a>
        </div>
        </center>
        </div>
    
  

</body>
</html>