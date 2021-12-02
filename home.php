<?php

session_start();
if (!isset($_SESSION['login'])) {
    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="Assets/home.css">
    <title>Warisanify</title>
</head>

<body>
    <!-- Hero section START -->
    <section class="hero">
        <nav class="navbar">
            <div class="logo">
                <a href="home.php">Warisanify</a>
            </div>

            <ul class="nav-list">
                <li><a href="home.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="#">Theater</a></li>
                <li><a href="#">About</a></li>
                <li><a href="app/logout.php">Logout</a></li>
            </ul>
        </nav>

        <div class="hero-text">
            <h1>Lorem Ipsum dolor</h1>
            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</h3>
        </div>

    </section>
    <!-- Hero section END -->


    <!-- Best Seller Section START -->
    <section class="best-seller">
        <h1>Best Seller</h1>
        <div class="card-container">
            <div class="card">
                <div class="card-image">
                    <img src="Assets/pict/best-seller-1.png" alt="">
                </div>

                <div class="card-content">
                    <h3>Lorem Ipsum</h3>
                    <p>Category name</p>
                    <div class="card-button-action">
                        <a href=""><button class="add-to-cart">Add to Cart</button></a>
                        <a href=""><button class="details">Details</button></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="Assets/pict/best-seller-1.png" alt="">
                </div>

                <div class="card-content">
                    <h3>Lorem Ipsum</h3>
                    <p>Category name</p>
                    <div class="card-button-action">
                        <a href=""><button class="add-to-cart">Add to Cart</button></a>
                        <a href=""><button class="details">Details</button></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="Assets/pict/best-seller-1.png" alt="">
                </div>

                <div class="card-content">
                    <h3>Lorem Ipsum</h3>
                    <p>Category name</p>
                    <div class="card-button-action">
                        <a href=""><button class="add-to-cart">Add to Cart</button></a>
                        <a href=""><button class="details">Details</button></a>
                    </div>
                </div>
            </div>
        </div>
        <a href="Shop.html"><button class="show-more">Show more</button></a>
    </section>
    <!-- Best Seller Section END -->


    <!-- About Section START -->
    <section class="about">
        <h1>About Warisanify</h1>
        <a href="About.html"><button>View Here</button></a>
    </section>
    <!-- About Section END -->


    <!-- Membership Section Start -->

    <section class="membership">
        <h1>Upgrade to Member<span>ship</span></h1>
        <hr>
        <<<<<<< HEAD <p>Get serial key<br> to unlock special deals<br> and free delivery on Central Java</p> <button class="upgrade-membership">Upgrade now</button>
            =======
            <p>Get serial key<br> to unlock special deals<br> and free delivery on Central Java</p> <button class="upgrade-membership">Upgrade now</button>
            >>>>>>> 53a934d91b5e6ae02714ff4034162389deaf86e7
    </section>

    <!-- Membership Section END -->




    <!-- Offering Section START -->

    <section class="offering">
        <h1 class="offering-head">Offering</h1>

        <div class="offering-container">
            <div class="offering-side">
                <h1>Special Deals For You</h1>
            </div>
            <div class="offering-head">
                <ul>
                    <li><a href="">New Account</a></li>
                    <li><a href="">Membership</a></li>
                </ul>
            </div>
            <div class="offering-main">
                <h1>main</h1>
            </div>
        </div>
    </section>

    <!-- Offering Section END -->


    <!-- Footer Section START -->

    <section class="footer">
        <div class="logo">
            <a href="">Warisanify</a>
        </div>

        <div class="footer-container">
            <div class="footer-container-left">
                <div class="contact-us">
                    <h2>Contact Us</h2>
                    <p>warisanify@gmail.com</p>
                </div>
                <div class="find-us">
                    <h2>Find Us</h2>
                    <ul>
                        <li>Warisanify.id</li>
                        <li>Warisanify.id</li>
                        <li>Warisanify.id</li>
                        <li>Warisanify.id</li>
                    </ul>
                </div>
            </div>

            <hr>

            <div class="footer-container-right">
                <div class="feature">
                    <h2>Warisanify</h2>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Shop</a></li>
                        <li><a href="">About</a></li>
                    </ul>
                </div>
                <div class="special-thanks">
                    <h2>Special Thanks</h2>
                    <p>Lorem Ipsum</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section END -->





    <<<<<<< HEAD <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
        </script>
        =======
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        >>>>>>> 53a934d91b5e6ae02714ff4034162389deaf86e7
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
        <script>
            $('.slider').slick({
                slidesToShow: 3,
                slidesToScroll: 3,
                centerMode: true

            });
        </script>
</body>

</html>