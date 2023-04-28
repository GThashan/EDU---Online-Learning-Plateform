<!--connecting the mysql database-->

<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!--connecting the mysql database close-->


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
     
           <div >
              <img src="images/Aboutus.png" alt="">
           </div>
     
           <div class="content">
              <h3 style="text-align:left">why choose us?</h3>
              <p style="text-align:left">we believe in providing quality education that is accessible to everyone, no matter where they are in the world.We offers a wide range of courses that are designed to meet the needs of learners at all levels, whether you're a beginner or an advanced learner. </p>
              <a  href="courses.html" class="inline-btn" style="text-align:left">our courses</a>
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
                 <h3>+1k</h3>
                 <span>expert teachers</span>
              </div>
           </div>
     
           
        </div>
     
     </section>


     <section class="reviews">

        <h1 class="heading">student's reviews</h1>
     
        <div class="box-container">
     
           <div class="box">
              <p>I have been using this  for a while now, and I think it's an amazing platform. The courses are challenging, and the professors are knowledgeable. I appreciate that the platform offers financial aid to those who cannot afford to pay for courses.</p>
              <div class="user">
                 <img src="images/pic-2.png" alt="">
                 <div>
                    <h3>Dewa</h3>
                    <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       
                    </div>
                 </div>
              </div>
           </div>
     
           <div class="box">
              <p>I have to say that the platform is outstanding. The interface is easy to use, and the content is of high quality. I also appreciate that there is a community aspect to the platform, where you can interact with other learners from around the world.</p>
              <div class="user">
                 <img src="images/pic-4.png" alt="">
                 <div>
                    <h3>Nishalka</h3>
                    <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star-half-alt"></i>
                    </div>
                 </div>
              </div>
           </div>
     
           <div class="box">
              <p>one of the best e-learning platforms out there. The courses are comprehensive, and the assessments are challenging. I like that the platform offers a mobile app, which makes it easy to access the content on-the-go.                                  </p>
              <div class="user">
                 <img src="images/pic-8.png" alt="">
                 <div>
                    <h3>Virul</h3>
                    <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       
                    </div>
                 </div>
              </div>
           </div>
     
           <div class="box">
              <p>I really enjoyed this course and found it to be a great introduction to computer science. The instructor, John Smith, was knowledgeable and engaging, and presented the material in a clear and easy-to-understand way.</p>
              <div class="user">
                 <img src="images/pic-1.png" alt="">
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
              <p>I have had a great experience with EDU.The platform is user-friendly. The feedback from peers and instructors is helpful in improving my skills, and the platform offers career services to help me prepare for the job market.</p>
              <div class="user">
                 <img src="images/pic-6.png" alt="">
                 <div>
                    <h3>Imanya</h3>
                    <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       
                    </div>
                 </div>
              </div>
           </div>
     
           <div class="box">
              <p>I have to say that the platform is outstanding. The courses are challenging, and the assessments are helpful in reinforcing my understanding of the material.The platform also offers a credential program.                   </p>
              <div class="user">
                 <img src="images/pic-7.png" alt="">
                 <div>
                    <h3>Sohen</h3>
                    <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>

                    </div>
                 </div>
              </div>
           </div>
     
        </div>
     
     </section>

     <?php include 'components/footer.php'; ?>


    


<script src="js/script.js"></script>
</body>
</html>