<?php
session_start();
?>
<?php
require_once("include/connection.php");
?>

<?php

if (isset($_POST['search-submit'])) {

    $text = mysqli_real_escape_string($connection, $_POST['search']);

    $query = "SELECT file_location FROM search
                WHERE file_name = '%{$text}%'";

    $result = mysqli_query($connection, $query);

    if ($result) {

        if (mysqli_num_rows($result) == 1) {

            $search = mysqli_fetch_assoc($result);

            header("Location:{search}");
        }
    }
}
?>

<?php

if (isset($_GET['search-submit'])) {

    $search = mysqli_real_escape_string($connection, $_GET['search-submit']);

    $query = "SELECT file_location FROM search WHERE file_name LIKE '%{$search}%'";

    $result = mysqli_query($connection, $query);

    if ($result) {

        header("Location:'{$query}'");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Musify</title>
    <link rel="icon" href="images/icons/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://kit.fontawesome.com/97d053d395.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <style>
        body {
            background: Linear-gradient(-45deg, #0E7AEF, #EE7752, #23A6D5, dodgerblue, #4C89EA, #289CB8, #02739F, #2471A3, #0CA6B5, #148E9A, #0381B2, #15BFD0, #05A1DF, #1191B9, #2471A3, #0E7AEF, #19A9D1);

            background-size: 400% 400%;
            position: relative;
            animation: change 5s ease-in-out infinite;
        }

        @keyframes change {
            0% {
                background-position: 0 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0 50%;
            }
        }
    </style>
    <style>
        <?php require "CSS/style.css" ?>
    </style>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
</head>

<body>
    <!-- header section -->

    <section id=" header">
        <div class="title">
            <div class="heading-bar">
                <div class="heading-item">
                    <input type="image" src="images/icons/Musify2.png" class="icon-img" alt="">

                </div>
                <div class="heading-item">
                    <form action="home.php" method="get" class="search-bar">
                        <input type="text" name="search" id="search-text" placeholder="Search items" autofocus>
                        <button type="submit" name="search-submit" class="search-btn">Search</button>
                </div>
                <div class="heading-item">
                    <?php
                    if (!isset($_SESSION['user_id'])) {
                        echo "<a href='login.php'><button type='button' class='log'>Log In</button></a>";
                    } else {
                        echo "<a href='logout.php'><button type='button' class='log'>Log out</button></a>";
                    }
                    ?>
                </div>
            </div>
            <!-- search bar -->



            <header>
                <?php
                if (isset($_SESSION['user_id'])) {
                    echo "<p>Welcome </p>";
                    echo $_SESSION['first_name'];
                    echo "<a class='log' href='user-account.php?user_id={$_SESSION['user_id']}'><button>My profile</button></a>";
                }
                ?>

            </header>
        </div>
    </section>
    <!-- navigation bar -->
    <section id="navigation-bar">
        <div class="nav-bar">
            <ul type="none">
                <li class="nav-start"><a aria-current="page" href="home.php">Home</a></li>
                <li><a aria-current="page" href="guitars1.php">Products</a></li>
                <li><a aria-current="page" href="music-lessons.php">Lessons</a></li>
                <li><a href="return.php">Returns</a></li>
                <li><a aria-current="page" href="contact-us.php">Contact Us</a></li>
                <li class="last"><a aria-current="page" href="about-us.php">About Us</a></li>
                <!-- <li class="last"><a aria-current="page" href="login.php">Log In</a></li> -->


            </ul>
        </div>
    </section>

    <!-- Enter your code from hear -->
    <section id="home-image">
        <!-- <div class="background-icon-image">
            <img src="images/background/background-3.jpg" alt="background-image" srcset="" class="background-image">

            <div class="animation">
                <h1 class="Musify-name my-element">Musify</h1>
                <h1 class="Music-center-name my-element">Music Center</h1>
                <p class="theme my-element">Largest online music store in Sri Lanka</p>
            </div>
        </div> -->

        <div class="container">
            <img src="images/background/background-3.jpg" alt="Snow" class="background-image">

            <div class="centered">
                <h1 class="Musify-name my-element">Musify</h1>
                <h1 class="Music-center-name my-element">Music Center</h1>
                <p class="theme my-element">Largest online music store in Sri Lanka</p>
            </div>
        </div>

        <div class="icons container">
            <div class="icon-items">
                <a href="guitars1.php"><img src="images/guitars/icon-image-guitar.jfif" alt="icon-image-guitar" class="icon-image-guitar" srcset=""></a>

            </div>
            <div class="icon-items">
                <a href="drums1.php"><img src="images/drums/image-icons-drums.webp" alt="icon-image-drum" class="icon-image-drum" srcset=""></a>

            </div>
            <div class="icon-images">
                <a href="keyboards1.php"><img src="images/keyboards/images-icons-keyboard.jfif" alt="icon-image-keyboard" class="icon-image-keyboard" srcset=""></a>

            </div>
        </div>
    </section>

    <hr style="width: 1322px;">

    <section id="top-brand">
        <a href="top.html" style="text-align: center; text-decoration:none">
            <h1 class="top-brand">Top Brands</h1>
        </a>

        <!-- display items -->

    </section>

    <section id="item-display">
        <div class="new-items">
            <h1 class="new-arrivals">New Arrivals</h1>

            <h1 style="padding-left: 90px;">Guitars</h1>
            <div style="margin-top: 0px;" class="all-products-div">
                <div class="item-grid">
                    <div>
                        <div class="card-item">
                            <img src="images/home/guitar-11.jpg" class="g-card-1" alt="guitar-1" id="guitar-1" style="width:100%;">
                            <h1 style="margin: 0px;">Takamine GN93CE NAT</h1>
                            <p class="price">Rs.80,000.00</p>
                            <p style="margin-bottom: 0px;"><button type="button" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                        </div>
                    </div>
                    <div>
                        <div class="card-item">
                            <img src="images/home/guitar-8.jpg" class="g-card-1" alt="guitar-1" id="guitar-1" style="width:100%;">
                            <h1 style="margin: 0px;">TRBX304</h1>
                            <p class="price">Rs.105,000.00</p>
                            <p style="margin-bottom: 0px;"><button type="button" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                        </div>
                    </div>
                    <div>
                        <div class="card-item">
                            <img src="images/home/guitar-15.jpg" class="g-card-1" alt="guitar-1" id="guitar-1" style="width:100%;">
                            <h1 style="margin: 0px;">AM PRO STRAT</h1>
                            <p class="price"> Rs.330,000.00</p>
                            <p style="margin-bottom: 0px;"><button type="button" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                        </div>
                    </div>
                    <div>
                        <div class="card-item">
                            <img src="images/home/guitar-19.jpg" class="g-card-1" alt="guitar-1" id="guitar-1" style="width:100%;">
                            <h1 style="margin: 0px;">Yamaha C40</h1>
                            <p class="price">Rs.15,000.00</p>
                            <p style="margin-bottom: 0px;"><button type="button" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- drums items -->

            <h1 style="padding-left: 90px;">Drums</h1>
            <div style="margin-top: 0px;" class="all-products-div">
                <div class="item-grid">
                    <div>
                        <div class="card-item">
                            <img src="images/home/drums-5.jpg" class="g-card-1" alt="guitar-1" id="guitar-1" style="width:100%;">
                            <h1 style="margin: 0px;">Yamaha Stage Custom</h1>
                            <p class="price">Rs.380,000.00</p>
                            <p style="margin-bottom: 0px;"><button type="button" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                        </div>
                    </div>
                    <div>
                        <div class="card-item">
                            <img src="images/home/drums-4.jpg" class="g-card-1" alt="guitar-1" id="guitar-1" style="width:100%;">
                            <h1 style="margin: 0px;">Yamaha Rydeen</h1>
                            <p class="price">Rs.250,000.00</p>
                            <p style="margin-bottom: 0px;"><button type="button" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                        </div>
                    </div>
                    <div>
                        <div class="card-item">
                            <img src="images/home/drums-11.jpg" class="g-card-1" alt="guitar-1" id="guitar-1" style="width:100%;">
                            <h1 style="margin: 0px;">Pearl Export Exx725</h1>
                            <p class="price">Rs.325,000.00</p>
                            <p style="margin-bottom: 0px;"><button type="button" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                        </div>
                    </div>
                    <div>
                        <div class="card-item">
                            <img src="images/home/drums-10.jpg" class="g-card-1" alt="guitar-1" id="guitar-1" style="width:100%;">
                            <h1 style="margin: 0px;">Mapex Prodigy</h1>
                            <p class="price">Rs.220,000.00</p>
                            <p style="margin-bottom: 0px;"><button type="button" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- keyboard items -->

            <h1 style="padding-left: 90px;">Keyboard</h1>
            <div style="margin-top: 0px;" class="all-products-div">
                <div class="item-grid">
                    <div>
                        <div class="card-item">
                            <img src="images/home/keyboard-19.jpg" class="g-card-1" alt="guitar-1" id="guitar-1" style="width:100%;">
                            <h1 style="margin: 0px;">Clavia Nord 49-Key</h1>
                            <p class="price">Rs.200,000.00</p>
                            <p style="margin-bottom: 0px;"><button type="button" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                        </div>
                    </div>
                    <div>
                        <div class="card-item">
                            <img src="images/home/keyboard-7.jpg" class="g-card-1" alt="guitar-1" id="guitar-1" style="width:100%;">
                            <h1 style="margin: 0px;">PSRE463 Keyboard</h1>
                            <p class="price">Rs.56,000.00</p>
                            <p style="margin-bottom: 0px;"><button type="button" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                        </div>
                    </div>
                    <div>
                        <div class="card-item">
                            <img src="images/home/keyboard-9.jpg" class="g-card-1" alt="guitar-1" id="guitar-1" style="width:100%;">
                            <h1 style="margin: 0px;">PA-1000</h1>
                            <p class="price">Rs.18,000.00</p>
                            <p style="margin-bottom: 0px;"><button type="button" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                        </div>
                    </div>
                    <div>
                        <div class="card-item">
                            <img src="images/home/keyboard-4.jpg" class="g-card-1" alt="guitar-1" id="guitar-1" style="width:100%;">
                            <h1 style="margin: 0px;">Roland Go 61 Key</h1>
                            <p class="price">Rs.250,000.00</p>
                            <p style="margin-bottom: 0px;"><button type="button" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section id="top-brand">
        <h1 class="top-brand">Top Brands</h1>

        <!-- display items -->

    </section>


    <!-- footer section -->

    <section id="footer">

        <div class="row">
            <hr>
            <ul class="footer-ul">
                <li class="card">
                    <h2>Sales & Marketing</h2>
                    <p>Hotline - (011) 2 688591</p>
                    <p>Email - info@musifymusic.lk</p>
                    <p>Fax - (011) 2 495811</p>
                    <p>Adress - 12, Ward place, Colombo 7.</p>
                </li>

                <li class="card">
                    <h2>Servicing & Repairs</h2>
                    <p>Tel - (011) 2 679822</p>
                    <p>Hotline - (011) 5 960768</p>
                    <p>Fax - (011) 2 679822</p>
                    <p>Email - service@musifymusic.lk</p>
                </li>

                <li class="contact card">
                    <h2>Satisfaction Guaranteed</h2>
                    <p>Not completely satisfied with your purchase? You may return it within 30 days from the date of purchase</p>

                </li>

                <!-- payment cards -->
                <li class="card " style="padding-right: 0px;">
                    <form action="" class="card-image">
                        <input type="image" class="visa" src="images/icons/visa.ico" alt="visa">
                        <input type="image" class="visa" src="images/icons/amrican-express.ico" alt="american-express">
                        <input type="image" class="master-card" src="images/icons/master-card.ico" alt="master card">
                    </form>
                </li>

            </ul>
        </div>

    </section>
    <!-- social media section -->
    <section>
        <div class="row1">
            <div action="" class="social-items">
                <a href="http://facebook.com"><img src="images/icons/5293-facebook_102565.ico" alt="facebook" class="icon"></a>
                <a href="home.php"><img src="images/icons/google_icon-icons.com_62736.ico" alt="google" class="icon"></a>
                <a href="http://www.instagram.com/"><img src="images/icons/Instagram_icon-icons.com_66804.ico" alt="instagram" class="icon"></a>
                <a href="http://twitter.com"><img src="images/icons/Twitter_icon-icons.com_66803.ico" alt="twitter" class="icon"></a>

            </div>
        </div>
        <div class="row1">
            <p class="text">CopyWrite© 2021 Musify Music Center All rights reserved</p>
            <!-- <ul type="none" class="text">
                <li>CopyWrite© </li>
                <li>2021 Musify Music Center</li>
                <li> All rights reserved</li>
            </ul> -->
        </div>
    </section>
    <script src="js/script.js"></script>
</body>

</html>