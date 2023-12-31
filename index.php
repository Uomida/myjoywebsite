<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Joy</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="product/logo.png">
    <script src="cart.js" async></script>
</head>
<body>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

    <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>
        <a href="#" class="logo">My Joy<span>Flower Shop</span></a>
        <nav class="navbar">
            <a href="#">HOME</a>
            <a href="#about">ABOUT</a>  
            <a href="#shop">SHOP</a>
            <a href="#contact">CONTACT</a>
            <a href="index.php?logout='1'">LOGOUT</a>
        </nav>
       
    </header>
    <section class="home">

      <div class="content">
            <h3>Freshest Flowers  <br><span>in Town</span></h3>
            <p>Welcome to our flower shop, where beauty blossoms! We are dedicated to providing you with the freshest, 
                most vibrant blooms that will enchant your senses and brighten your day. From classic roses to exotic orchids, 
                our floral arrangements are carefully crafted by our skilled florists to create stunning masterpieces that evoke 
                emotions and capture the essence of nature. Whether you're celebrating a special occasion, sending a heartfelt 
                message, or simply indulging in some self-love, we have a wide selection of flowers and gifts to suit every taste
                and budget. With our exceptional customer service and attention to detail, we strive to exceed your expectations
                and leave you with a memorable and delightful experience. So come in and let us help you create a beautiful moment
                that will last a lifetime.</p>
                <a href="#shop" class="btn">shop now</a>
        </div>
        <div class="media-icons">
            <a href="https://www.facebook.com/profile.php?id=100091649344036"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/my_joy_flowershop/"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com/myjoyflowershop"><i class="fab fa-twitter"></i></a>
        </div>

    </section>
    <section class="about" id="about">
        <h1 class="heading"><span>about</span>&nbsp;us</h1>
    <div class="row">
        <div class="video-container">
            <video src="files/about.mp4" loop autoplay muted></video>
            <h3>Fragance that trancends.</h3>
           </div>
            <div class="content">
                <h3>Fragance that smells like your first love.</h3>
            <p>Welcome to our flower shop! We are a team of passionate and dedicated florists who share a love for nature and the beauty of flowers. We believe that flowers have the power to brighten up any day and make a meaningful impact on people's lives. That's why we are committed to providing you with the freshest and most vibrant blooms, carefully selected from local and international sources.

                Our journey began with a simple idea: to create a place where people can connect with nature and experience the magic of flowers. We started small, with a small storefront and a handful of loyal customers. But over the years, our business has grown, and we have become a trusted and well-respected name in the flower industry.
                
                At our shop, you'll find a wide range of floral arrangements, from classic bouquets to contemporary designs. Whether you're looking for a romantic gesture or a thoughtful gift, we have something for every occasion. Our florists are experts in their craft and take pride in creating stunning and unique arrangements that reflect your personal style and vision.
                 
                We are also committed to sustainability and eco-friendliness, and we source our flowers from farms that share our values. We believe in giving back to the community and supporting local causes, and we often donate flowers to local charities and events.
                
                At our flower shop, we value our customers and strive to provide exceptional service and quality products. We believe that every flower has a story to tell, and we are here to help you create beautiful moments that last a lifetime. Thank you for choosing us as your florist, and we look forward to serving you!           <ul class="info-list">
           </p>
           <a href="#" class="btn">learn more</a>
        </div>
    </div>
    </section>
    <section class="icons-container">
        <div class="icons">
          <img src="Images/deliver.png" alt="">
          <div class="info">
            <h3>Deliver <span>Nationwide</span></h3>
          </div>
        </div>
        <div class="icons">
            <img src="Images/money.png" alt="">
            <div class="info">
              <h3>Holiday <span>Discount</span></h3>
            </div>
          </div>
          <div class="icons">
            <img src="Images/gift.png" alt="">
            <div class="info">
              <h3>Free <span>Gifts</span></h3>
            </div>
          </div>
          <div class="icons">
            <img src="Images/flower.png" alt="">
            <div class="info">
              <h3>Best Quality <span> Products</span></h3>
            </div>
          </div>
    </section>
    <section class="shop" id="shop">
        <h1 class="heading">Shop</h1>
    </section>
    <section class="container content-section">
        <br><br><br>
        <h2 class="section-header">Flower Bouquet</h2>
        <div class="shop-items">
            <div class="shop-item">
                <span class="shop-item-title">Sunrise Love</span>
                <img class="shop-item-image" src=" product/prod1.png">
                <div class="shop-item-details">
                    <span class="shop-item-price">Php 1299.00</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>
            <div class="shop-item">
                <span class="shop-item-title">Burning Love</span>
                <img class="shop-item-image" src=" product/prod2.png">
                <div class="shop-item-details">
                    <span class="shop-item-price">Php 1199.00</span>
                    <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                </div>
            </div>
            <div class="shop-item">
                <span class="shop-item-title">First Love</span>
                <img class="shop-item-image" src=" product/prod3.png">
                <div class="shop-item-details">
                    <span class="shop-item-price">Php 1499.00</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>
            <div class="shop-item">
                <span class="shop-item-title">Our Youth</span>
                <img class="shop-item-image" src=" product/prod4.png">
                <div class="shop-item-details">
                    <span class="shop-item-price">Php 1699.00</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>
            <div class="shop-item">
                <span class="shop-item-title">For Her</span>
                <img class="shop-item-image" src=" product/prod5.png">
                <div class="shop-item-details">
                    <span class="shop-item-price">Php 1299.00</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>
            <div class="shop-item">
                <span class="shop-item-title">Sunset Glory</span>
                <img class="shop-item-image" src=" product/prod6.png">
                <div class="shop-item-details">
                    <span class="shop-item-price">Php 1299.00</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>
        </div>
    </section>
    <section class="container content-section">
        <h2 class="section-header">Promo Bundles</h2>
        <div class="shop-items">
            <div class="shop-item">
                <span class="shop-item-title">First Date</span>
                <img class="shop-item-image" src=" product/prod7.png">
                <div class="shop-item-details">
                    <span class="shop-item-price">Php 1799.00</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>
            <div class="shop-item">
                <span class="shop-item-title">Surprise</span>
                <img class="shop-item-image" src=" product/prod8.png">
                <div class="shop-item-details">
                    <span class="shop-item-price">Php 2399.00</span>
                    <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                </div>
            </div>
            <div class="shop-item">
                <span class="shop-item-title">Love Song</span>
                <img class="shop-item-image" src=" product/prod9.png">
                <div class="shop-item-details">
                    <span class="shop-item-price">Php 2199.00</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>
            <div class="shop-item">
                <span class="shop-item-title">Birthday Present</span>
                <img class="shop-item-image" src=" product/prod10.png">
                <div class="shop-item-details">
                    <span class="shop-item-price">Php 1799.00</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>
            <div class="shop-item">
                <span class="shop-item-title">My Love</span>
                <img class="shop-item-image" src=" product/prod11.png">
                <div class="shop-item-details">
                    <span class="shop-item-price">Php 1899.00</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>
            <div class="shop-item">
                <span class="shop-item-title">Marry Me</span>
                <img class="shop-item-image" src=" product/prod12.png">
                <div class="shop-item-details">
                    <span class="shop-item-price">Php 1499.00</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>
        </div>
    </section>
    <section class="container content-section">
        <h2 class="section-header">CART</h2>
        <div class="cart-row">
            <span class="cart-item cart-header cart-column">ITEM</span>
            <span class="cart-price cart-header cart-column">PRICE</span>
            <span class="cart-quantity cart-header cart-column">QUANTITY</span>
        </div>
        <div class="cart-items">
        </div>
        <div class="cart-total">
            <strong class="cart-total-title">Total</strong>
            <span class="cart-total-price">Php &nbsp;0</span>
        </div>
        <center>
        <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
</center>
    </section>
    
<section class="contact" id="contact">
    <div class="container">
    <h1 class="heading"><span>contact </span>us</h1>
    <div class="row">
    <form name="form" method="POST">
    <input type="text" placeholder="name" name = "uname" class="box" required>
    <input type="email" placeholder="email" name = "email" class="box" required>
    <input type="number" placeholder="number" name = "cpnumber" class="box" required>
    <input type="text" placeholder="address" name = "addr" class="box" required>
    <textarea name="messages" class="box" id="" placeholder="message" cols="20" rows="8" required></textarea>
    <input type="submit" value="send message" class="btn">
    </form>
    <div class="image">
        <img src="product/backdrop.png" alt="">
    </div>
</div>
</div>
</section>
<footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">My Joy Flowershop</h3>
                <ul class="nav footer-nav">
                    <li>
                        <a href="https://twitter.com/myjoyflowershop" target="_blank">
                            <img src="Images/Twitter.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/my_joy_flowershop/" target="_blank">
                            <img src="Images/Instagram.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/profile.php?id=100091649344036" target="_blank">
                            <img src="Images/Facebook.png">
                        </a>
                    </li>
                </ul>
            </div>
        </footer>

</body>

</html>