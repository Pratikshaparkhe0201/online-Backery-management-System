<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">Home</a> / About </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.jpeg" alt="">
        </div>

        <div class="content">
            <h3> </h3>
            <p> </p>
            <a href="shop.php" class="btn">shop now</a>
        </div>
<div class="titlepage">
                      <h1 class="title" style="margin-top"> Amuruta Bakery In Baramati</h1><br>
     <div class="about" style="font-size:25px; font-family: serif;">
                                <p>Amuruta Bakery in Baramati is one of the leading businesses in the Bakery Product. Also known for bakery product, bakery product store  For all category products like Cake,Cookies & Biscuits  etc.</p>
                                <p> Amuruta Bakery etablished in the year 2016,It's a first biggest Bakery shop in Baramati.
                                This Shop in Baramati has a wide range of products and services to cater to the various requirements of their customers. The shop owner are polite and prompt at providing any assistance. Pay for the product or service by using any of the available modes of payment, such as Cash, G Pay, Amazon Pay, PhonePe.</p><p>This shop is open from 08:30 am - 8:30 pm</p><br><br>
              
        
        <p style="color:black; font-size: 22px;">
            Address:<br>
            AP.Baramati ,Tal-Baramati, Dist-Pune<br>
            Email:amurutabakery23@gmail.com<br>
            mobile:9172802423<br>
          </p>

    </div>

    <div class="flex">

        <div class="content">
            <h3> </h3>
            <p> </p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    

</section>




<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>