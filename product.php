<?php

include('server/connection.php');

if(isset($_GET['product_id'])){

  $product_id = $_GET['product_id'];

     $stmt = $conn->prepare("SELECT * FROM products WHERE product_id = ?");
     $stmt->bind_param("i",$product_id);

     $stmt->execute();


     $product = $stmt->get_result();





}else{
  header('location: index.php');
}





?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container">
      <img src="assets/imgs/logo1.jpg" height="50" width="100" alt="Logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav-btns" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="shop.html">Shop</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.html#Categories">Category</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact Us</a>
          </li>

          <li class="nav-item">
            <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
            <a href="account.html"><i class="fa-solid fa-user"></i></a>
          </li>
          
          

      </div>
    </div>
  </nav>

      <section class="single-product my-5 pt-5">
        <div class="row mt-5">

          <?php
            while($row = $product->fetch_assoc()){
          ?>

            <div class="col-lg-5 col-md-6 col-sm-12">
                <img class="img-fluid w-100 pb-1" src="assets/imgs/<?php echo $row['product_image']; ?>" id="mainImg">
                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="assets/imgs/<?php echo $row['product_image']; ?>" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="assets/imgs/<?php echo $row['product_image2']; ?>" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="assets/imgs/<?php echo $row['product_image3']; ?>" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="assets/imgs/<?php echo $row['product_image4']; ?>" width="100%" class="small-img" alt="">
                    </div>
                </div>
            </div>

            

            <div class="col-lg-6 col-md-12 col-sm-12">
                <h6>Carpet</h6>
                <h3 class="py-4"><?php echo $row['product_name']; ?></h3>
                <h2>Rs.<?php echo $row['product_price'];  ?></h2>
                <input type="number" value="1"/>
                <button class="buy-btn">Add To Cart</button>
                <h4 class="mt-5 mb-5">Product Details</h4>
                <span><?php echo $row['product_description']; ?></span>
            </div>
            <?php  }  ?>
        </div>
      </section>

      <section id="related-products" class="my-5 pt-5">
        <div class="container text-center mt-5 py-5">
          <h3>Related Products</h3>
          <hr>
        </div>

        <div class="row mx-auto container">
          <div class="product text-center col-lg-3 col-md-4 col-sm-6">
            <img class="img-fluid mb-3"  src="assets/imgs/sofa2.jpg" alt="Sofa">
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>

            </div>
            <h5 class="p-name">Sofa</h5>
            <h4 class="p-price">Rs.35000</h4>
            <button class="buy-btn">Buy Now</button>
          </div>

          <div class="product text-center col-lg-3 col-md-4 col-sm-6">
            <img class="img-fluid mb-3"  src="assets/imgs/carpet2.jpg" alt="Sofa">
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>

            </div>
            <h5 class="p-name">Carpet</h5>
            <h4 class="p-price">Rs.5000</h4>
            <button class="buy-btn">Buy Now</button>
          </div>

          <div class="product text-center col-lg-3 col-md-4 col-sm-6">
            <img class="img-fluid mb-3"  src="assets/imgs/table4.jpg" alt="Sofa">
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>

            </div>
            <h5 class="p-name">Table</h5>
            <h4 class="p-price">Rs.3000</h4>
            <button class="buy-btn">Buy Now</button>
          </div>

          <div class="product text-center col-lg-3 col-md-4 col-sm-6">
            <img class="img-fluid mb-3"  src="assets/imgs/wall3.jpg" alt="Sofa">
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>

            </div>
            <h5 class="p-name">Wall Mirror</h5>
            <h4 class="p-price">Rs.3000</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
        </div>
        </section>









      <!--footer-->
      <footer class="mt-5 py-5">
        <div class="row container mx-auto pt-5">
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <img src="assets/imgs/logo1.jpg" height="60px" width="100px" alt="">
            <p class="pt-3">
              We provide the best products for affordable prices
            </p>
          </div>

          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
           <h5 class="pb-2">
            Featured
           </h5>
           <ul class="text-uppercase">
              <li><a href="">Sofa</a></li>
              <li><a href="">Table</a></li>
              <li><a href="">Carpet</a></li>
              <li><a href="">Wall</a></li>
              <li><a href="">Lamp</a></li>
              <li><a href="">Chair</a></li>
           </ul>
          </div>

          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-2">
              Contact Us
            </h5>
            <div>
              <h6 class="text-uppercase">Address</h6>
              <p>Samakhushi,Kathmandu</p>
            </div>
            <div>
              <h6 class="text-uppercase">Phone</h6>
              <p>+977 9841491234</p>
            </div>
            <div>
              <h6 class="text-uppercase">Email</h6>
              <p>halo1@email.com</p>
            </div>
          </div>
          
          <div class="footer-two col-lg-3 col-md-6 col-sm-12">
            <div class="row container mx-auto">
              <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
              <a href="#"><i class="fab fa-facebook"></i></a><br>
              <a href="#"><i class="fab fa-instagram"></i></a><br>
              <a href="#"><i class="fab fa-twitter"></i></a><br>
              </div>
            </div>
          </div>  

        </div>

        <div class="copyright mt-5">
          <div class="row container mx-auto">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
              <img src="assets/imgs/payment.png" height="77%" width="88%"  alt="">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4 text-nowrap mb-2">
              <p>Halo @ 2024 All Rights Reserved</p>
            </div>
            

          </div>

        </div>

      </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
      var mainImg = document.getElementById("mainImg");
      var smallImg = document.getElementsByClassName("small-img");

      for(let i=0;i<4;i++){
        smallImg[i].onclick = function(){
        mainImg.src = smallImg[i].src;
      }
      }

      
    

    </script>  

  </body>
</html>