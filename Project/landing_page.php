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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Complete Responsive Product Landing Page Website Design Tutorial</title>

    <!-- google fonts css file link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/landing_style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <a href="#" class="logo">EDU</a>

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul>
            <li><a class="active" href="#home">home</a></li>
            <li><a href="#core">Features</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h1>Unlock your potential now</h1>
        <p>Our platform is designed to be flexible, and affordable, so you can learn at your own pace and on your own terms. Join us today and unlock your potential!</p>
        <a href="home.php"><button class="btn"  >start now</button></a>
    </div>

    <div class="image">
        <img src="images/Landing_page.png" alt="">
    </div>

</section>

<!-- home section ends -->

<!-- core features section starts  -->

<section class="core" id="core">

<h1 class="heading">Outstanding Core Features</h1>

<div class="row">

    <div class="image">
        <img src="images/Landing_page_features.png" alt="">
    </div>

    <div class="box-container">

        <div class="box">
            <h3> <i class="fas fa-user"></i> user friendly </h3>
            <p> we've designed our platform with user-friendliness in mind, ensuring that you can navigate the site with ease and find the courses you're interested in quickly.</p>
        </div>

        <div class="box">
            <h3> <i class="fas fa-globe"></i> Courses</h3>
            <p>we offer a wide range of courses to cater to your individual learning needs and interests. Whether you're looking to upskill in your current job, we've got you covered. </p>
        </div>

        <div class="box">
            <h3> <i class="fas fa-sync-alt"></i> unlimited updates </h3>
            <p>we're committed to providing you with the most up-to-date and relevant learning materials. That's why we offer unlimited updates to courses.</p>
        </div>

        <div class="box">
            <h3> <i class="fas fa-magic"></i> unlimited features </h3>
            <p>we're dedicated to providing you with a seamless and enriching learning experience. That's why we offer unlimited features to help you get the most out of your courses.</p>
        </div>

    </div>

</div>

</section>

<!-- core features section ends -->

<!-- about section starts  -->

<section class="about" id="about">


<div class="row">



    <div class="content">
        <h3>Welcome to our e-learning platform!</h3><br>
        <p>We are a team of passionate educators and software engineers who believe that learning should be accessible to everyone. Our mission is to provide high-quality educational resources and a user-friendly platform that helps students learn and grow.</p>
        <p> <i class="fas fa-check-circle"></i> Our platform offers a wide range of courses </p>
        <p> <i class="fas fa-check-circle"></i> We are committed to providing a user-friendly platform</p>
        <p> <i class="fas fa-check-circle"></i> Our platform offers diverse learning resources  </p>
    </div>

    <div class="image">
        <img src="images/About_landing.png" alt="">
    </div>

</div>

</section>

<!-- about section ends -->



<!-- contact section starts  -->

<section class="contact" id="contact">

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if(isset($_POST['send'])){
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $subject = htmlentities($_POST['subject']);
    $message = htmlentities($_POST['message']);

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'minurisenara@gmail.com';
    $mail->Password = 'ojbfzeibomwakltb';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress('minurisenara@gmail.com');
    $mail->Subject = ("$email ($subject)");
    $mail->Body = $message;

    

    if ($mail->send()) {
        ?>
        
        <script>
            swal({
                title: "Success!",
                text: "Message sent successfully.",
                icon: "success",
            });
            
        </script>
        <?php
    }
}
?>



<form  method="POST" >

    <input class="box" type="text" name="name" placeholder="Name">
    <input class="box" type="email" name="email" placeholder="Your Email">
    <input class="box" type="text" name="subject" placeholder="subject">

    <textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>

    <input type="submit" class="btn" value="Send Message" name="send">
    

</form>




<div class="content">

    <h3 style="color:  #0c5572;">Need Help? Don't Forget to Contact With Us</h3>
    <p style="color:  #136d91;">If you need any assistance or have any questions about our e-learning platform, please don't hesitate to contact us. Our team is always here to help and we are dedicated to ensuring that every user has a positive learning experience.</p>
    <div class="icons"> <i class="fas fa-map-marker-alt"></i> <p style="color:  #136d91;">Sabaragamuwa University of Sri Lanka, Belihuloya</p> </div>
    <div class="icons"> <i class="fas fa-globe"></i> <p style="color:  #136d91;">www.edu.com</p> </div>
    <div class="icons"> <i class="fas fa-phone"></i> <p style="color:  #136d91;">078 7531133</p> </div>

</div>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<div class="footer">

    <div class="share">
        <h3>follow us</h3>
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <h1 class="credit">created by <a href="#">Software Engineeering undergratuate</a> | all rights reserved </h1>

</div>

<!-- footer section ends -->

















<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/landing.js"></script>



</body>
</html>