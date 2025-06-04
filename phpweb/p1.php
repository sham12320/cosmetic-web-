<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/p1banner.css">
</head>
<body>
    <?php include("header.php");?>
    <!-- p1-banner-main-start -->
    <div class="p1-banner-main">
    <!-- p1-banner-start -->
        <div class="p1-banner">
            <img src="img/p1bannerimg.jpg" alt="">
            <!-- p1-banner-con-start -->
            <div class="p1-banner-con">
        <p>Organic Cosmetic</p>  
        <h1>Face BB CReam</h1>      
        </div>
            <!-- p1-banner-con-end -->

        </div>
    <!-- p1-banner-end -->

    </div>
    <!-- p1-banner-main-end -->

    <!-- product-detail-main-start -->
    <div class="product-detail-main">
    <!-- product-detail -start -->

   <div class="product-detail">
   <!-- product-img-start -->
       <div class="product-img">
           <img src="img/product1.jpg" alt="" class="img1">
           <!-- p1-img-border-start -->
           <div class="p1-img-border">
           <!-- p1-img-sale-start -->
               <div class="p1-img-sale"><p>SALE</p></div>
           <!-- p1-img-sale-end -->

           </div>
           <!-- p1-img-border-end -->

       </div>
   <!-- product-img-end -->
   <!-- product1-con-main-start -->
   <div class="product1-con-main">
   <!-- product1-con-start -->
       <div class="product1-con">
       <!-- product1-price-start -->
           <div class="product1-price">
               <p class="par1">$27.00</p>
               <p class="par2">$15.00</p>

           </div>
       <!-- product1-price-end -->
       <!-- product1-icon-start -->
        <div class="product1-icon">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
        </div>
       <!-- product1-icon-end -->


       <!-- product1-para-start -->
       <div class="product1-para">
     <p class="para1">false brotula viperfish tenpounder tube-eye capelin flathead central mudminnow sillago; crocodile shark featherfin knifefish piranha cod icefish bullhead, wasp fish. Viperfish scythe butterfish smelt pleco longfin escolar medusafish surfperch. Australian herring: Pacific viperfish grenadier orangestriped hatchetfish pearl danio leatherjacket. Butterflyfish crocodile shark zebra shark sergeant major peladillo ziege gunnel sea bream cavefish cobbler electric catfish medaka central mudminnow wasp fish jewel tetra.</p>
<p class="para2">Snakehead hillstream loach salmon: black dragonfish man-of-war fish flyingfish yellow-and-black triplefin, mouthbrooder, orbicular velvetfish emperor bream sprat, wrasse thorny catfish. Gurnard leatherjacket nase tenuis flagfish zebra trout collared carpetshark, yellow-and-black triplefin ayu yellow jack.</p>
       </div>
       <!-- product1-para-end -->

       <!-- tags-start -->
       <div class="tags">
           <p>TAGS :</p>
           <button>Cosmetic</button>
            
           <button>Facecare</button>
       </div>
       <!-- tags-end -->

       <!-- buynow-b-main-start -->
       <div class="buynow-b-main">
       <!-- buynow-b-start -->
           <div class="buynow-b">
           <!-- incre-start -->
           <div class="incre">
               <button class="des">-</button>
               <button class="number">1</button>
               <button class="inc">+</button>


           </div>
           <!-- incre-start -->
           <form action="detail.php" method="post">
           <button id="function2" type="submit">SHOP NOW</button>
           </form>
           </div>
       <!-- buynow-b-end -->

       </div>
              <!-- buynow-b-main-end -->



       </div>
   <!-- product1-con-end -->

   </div>
   <!-- product1-con-main-end -->


   </div>
    <!-- product-detail-end -->


    </div>
    <!-- product-detail-main-end -->
      <?php include("productdis.php");?>

<script src="index.js"></script>
<!-- <script src="product.js"></script> -->
 


</body>
</html>

<?php

if (isset($_POST["b1"])){
        echo"
        <script> 
document.querySelector('.img1').src ='./img/product1.jpg';
</script>";
}



if (isset($_POST["b2"])){
    echo"
        <script> 
document.querySelector('.img1').src ='./img/product1.jpg';
</script>";
}


if (isset($_POST["b3"])){
    echo"
        <script> 
document.querySelector('.img1').src ='./img/product2.jpg'; 
document.querySelector('.dis-con-option').style.display = 'none';


</script>";
}


if (isset($_POST["b4"])){
    echo"
        <script> 
document.querySelector('.img1').src ='./img/product2.jpg';
document.querySelector('.dis-con-option').style.display = 'none';
</script>";
}




if (isset($_POST["b5"])){
    echo"
        <script> 
document.querySelector('.img1').src ='./img/product3.jpg'; 
document.querySelector('.dis-con-option').style.display = 'none';


</script>";
}


if (isset($_POST["b6"])){
    echo"
        <script> 
document.querySelector('.img1').src ='./img/product3.jpg';
document.querySelector('.dis-con-option').style.display = 'none';
</script>";
}


if (isset($_POST["b7"])){
    echo"
        <script> 
document.querySelector('.img1').src ='./img/product4.jpg';
document.querySelector('.dis-con-option').style.display = 'none';
</script>";
}

if (isset($_POST["b8"])){
    echo"
        <script> 
document.querySelector('.img1').src ='./img/product4.jpg';
document.querySelector('.dis-con-option').style.display = 'none';
</script>";
}
 


 
if (isset($_POST["b9"])){
    echo"
        <script> 
document.querySelector('.img1').src ='./img/product5.jpg';
document.querySelector('.dis-con-option').style.display = 'none';
</script>";
}

if (isset($_POST["b10"])){
    echo"
        <script> 
document.querySelector('.img1').src ='./img/product5.jpg';
document.querySelector('.dis-con-option').style.display = 'none';
</script>";
}


if (isset($_POST["b11"])){
    echo"
        <script> 
document.querySelector('.img1').src ='./img/product6.jpg';
document.querySelector('.dis-con-option').style.display = 'none';
</script>";
}

if (isset($_POST["b12"])){
    echo"
        <script> 
document.querySelector('.img1').src ='./img/product6.jpg';
document.querySelector('.dis-con-option').style.display = 'none';
</script>";
}


if (isset($_POST["b13"])){
    echo"
        <script> 
document.querySelector('.img1').src ='./img/product7.jpg';
document.querySelector('.dis-con-option').style.display = 'none';
</script>";
}

if (isset($_POST["b14"])){
    echo"
        <script> 
document.querySelector('.img1').src ='./img/product7.jpg';
document.querySelector('.dis-con-option').style.display = 'none';
</script>";
}


if (isset($_POST["b15"])){
    echo"
        <script> 
document.querySelector('.img1').src ='./img/product4.jpg';
document.querySelector('.dis-con-option').style.display = 'none';
</script>";
}

if (isset($_POST["b16"])){
    echo"
        <script> 
document.querySelector('.img1').src ='./img/product4.jpg';
document.querySelector('.dis-con-option').style.display = 'none';
</script>";
}

?>