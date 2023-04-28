<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

$select_likes = $conn->prepare("SELECT * FROM `likes` WHERE user_id = ?");
$select_likes->execute([$user_id]);
$total_likes = $select_likes->rowCount();

$select_comments = $conn->prepare("SELECT * FROM `comments` WHERE user_id = ?");
$select_comments->execute([$user_id]);
$total_comments = $select_comments->rowCount();

$select_bookmark = $conn->prepare("SELECT * FROM `bookmark` WHERE user_id = ?");
$select_bookmark->execute([$user_id]);
$total_bookmarked = $select_bookmark->rowCount();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>


<body>

<?php include 'components/user_header.php'; ?>


    <section class="quick-select">

        <h1 class="heading">Quick options</h1>

        <div class="box-container">

         <?php
            if($user_id != ''){
         ?>



            <div class="box">
                <h3 class="title">likes and comments</h3>
                <p>total likes : <span><?= $total_likes; ?></span></p>
                <a href="#" class="inline-btn">view likes</a>
                <p>total comments : <span><?= $total_comments; ?></span></p>
                <a href="#" class="inline-btn">view comments</a>
                <p>saved playlist : <span><?= $total_bookmarked; ?></span></p>
                <a href="#" class="inline-btn">view playlist</a>
            </div>
               <?php
            }else{ 
         ?>

         <div class="box" style="text-align: center;">
         <h3 class="title">please login or register</h3>
          <div class="flex-btn" style="padding-top: .5rem;">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
      </div>
      <?php
      }
      ?>

            <div class="box">
                <h3 class="title">Top catogories</h3>
                <div class="flex">
                    <a href="#"><i class="fas fa-code"></i><span>development</span></a>
                    <a href="#"><i class="fas fa-chart-simple"></i><span>business</span></a>
                    <a href="#"><i class="fas fa-pen"></i><span>design</span></a>
                    <a href="#"><i class="fas fa-tree"></i><span>agriculture</span></a>
                    <a href="#"><i class="fas fa-language"></i><span>languages</span></a>
                    <a href="#"><i class="fas fa-cog"></i><span>software</span></a>
                    <a href="#"><i class="fas fa-vial"></i><span>science</span></a>
                </div>
            </div>

            <div class="box">
                <h3 class="title">popular topics</h3>
                <div class="flex">
                   <a href="#"><i class="fab fa-html5"></i><span>HTML</span></a>
                   <a href="#"><i class="fab fa-css3"></i><span>CSS</span></a>
                   <a href="#"><i class="fab fa-js"></i><span>javascript</span></a>
                   <a href="#"><i class="fab fa-react"></i><span>react</span></a>
                   <a href="#"><i class="fab fa-php"></i><span>PHP</span></a>
                </div>
             </div>


             <div class="box tutor">
                <h3 class="title">Become a tutor</h3>
                <p>EDU tutors create content to help students reach their learning goals.</p>
                <a href="admin/register.php" class="inline-btn">get started</a>
             </div>


        </div>
    </section>

    <section class="courses">

        <h1 class="heading">Leatest courses</h1>
     
        <div class="box-container">

        <?php
         $select_courses = $conn->prepare("SELECT * FROM `playlist` WHERE status = ? ORDER BY date DESC LIMIT 6");
         $select_courses->execute(['active']);
         if($select_courses->rowCount() > 0){
            while($fetch_course = $select_courses->fetch(PDO::FETCH_ASSOC)){
               $course_id = $fetch_course['id'];

               $select_tutor = $conn->prepare("SELECT * FROM `tutors` WHERE id = ?");
               $select_tutor->execute([$fetch_course['tutor_id']]);
               $fetch_tutor = $select_tutor->fetch(PDO::FETCH_ASSOC);
      ?>


     
           <div class="box">
              <div class="tutor">
                 <img src="uploaded_files/<?= $fetch_tutor['image']; ?>" alt="">
                 <div>
                    <h3><?= $fetch_tutor['name']; ?></h3>
                    <span><?= $fetch_course['date']; ?></span>
                 </div>
              </div>
              <img src="uploaded_files/<?= $fetch_course['thumb']; ?>" class="thumb" alt="">
              <h3 class="title"><?= $fetch_course['title']; ?></h3>
              <a href="playlist.php?get_id=<?= $course_id; ?>" class="inline-btn">view playlist</a>
           </div>

           <?php
         }
      }else{
         echo '<p class="empty">no courses added yet!</p>';

 
         
      }
      ?>
         </div>

        <div class="more-btn"  >
            <a href="courses.html" class="inline-option-btn">view more</a>
         </div>


     
     </section>



<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>