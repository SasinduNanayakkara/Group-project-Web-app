<?php
session_start();
?>

<?php
require_once("include/connection.php");
?>

<?php
$user_id = '';

if (isset($GET['user_id'])) {

    $user_id = mysqli_real_escape_string($connection, $_GET['user_id']);

    if (isset($_POST['update-password'])) {

        $new_password = mysqli_real_escape_string($connection, $_POST['new-password']);
        $con_password = mysqli_real_escape_string($connection, $_POST['con-password']);

        if ($new_password == $con_password) {

            $hashed_password = sha1($new_password);

            $query = "UPDATE users SET 
                        passwords = '{$hashed_password}'
                        WHERE user_id = '{$_POST['users_id']}' LIMIT 1";

            $result = mysqli_query($connection, $query);

            if ($result) {

                header("Location:user-account.php?password_modified");
            } else {
                echo "<p>failed to update the password</p>";
            }
        } else {
            echo "<p>Passwords do not match</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musify</title>
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
        <?php require "CSS/style.css";
        require "CSS/register.css";
        ?>
    </style>
    <link rel="icon" href="images/icons/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
</head>

<body>
    <div class="main">
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
        <section id="register-form">

            <div class="main">
                <div class="musify">

                    <h1 class="musifyclass">Welcome to musify</h1>
                    <br>

                    <a href="login.php"><button class="musifybutton">SIGN IN</button></a>
                    <br><br>
                    <h3 class="musifyh3">I'm already a member!</h3>
                </div>
                <!--musify class-->
                <div class="header">

                    <h1 class="create">User Account</h1>

                </div>

                <div class="form">
                    <input type="hidden" name="users_id" <?php echo 'value="' . $user_id . '"' ?>>
                    <form action="change-password.php" method="post">

                        <label for="new-password">New Password:</label><br>
                        <input type="password" name="new-password" id="fname" placeholder="*****">
                        <br><br>

                        <label for="con-password">Confirm Password:</label><br>
                        <input type="password" name="con-password" id="lname" placeholder="*****">
                        <br><br>
                        <button type="submit" name="update-password" class="button_for_sign_up">Update Password</button>

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
    </div>
    <script src="js/script.js"></script>
</body>

</html>