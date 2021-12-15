<?php
session_start();
?>

<?php
require_once("include/connection.php");
?>

<?php

if (isset($_GET['guitar19'])) {

    $query19 = "SELECT guitar_name,item_code,price,guitar_location
                            FROM guitars WHERE guitar_id = 19";

    $result19 = mysqli_query($connection, $query19);

    if ($result19) {

        $drum1 = mysqli_fetch_array($result19);

        $_SESSION['drum_name'] = $drum1['guitar_name'];
        $_SESSION['item_code'] = $drum1['item_code'];
        $_SESSION['price'] = $drum1['price'];
        $_SESSION['drum_location'] = $drum1['guitar_location'];

        header("Location:product-template.php");
    }
}


if (isset($_GET['guitar20'])) {

    $query20 = "SELECT guitar_name,item_code,price,guitar_location
                            FROM guitars WHERE guitar_id = 20";

    $result20 = mysqli_query($connection, $query20);

    if ($result20) {

        $drum1 = mysqli_fetch_array($result20);

        $_SESSION['drum_name'] = $drum1['guitar_name'];
        $_SESSION['item_code'] = $drum1['item_code'];
        $_SESSION['price'] = $drum1['price'];
        $_SESSION['drum_location'] = $drum1['guitar_location'];

        header("Location:product-template.php");
    }
}


if (isset($_GET['guitar21'])) {

    $query21 = "SELECT guitar_name,item_code,price,guitar_location
                            FROM guitars WHERE guitar_id = 21";

    $result21 = mysqli_query($connection, $query21);

    if ($result21) {

        $drum1 = mysqli_fetch_array($result21);

        $_SESSION['drum_name'] = $drum1['guitar_name'];
        $_SESSION['item_code'] = $drum1['item_code'];
        $_SESSION['price'] = $drum1['price'];
        $_SESSION['drum_location'] = $drum1['guitar_location'];

        header("Location:product-template.php");
    }
}


if (isset($_GET['guitar22'])) {

    $query22 = "SELECT guitar_name,item_code,price,guitar_location
                            FROM guitars WHERE guitar_id = 22";

    $result22 = mysqli_query($connection, $query22);

    if ($result22) {

        $drum1 = mysqli_fetch_array($result22);

        $_SESSION['drum_name'] = $drum1['guitar_name'];
        $_SESSION['item_code'] = $drum1['item_code'];
        $_SESSION['price'] = $drum1['price'];
        $_SESSION['drum_location'] = $drum1['guitar_location'];

        header("Location:product-template.php");
    }
}


if (isset($_GET['guitar23'])) {

    $query23 = "SELECT guitar_name,item_code,price,guitar_location
                            FROM guitars WHERE guitar_id = 23";

    $result23 = mysqli_query($connection, $query23);

    if ($result23) {

        $drum1 = mysqli_fetch_array($result23);

        $_SESSION['drum_name'] = $drum1['guitar_name'];
        $_SESSION['item_code'] = $drum1['item_code'];
        $_SESSION['price'] = $drum1['price'];
        $_SESSION['drum_location'] = $drum1['guitar_location'];

        header("Location:product-template.php");
    }
}


if (isset($_GET['guitar24'])) {

    $query24 = "SELECT guitar_name,item_code,price,guitar_location
                            FROM guitars WHERE guitar_id = 24";

    $result24 = mysqli_query($connection, $query24);

    if ($result24) {

        $drum1 = mysqli_fetch_array($result24);

        $_SESSION['drum_name'] = $drum1['guitar_name'];
        $_SESSION['item_code'] = $drum1['item_code'];
        $_SESSION['price'] = $drum1['price'];
        $_SESSION['drum_location'] = $drum1['guitar_location'];

        header("Location:product-template.php");
    }
}


if (isset($_GET['guitar25'])) {

    $query25 = "SELECT guitar_name,item_code,price,guitar_location
                            FROM guitars WHERE guitar_id = 25";

    $result25 = mysqli_query($connection, $query25);

    if ($result25) {

        $drum1 = mysqli_fetch_array($result25);

        $_SESSION['drum_name'] = $drum1['guitar_name'];
        $_SESSION['item_code'] = $drum1['item_code'];
        $_SESSION['price'] = $drum1['price'];
        $_SESSION['drum_location'] = $drum1['guitar_location'];

        header("Location:product-template.php");
    }
}


if (isset($_GET['guitar26'])) {

    $query26 = "SELECT guitar_name,item_code,price,guitar_location
                            FROM guitars WHERE guitar_id = 26";

    $result26 = mysqli_query($connection, $query26);

    if ($result26) {

        $drum1 = mysqli_fetch_array($result26);

        $_SESSION['drum_name'] = $drum1['guitar_name'];
        $_SESSION['item_code'] = $drum1['item_code'];
        $_SESSION['price'] = $drum1['price'];
        $_SESSION['drum_location'] = $drum1['guitar_location'];

        header("Location:product-template.php");
    }
}


