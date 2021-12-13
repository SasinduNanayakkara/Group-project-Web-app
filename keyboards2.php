<?php
session_start();
?>

<?php
require_once("include/connection.php");
?>

<?php
if (isset($_GET['keyboard10'])) {

    $query10 = "SELECT keyboard_name,item_code,price,keyboard_location
                                FROM keyboards WHERE keyboard_id = 10";

    $result10 = mysqli_query($connection, $query10);

    if ($result10) {

        $drum1 = mysqli_fetch_array($result10);

        $_SESSION['drum_name'] = $drum1['keyboard_name'];
        $_SESSION['item_code'] = $drum1['item_code'];
        $_SESSION['price'] = $drum1['price'];
        $_SESSION['drum_location'] = $drum1['keyboard_location'];

        header("Location:product-template.php");
    }
}

if (isset($_GET['keyboard11'])) {

    $query11 = "SELECT keyboard_name,item_code,price,keyboard_location
                                FROM keyboards WHERE keyboard_id = 11";

    $result11 = mysqli_query($connection, $query11);

    if ($result11) {

        $drum1 = mysqli_fetch_array($result11);

        $_SESSION['drum_name'] = $drum1['keyboard_name'];
        $_SESSION['item_code'] = $drum1['item_code'];
        $_SESSION['price'] = $drum1['price'];
        $_SESSION['drum_location'] = $drum1['keyboard_location'];

        header("Location:product-template.php");
    }
}

if (isset($_GET['keyboard12'])) {

    $query12 = "SELECT keyboard_name,item_code,price,keyboard_location
                                FROM keyboards WHERE keyboard_id = 12";

    $result12 = mysqli_query($connection, $query12);

    if ($result12) {

        $drum1 = mysqli_fetch_array($result12);

        $_SESSION['drum_name'] = $drum1['keyboard_name'];
        $_SESSION['item_code'] = $drum1['item_code'];
        $_SESSION['price'] = $drum1['price'];
        $_SESSION['drum_location'] = $drum1['keyboard_location'];

        header("Location:product-template.php");
    }
}

if (isset($_GET['keyboard13'])) {

    $query13 = "SELECT keyboard_name,item_code,price,keyboard_location
                                FROM keyboards WHERE keyboard_id = 13";

    $result13 = mysqli_query($connection, $query13);

    if ($result13) {

        $drum1 = mysqli_fetch_array($result13);

        $_SESSION['drum_name'] = $drum1['keyboard_name'];
        $_SESSION['item_code'] = $drum1['item_code'];
        $_SESSION['price'] = $drum1['price'];
        $_SESSION['drum_location'] = $drum1['keyboard_location'];

        header("Location:product-template.php");
    }
}

if (isset($_GET['keyboard14'])) {

    $query14 = "SELECT keyboard_name,item_code,price,keyboard_location
                                FROM keyboards WHERE keyboard_id = 14";

    $result14 = mysqli_query($connection, $query14);

    if ($result14) {

        $drum1 = mysqli_fetch_array($result14);

        $_SESSION['drum_name'] = $drum1['keyboard_name'];
        $_SESSION['item_code'] = $drum1['item_code'];
        $_SESSION['price'] = $drum1['price'];
        $_SESSION['drum_location'] = $drum1['keyboard_location'];

        header("Location:product-template.php");
    }
}

if (isset($_GET['keyboard15'])) {

    $query15 = "SELECT keyboard_name,item_code,price,keyboard_location
                                FROM keyboards WHERE keyboard_id = 1";

    $result15 = mysqli_query($connection, $query15);

    if ($result15) {

        $drum1 = mysqli_fetch_array($result15);

        $_SESSION['drum_name'] = $drum1['keyboard_name'];
        $_SESSION['item_code'] = $drum1['item_code'];
        $_SESSION['price'] = $drum1['price'];
        $_SESSION['drum_location'] = $drum1['keyboard_location'];

        header("Location:product-template.php");
    }
}

if (isset($_GET['keyboard16'])) {

    $query16 = "SELECT keyboard_name,item_code,price,keyboard_location
                                FROM keyboards WHERE keyboard_id = 16";

    $result16 = mysqli_query($connection, $query16);

    if ($result16) {

        $drum1 = mysqli_fetch_array($result16);

        $_SESSION['drum_name'] = $drum1['keyboard_name'];
        $_SESSION['item_code'] = $drum1['item_code'];
        $_SESSION['price'] = $drum1['price'];
        $_SESSION['drum_location'] = $drum1['keyboard_location'];

        header("Location:product-template.php");
    }
}

if (isset($_GET['keyboard17'])) {

    $query17 = "SELECT keyboard_name,item_code,price,keyboard_location
                                FROM keyboards WHERE keyboard_id = 17";

    $result17 = mysqli_query($connection, $query17);

    if ($result17) {

        $drum1 = mysqli_fetch_array($result17);

        $_SESSION['drum_name'] = $drum1['keyboard_name'];
        $_SESSION['item_code'] = $drum1['item_code'];
        $_SESSION['price'] = $drum1['price'];
        $_SESSION['drum_location'] = $drum1['keyboard_location'];

        header("Location:product-template.php");
    }
}

