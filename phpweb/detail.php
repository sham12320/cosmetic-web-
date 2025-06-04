<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/de.css">
</head>
<body>
<?php include("header.php")?> 
<?php include("banner.php")?>  
<!-- billing-start -->
<div class="billing"> 

<!-- billing details-main-start -->

<div class="billing-details-main">
<!-- billing-details-start -->
<div class="billing-details">
    <p>Billing details</p>
    <form method="post">
         <div id="name">
         <input type="text" name="frname" placeholder="First name*" class="frname">
        <input type="text" name="lastname" placeholder="Last name*" class="lastname">
         </div>
        <br>
        <input type="text" name="coun" placeholder="Country*" class="coun">
        <br>
        <input type="text" name="company" placeholder="Company name*" class="com">
        <br>
        <input type="text" name="city" placeholder="City*" class="ci">
        <br>
        <input type="text" name="email" placeholder="Email*" class="em">
        



    </form>
     
</div> 
<!-- billing-details-end -->
</div>
<!-- billing details-main-end -->




<!-- payment-main-start -->
<div class="payment-main">
<!-- payment-start -->
    <div class="payment">
    <!-- cars-total-main-start -->
        <div class="cars-total-main">
        <!-- cars-total-start -->
            <div class="cars-total">
                <p class="Cart-p1">Cart Totals</p>
                <div class="sub">
                    <p class="sub-p1">Subtotal</p>
                    <p class="sub-p2">$20.00</p>

                </div>
                <div class="sub">
                    <p class="sub-p1">Total</p>
                    <p class="sub-p2">$20.00</p>

                </div>
            </div>
        <!-- cars-total-end -->

        </div>
    <!-- cars-total-main-end -->

    <p  class="policy">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
    <form method="post" id="form2">
    <!-- Hidden inputs that will be filled by JS -->
    <input type="hidden" name="frname" id="h_frname">
    <input type="hidden" name="lastname" id="h_lastname">
    <input type="hidden" name="coun" id="h_coun">
    <input type="hidden" name="company" id="h_company">
    <input type="hidden" name="city" id="h_city">
    <input type="hidden" name="email" id="h_email">

    <button type="submit" id="function2" name="order">Place order</button>
</form>
    </div>
<!-- payment-end -->

</div>
<!-- payment-main-end -->


</div>
<!-- billing-end -->

 <script >
     document.getElementById('form2').addEventListener('submit', function (e) {
    // Copy values from visible inputs in Form 1
    document.getElementById('h_frname').value = document.querySelector( ".frname").value;
    document.getElementById('h_lastname').value = document.querySelector( ".lastname ").value;
    document.getElementById('h_coun').value = document.querySelector(".coun").value;
    document.getElementById('h_company').value = document.querySelector( ".com").value;
    document.getElementById('h_city').value = document.querySelector(".ci").value;
    document.getElementById('h_email').value = document.querySelector(".em").value;});
 </script>
</body>
</html>


<?php
 $host ="localhost";
 $user = "root";
 $password = null;
 $dbname = "perfume";
 
 $con =new mysqli($host,$user,$password,$dbname);



 
if (isset($_POST["order"])) {
    $firstname = $_POST["frname"];
    $lastname  = $_POST["lastname"];
    $country   = $_POST["coun"];
    $company   = $_POST["company"];
    $city      = $_POST["city"];
    $email     = $_POST["email"];

    $con->query("INSERT INTO orders (firstname, lastname, country, company, city, email) VALUES ('$firstname', '$lastname', '$country', '$company', '$city', '$email')");
echo "<script>
alert('order sucessfull')

</script>";
   
}
  




?>