if (isset($_GET['guitar27'])) {

    $query27 = "SELECT guitar_name,item_code,price,guitar_location
                            FROM guitars WHERE guitar_id = 27";

    $result27 = mysqli_query($connection, $query27);

    if ($result27) {

        $drum1 = mysqli_fetch_array($result27);

        $_SESSION['drum_name'] = $drum1['guitar_name'];
        $_SESSION['item_code'] = $drum1['item_code'];
        $_SESSION['price'] = $drum1['price'];
        $_SESSION['drum_location'] = $drum1['guitar_location'];

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
    <title>Guitars | Musify</title>
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
    <section id="header">
        <div class="title">
            <input type="image" src="images/icons/Musify2.png" class="icon-img" alt="">
            <!-- search bar -->
            <form action="home.php" method="post" class="search-bar">
                <input type="text" name="search" id="search-text">
                <button type="button" class="search-btn">Search</button>
                <?php
                if (!isset($_SESSION['user_id'])) {
                    echo "<a href='login.php'><button type='button' class='log'>Log In</button></a>";
                } else {
                    echo "<a href='logout.php'><button type='button' class='log'>Log out</button></a>";
                }
                ?>
            </form>
            <header>
                <?php
                if (isset($_SESSION['user_id'])) {
                    echo "<p>Welcome </p>";
                    echo $_SESSION['first_name'];
                    echo "<a href='user-profile.php'><button>My profile</button></a>";
                }
                ?>

            </header>
            </form>
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
            <form action="guitars3.php" method="get">
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
                                <img src="images/guitars/guitar-19.jpg" class="g-card-1" alt="Denim Jeans" style="width:100%;">
                                <h1 style="margin: 0px;">Yamaha C40</h1>
                                <p class="price">Rs.15,000.00</p>
                                <p style="margin-bottom: 0px;"><button type="submit" name="guitar19" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                            </div>
                        </div>
                        <div class="item-two">
                            <div class="card-item">
                                <img src="images/guitars/guitar-20.jpg" class="g-card-1" alt="Denim Jeans" style="width:100%;">
                                <h1 style="margin: 0px;">Fender SQ VM</h1>
                                <p class="price">Rs.70,000.00</p>
                                <p style="margin-bottom: 0px;"><button type="submit" name="guitar20" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                            </div>
                        </div>
                        <div class="item-two">
                            <div class="card-item">
                                <img src="images/guitars/guitar-21.jpg" class="g-card-1" alt="Denim Jeans" style="width:100%;">
                                <h1 style="margin: 0px;">Takamine </h1>
                                <p class="price">Rs.80,000.00</p>
                                <p style="margin-bottom: 0px;"><button type="submit" name="guitar21" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                            </div>
                        </div>
                        <div></div>
                        <div class="item-two">
                            <div class="card-item">
                                <img src="images/guitars/guitar-22.jpg" class="g-card-1" alt="Denim Jeans" style="width:100%;">
                                <h1 style="margin: 0px;">FENDER SQ STRAT</h1>
                                <p class="price">Rs.45,000.00</p>
                                <p style="margin-bottom: 0px;"><button type="submit" name="guitar22" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                            </div>
                        </div>
                        <div class="item-two">
                            <div class="card-item">
                                <img src="images/guitars/guitar-23.jpg" class="g-card-1" alt="Denim Jeans" style="width:100%;">
                                <h1 style="margin: 0px;">FGX800C</h1>
                                <p class="price">Rs.65,000.00</p>
                                <p style="margin-bottom: 0px;"><button type="submit" name="guitar23" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                            </div>
                        </div>
                        <div class="item-two">
                            <div class="card-item">
                                <img src="images/guitars/guitar-24.jpg" class="g-card-1" alt="Denim Jeans" style="width:100%;">
                                <h1 style="margin: 0px;">FG-TA</h1>
                                <p class="price">Rs.120,000.00</p>
                                <p style="margin-bottom: 0px;"><button type="submit" name="guitar24" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                            </div>
                        </div>
                        <div></div>
                        <div class="item-two">
                            <div class="card-item">
                                <img src="images/guitars/guitar-25.jpg" class="g-card-1" alt="Denim Jeans" style="width:100%;">
                                <h1 style="margin: 0px;">RGX121Z</h1>
                                <p class="price">Rs.91,000.00</p>
                                <p style="margin-bottom: 0px;"><button type="submit" name="guitar25" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                            </div>
                        </div>
                        <div class="item-two">
                            <div class="card-item">
                                <img src="images/guitars/guitar-26.jpg" class="g-card-1" alt="Denim Jeans" style="width:100%;">
                                <h1 style="margin: 0px;">TRBX305</h1>
                                <p class="price">Rs.75,000.00</p>
                                <p style="margin-bottom: 0px;"><button type="submit" name="guitar26" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                            </div>
                        </div>
                        <div class="item-two">
                            <div class="card-item">
                                <img src="images/guitars/guitar-27.jpg" class="g-card-1" alt="Denim Jeans" style="width:100%;">
                                <h1 style="margin: 0px;">TRBX605FM</h1>
                                <p class="price">Rs.135,000.00</p>
                                <p style="margin-bottom: 0px;"><button type="submit" name="guitar27" class="buy-b"><i class="fas fa-shopping-bag"></i> Buy Now</button></p>
                            </div>
                        </div>

                        <div></div>
                        <div></div>
                        <div class="pagination">
                            <a href="#">&laquo;</a>
                            <a href="guitars1.php">1</a>
                            <a href="guitars2.php">2</a>
                            <a href="guitars3.php">3</a>
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