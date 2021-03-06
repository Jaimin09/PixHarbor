<?php
session_start();
setcookie("user_name", "PixHarbor", time()+120,'/');

?>

<html>
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>
          GALLERY
      </title> 
      <style>

          .header{
              display: inline;
          }
          .navbar-nav{
              float: right;

          }
          .navbar{
                margin-top: 70px;
          }
          .navbar-nav a{
              color: white;
          }
            .navbar-nav a:hover{
              color: black;
          }
         
      
          .foot i{
              color: skyblue;
              font-size: 34px;
              margin: 10px;
          }
           .foot i:hover{
              color: white;
               transition: 0.3s;
          }
          .foot{
              color: white;
              font-size: 16px;
          }
            .foot:hover{
              color: black;
          }
          
             body{
               margin: 0;
               padding: 0;
               background-color: black;
               background-repeat: no-repeat;
               background-size: cover;
               font-family: sans-serif;
               color: white;             
           }
          
          .post{
           border: 1px solid #e3e6ea;
    text-align: center;
           padding: 19px;
       }
       .post:hover{
           box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
           transition: 0.3s;
       }
       .post:hover > .btnrm {
              color: white;
               background-color: skyblue;
           transition: 0.3s;
       }
       .btnrm{
           border-radius: 50px;
           padding-top: 15px;
           padding-bottom: 15px;
           background-color: #30383b;
           color: white;
           margin-bottom: 30px;
       }
       .btnrm:hover{
               color: white;
               background-color: skyblue; 
                transition: 0.3s;
           }
      
    
       </style>
   </head>
    <body>
           <nav class="navbar">
  <div class="container">
      <div class="header">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img style="height: 50px; width: 25%; margin-top: 30px;" src="Images/pixharbor2.png"/></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="gallery.php">HOME</a></li>
      <li><a href="display_cart.php">CART</a></li>
      <li><a href="profile.php">PROFILE</a></li>
      <li><a href="logout.php">LOGOUT</a></li>


    </ul>
    </div>
  </div>
</nav>
    
   <div class="container" style="margin-top:60px; text-align: center;">

    <h1>Hi <?php echo $_SESSION["name"]; ?>!</h1> 


       <h2 style="font-size: 43px;
           
               color: #1e2528;
               line-height: 65px; margin-bottom: 26px;">
              CATEGORIES
       </h2>
       <p style="color: white; font-size: 16px;">
           We provide images of following 3 categories. Our team is also planning to add more categories.
       </p>
       
       <div class="row" style="margin-top: 60px;">
      <div class="col-sm-4">
          <article class="post">
             <img src="https://i.pinimg.com/564x/2f/21/3c/2f213c35c1c8225dc4b309f5e38c5d61.jpg" style="width: 100%; height: auto; display: block;">
             <h4 style="margin-top: 30px;margin-bottom: 30px;">
                <a style="color: #263a41;
    font-size: 22px; font-weight: bold; font-family: rufina;">Travel</a> 
             </h4>
            <p style="font-size: 14px; color: gray; margin-bottom: 50px; margin-left: 18px; margin-right: 18px;">Travel is the movement of people between distant geographical locations. It can be done by foot or vehicles with or without luggage.</p> 
            <a href="travel_images.php" class="btn btnrm"><b>VIEW IMAGES</b></a> 
          </article>
      </div>
      <div class="col-sm-4">
          <article class="post">
             <img src="https://i2.wp.com/shop.truefitness.com/wp-content/uploads/2020/03/Quickfit.jpg?resize=500%2C500&ssl=1" style="width: 100%; height: auto; display: block;">
             <h4 style="margin-top: 30px;margin-bottom: 30px;">
                <a style="color: #263a41;
    font-size: 22px; font-weight: bold; font-family: rufina;">Fitness</a> 
             </h4>
            <p style="font-size: 14px; color: gray; margin-bottom: 50px; margin-left: 18px; margin-right: 18px;">Physical fitness is a state of health and well-being and the ability to perform aspects of sports,
            occupations and daily activities. </p> 
            <a href="fitness_images.php" class="btn btnrm"><b>VIEW IMAGES</b></a> 
              
          </article>
      </div>
      <div class="col-sm-4">
          <article class="post">
             <img src="https://www.wallpapertip.com/wmimgs/44-449281_custom-wallpaper-for-offices-wall-wallpaper-for-office.jpg" style="width: 100%; height: auto; ">
             <h4 style="margin-top: 30px;margin-bottom: 30px;">
                <a style="color: #263a41;
    font-size: 22px; font-weight: bold; font-family: rufina;">Work</a> 
             </h4>
            <p style="font-size: 14px; color: gray; margin-bottom: 50px; margin-left: 18px; margin-right: 18px;">To do something which needs physical or mental effort, in order to earn money or to achieve something.</p> 
            <a href="work_images.php" class="btn btnrm"><b>VIEW IMAGES</b></a> 
          </article>
      </div>
  </div>      
</div>
       

       
       <div class="container-fluid foot" style="background-color: black; text-align: center; padding: 50px;">
           <a href="https://www.linkedin.com/in/shreyash-kadam-8a9b41198"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          <a href="https://www.facebook.com/shtrokes_139-108439647264662"></a> <i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="https://www.instagram.com/jaiminpatel_009/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="https://twitter.com/?lang=en-in"><i class="fa fa-twitter" aria-hidden="true"></i></a>
           
       </div>
       
        
    </body>
    <footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </footer> 
</html>