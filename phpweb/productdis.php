<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/des.css">
</head>
<body>
  
<!-- dis-main-start -->
    <div class="dis-main">
    <!-- dis-start -->
        <div class="dis">
        <!-- dis-button-main-start -->
            <div class="dis-button-main">
            <!-- dis-button-start -->
                <div class="dis-button">
                    <button class="b1  ">DESCRIBTION</button>
                      
                        <button class="b2   " >REVIEW</button>
                     
 
                </div>
            <!-- dis-button-end -->

            </div>
        <!-- dis-button-main-end -->

        <!-- dis-con-start -->
        <div class="dis-con  ">
            <p class="dis-con-pa">False brotula viperfish tenpounder tube-eye capelin flathead central mudminnow sillago; crocodile shark featherfin knifefish piranha cod icefish bullhead, wasp fish. Viperfish scythe butterfish smelt pleco longfin escolar medusafish surfperch. Australian herring: Pacific viperfish grenadier orangestriped hatchetfish pearl danio leatherjacket. Butterflyfish crocodile</p>
            <!-- dis-con-option-start -->
            <div class="dis-con-option">
                <div class="option1">
                <i class="fa-solid fa-circle-check"></i>
                    <p>Frilled shark ground shark livebearer cutthroat trout</p>
                </div>

                <div class="option1">
                <i class="fa-solid fa-circle-check"></i>
                    <p>Tonguefish devil ray smalleye squaretail dogfish</p>
                </div>

                <div class="option1">
                <i class="fa-solid fa-circle-check"></i>
                    <p>Porcupinefish warty angler zebra turkeyfish</p>
                </div>
            </div>
            <!-- dis-con-option-end -->
            <!-- more-de-start -->
            <div class="more-de">
                <!-- more-de1-main-start -->
                <div class="more-de1-main">
                <!-- more-de1-start -->
                    <div class="more-de1"> 
                    <p>WEIGHT</p>
                    <p>2 kg</p>
                    </div>
                <!-- more-de1-end -->

                </div>
                <!-- more-de1-main-end -->

                <!-- more-de2-main-start -->
                <div class="more-de2-main">
                <!-- more-de1-start -->
                    <div class="more-de2"> 
                    <p>DIMENSIONS</p>
                    <p>2 × 4 × 5 cm</p>
                    </div>
                <!-- more-de2-end -->

                </div>
                <!-- more-de2-main-end -->

            </div>
            <!-- more-de-end -->


        </div>
        <!-- dis-con-end -->


        </div>
    <!-- dis-end -->

    </div>
<!-- dis-main-end -->





<!-- review-main-start -->

<div class="review-main remove2">
<!-- review-start -->
    <div class="review">
    <!-- customer-start -->
    <div class="customer">
    <!-- name-start -->
        <div class="name">
        <!-- pic-start -->
        <div class="pic">
                <img src="img/reviewpic.jpg" alt="">
                <!-- rating-con-start -->
                <div class="rating-con">
                <!-- rating-start -->
<div class="rating">
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
</div>
                <!-- rating-end -->
                <p>John Doe</p>

                </div>
                <!-- rating-con-end -->

            </div>
        <!-- pic-end -->

        <p class="cus-re">Duckbill gizzard shad redmouth whalefish yellowtail barracuda convict cichlid; saw shark yellowfin surgeonfish? Silver dollar salamanderfish longfin</p>
<p class="date">JANUARY 14, 2021</p>

 
        </div>
    <!-- name-end -->

    </div>
    <!-- customer-end -->


    <!-- revew-form-start -->
    <div class="revew-form">
<p class="Add">Add a review</p>
<p class="email">Your email address will not be published. Required fields are marked* </p>

 
<form  method="post">
    <textarea type="text" name="revew" id="re" placeholder="Your review"></textarea>
    <br>
    <input type="text" name="name" id="na" placeholder="Your name">
    <br>
    <input type="text" name="email" id="em" placeholder="Your email">
    <br>
    <button type="submit" id="function2" name="sub">SUBMIT</button>


</form>


<!-- <button class="c">click</button> -->
    </div>
    <!-- revew-form-end -->



    </div>
<!-- review-end -->

</div>
<!-- review-main-end -->
<script src="pro.js"></script>

<!-- <script src="m.js"></script> -->
 
</body>
</html>

<?php
 
    $host ="localhost";
    $user = "root";
    $password = null;
    $dbname = "perfume";
    
    $con =new mysqli($host,$user,$password,$dbname); 
    
     
    
    if(isset($_POST["sub"])){
    
    
     
    
        $re = $_POST["revew"];
        $name = $_POST["name"];
        $em = $_POST["email"];
       
    $re=$con->query("INSERT INTO  reviews (re, name, email) VALUES ('$re','$name','$em'  )") ;
    
    echo "<script>
    alert('Review successful');
    
</script>";
 
    
     
    
        
    }


     
  

 
?>