if (isset($_GET['keyboard18'])) {

    $query18 = "SELECT keyboard_name,item_code,price,keyboard_location
                                FROM keyboards WHERE keyboard_id = 18";

    $result18 = mysqli_query($connection, $query18);

    if ($result18) {

        $drum1 = mysqli_fetch_array($result18);

        $_SESSION['drum_name'] = $drum1['keyboard_name'];
        $_SESSION['item_code'] = $drum1['item_code'];
        $_SESSION['price'] = $drum1['price'];
        $_SESSION['drum_location'] = $drum1['keyboard_location'];

        header("Location:product-template.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keyboards | Musify</title>
    <link rel="stylesheet" href="CSS/style.css">
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

    <link rel="icon" href="images/icons/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/97d053d395.js" crossorigin="anonymous"></script>
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


        <!-- Enter your code from hear -->

        <section id="all-products">
            <form action="keyboards2.php" method="get">
                <div class="all-products-div">
                    <div class="product-grid-div">
                        <div class="item-two">
                            <h1 style="text-align: center; color:#02739F">Categories</h1>
                            <a href="guitars1.php">
                                <h2 class="h">Guitars</h2>
                            </a>
                            <a href="drums1.php">
                                <h2 class="h">Drums</h2>
                            </a>
                            <a href="keyboards1.php">
                                <h2 class="h">Keyboard</h2>
                            </a>

                        </div>
                        <div class="item-two">
                            <div class="card-item">
                                <img src="images/keyboards/keyboard-10.jpg" class="g-card-1" alt="Denim Jeans" style="width:100%;">
                                <h1 style="margin: 0px;">MICRO KEY2-25AIR</h1>
                                <p class="price">Rs.72,000.00</p>
                                <p style="margin-bottom: 0px;"><button type="submit" name="keyboard10" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                            </div>
                        </div>
                        <div class="item-two">
                            <div class="card-item">
                                <img src="images/keyboards/keyboard-11.jpg" class="g-card-1" alt="Denim Jeans" style="width:100%;">
                                <h1 style="margin: 0px;">Yamaha PSRI400</h1>
                                <p class="price">Rs.23,000.00</p>
                                <p style="margin-bottom: 0px;"><button type="submit" name="keyboard11" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                            </div>
                        </div>
                        <div class="item-two">
                            <div class="card-item">
                                <img src="images/keyboards/keyboard-12.jpg" class="g-card-1" alt="Denim Jeans" style="width:100%;">
                                <h1 style="margin: 0px;">PSRE263 Keyboard</h1>
                                <p class="price">Rs.34,000.00</p>
                                <p style="margin-bottom: 0px;"><button type="submit" name="keyboard12" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                            </div>
                        </div>
                        <div></div>
                        <div class="item-two">
                            <div class="card-item">
                                <img src="images/keyboards/keyboard-13.jpg" class="g-card-1" alt="Denim Jeans" style="width:100%;">
                                <h1 style="margin: 0px;">Yamaha Remie E30</h1>
                                <p class="price">Rs.37,000.00</p>
                                <p style="margin-bottom: 0px;"><button type="submit" name="keyboard13" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                            </div>
                        </div>
                        <div class="item-two">
                            <div class="card-item">
                                <img src="images/keyboards/keyboard-14.jpg" class="g-card-1" alt="Denim Jeans" style="width:100%;">
                                <h1 style="margin: 0px;">PA-600</h1>
                                <p class="price">Rs.95,000.00</p>
                                <p style="margin-bottom: 0px;"><button type="submit" name="keyboard14" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                            </div>
                        </div>
                        <div class="item-two">
                            <div class="card-item">
                                <img src="images/keyboards/keyboard-15.jpg" class="g-card-1" alt="Denim Jeans" style="width:100%;">
                                <h1 style="margin: 0px;">PSRI455</h1>
                                <p class="price">Rs.85,000.00</p>
                                <p style="margin-bottom: 0px;"><button type="submit" name="keyboard15" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                            </div>
                        </div>
                        <div></div>
                        <div class="item-two">
                            <div class="card-item">
                                <img src="images/keyboards/keyboard-16.jpg" class="g-card-1" alt="Denim Jeans" style="width:100%;">
                                <h1 style="margin: 0px;">PA-300</h1>
                                <p class="price">Rs.66,000.00</p>
                                <p style="margin-bottom: 0px;"><button type="submit" name="keyboard16" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                            </div>
                        </div>
                        <div class="item-two">
                            <div class="card-item">
                                <img src="images/keyboards/keyboard-17.jpg" class="g-card-1" alt="Denim Jeans" style="width:100%;">
                                <h1 style="margin: 0px;">PSRF51</h1>
                                <p class="price">Rs.120,000.00</p>
                                <p style="margin-bottom: 0px;"><button type="submit" name="keyboard17" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                            </div>
                        </div>
                        <div class="item-two">
                            <div class="card-item">
                                <img src="images/keyboards/keyboard-18.jpg" class="g-card-1" alt="Denim Jeans" style="width:100%;">
                                <h1 style="margin: 0px;">KRONOS2-61</h1>
                                <p class="price">Rs.75,000.00</p>
                                <p style="margin-bottom: 0px;"><button type="submit" name="keyboard18" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                            </div>
                        </div>
                        <div></div>
                        <div></div>
                        <div class="pagination">
                            <a href="#">&laquo;</a>
                            <a href="keyboards1.php">1</a>
                            <a href="keyboards2.php">2</a>
                            <a href="keyboards3.php">3</a>
                            <a href="#">&raquo;</a>
                        </div>

                    </div>

                </div>
            </form>
        </section>




        <!-- footer section -->
    </section>
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
            <form action="" class="social-items">
                <a href="http://facebook.com"><input type="image" src="images/icons/5293-facebook_102565.ico" alt="facebook" class="icon"></a>
                <a href="home.php"><input type="image" src="images/icons/google_icon-icons.com_62736.ico" alt="google" class="icon"></a>
                <a href="http://instergram.com"><input type="image" src="images/icons/Instagram_icon-icons.com_66804.ico" alt="instagram" class="icon"></a>
                <a href="http://twitter.com"><input type="image" src="images/icons/Twitter_icon-icons.com_66803.ico" alt="twitter" class="icon"></a>

            </form>
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