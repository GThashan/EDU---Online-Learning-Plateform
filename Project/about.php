<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>


<body>

   <?php include 'components/user_header.php'; ?>

    <section class="about">

        <div class="row">
     
           <div class="image">
              <img src="images/About.png" alt="">
           </div>
     
           <div class="content">
              <h3>why choose us?</h3>
              <p>text text text text text text text text text text text text text text text text text text text text text text text text </p>
              <a href="courses.html" class="inline-btn">our courses</a>
           </div>
     
        </div>
     
        <div class="box-container">
     
           <div class="box">
              <i class="fas fa-graduation-cap"></i>
              <div>
                 <h3>+1k</h3>
                 <span>online courses</span>
              </div>
           </div>
     
           <div class="box">
              <i class="fas fa-user-graduate"></i>
              <div>
                 <h3>+25k</h3>
                 <span>brilliants students</span>
              </div>
           </div>
     
           <div class="box">
              <i class="fas fa-chalkboard-user"></i>
              <div>
                 <h3>+5k</h3>
                 <span>expert teachers</span>
              </div>
           </div>
     
           <div class="box">
              <i class="fas fa-briefcase"></i>
              <div>
                 <h3>100%</h3>
                 <span>job placement</span>
              </div>
           </div>
     
        </div>
     
     </section>


     <section class="reviews">

        <h1 class="heading">student's reviews</h1>
     
        <div class="box-container">
     
           <div class="box">
              <p>I really enjoyed this course and found it to be a great introduction to computer science. The instructor, John Smith, was knowledgeable and engaging, and presented the material in a clear and easy-to-understand way.</p>
              <div class="user">
                 <img src="images/pic-1.jpg" alt="">
                 <div>
                    <h3>Minuri</h3>
                    <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star-half-alt"></i>
                    </div>
                 </div>
              </div>
           </div>
     
           <div class="box">
              <p>I really enjoyed this course and found it to be a great introduction to computer science. The instructor, John Smith, was knowledgeable and engaging, and presented the material in a clear and easy-to-understand way.</p>
              <div class="user">
                 <img src="images/pic-1.jpg" alt="">
                 <div>
                    <h3>Minuri</h3>
                    <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star-half-alt"></i>
                    </div>
                 </div>
              </div>
           </div>
     
           <div class="box">
              <p>I really enjoyed this course and found it to be a great introduction to computer science. The instructor, John Smith, was knowledgeable and engaging, and presented the material in a clear and easy-to-understand way.</p>
              <div class="user">
                 <img src="images/pic-1.jpg" alt="">
                 <div>
                    <h3>Minuri</h3>
                    <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star-half-alt"></i>
                    </div>
                 </div>
              </div>
           </div>
     
           <div class="box">
              <p>I really enjoyed this course and found it to be a great introduction to computer science. The instructor, John Smith, was knowledgeable and engaging, and presented the material in a clear and easy-to-understand way.</p>
              <div class="user">
                 <img src="images/pic-1.jpg" alt="">
                 <div>
                    <h3>Minuri</h3>
                    <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star-half-alt"></i>
                    </div>
                 </div>
              </div>
           </div>
     
           <div class="box">
              <p>I really enjoyed this course and found it to be a great introduction to computer science. The instructor, John Smith, was knowledgeable and engaging, and presented the material in a clear and easy-to-understand way.</p>
              <div class="user">
                 <img src="images/pic-1.jpg" alt="">
                 <div>
                    <h3>Minuri</h3>
                    <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star-half-alt"></i>
                    </div>
                 </div>
              </div>
           </div>
     
           <div class="box">
              <p>I really enjoyed this course and found it to be a great introduction to computer science. The instructor, John Smith, was knowledgeable and engaging, and presented the material in a clear and easy-to-understand way.</p>
              <div class="user">
                 <img src="images/pic-1.jpg" alt="">
                 <div>
                    <h3>Minuri</h3>
                    <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star-half-alt"></i>
                    </div>
                 </div>
              </div>
           </div>
     
        </div>
     
     </section>



<footer class="footer">
    &copy; copyright @ 2023 by <span>Minuri Hewage</span> | all rights reserved!
</footer>



    


<script src="js/script.js"></script>
</body>
</html>