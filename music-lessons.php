<?php
session_start();

?>

<?php
require_once("include/connection.php");
?>

<?php
if (isset($_POST['submit'])) {

    $errors = array();

    if (isset($_POST['email']) || strlen(trim($_POST['email'])) < 1) {
        $errors[] = "Username is missing / invalid";
    }

    if (isset($_POST['password']) || strlen(trim($_POST['password'])) < 1) {
        $errors[] = "password is missing / invalid";
    }

    if (empty($errors)) {
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        $hashed_password = sha1($password);

        $query = "SELECT * FROM music_lessons
                        WHERE email = '{$email}'
                        AND passwords = '{$hashed_password}'
                        LIMIT 1";

        $result = mysqli_query($connection, $query);

        if ($result) {
            if (mysqli_num_rows($result) == 1) {

                $_SESSION['student_id'] = $user['student_id'];
                $_SESSION['first_name'] = $user['fisrt_name'];

                header("Location:music-lessons.php");
            } else {
                $errors[] = "Invalid username or password";
            }
        } else {
            $srrors[] = "Database query failed";
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
    <title>MUsic Lessons | Musify</title>
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
    <link rel="icon" href="images/icons/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/97d053d395.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="main">
        <!-- header section -->

        <section id="header">
            <div class="title">
                <input type="image" src="images/icons/Musify2.png" class="icon-img" alt="">
                <!-- search bar -->
                <form action="home.php" method="post" class="search-bar">
                    <input type="text" name="search" id="search-text">
                    <button type="button" class="search-btn">Search</button>
                    <button type="button" name="submit" class="log">Log In</button>
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
        </section>
        <div class="rowy">
            <header>
                <div>Welcome <?php echo $_SESSION['first_name']; ?></div>
            </header>
            <div class="ab">
                <div class="ab1">

                    <?php
                    if (isset($_POST['submit'])) {
                        echo "<h1>
                            <center><strong>
                                    <font size='+50' color='white'>Welcome ";
                        echo $_SESSION['first_name'];
                        echo "</font>
                                </strong></center>
                        </h1>";
                    }
                    ?>
                    <h1>
                        <center><strong>
                                <font size="+50" color="white">Music Lessons</font>
                            </strong></center>
                    </h1>
                    <h3>
                        <center><i>
                                <font size="10" color="white">Direction To Enter Music World.....!!!</font>
                            </i></center><br><br><br>
                    </h3>
                </div>


                <div class="ab1">
                    <?php
                    if (isset($errors) && !empty($errors)) {
                        echo "<p>Invalid username or password</p>";
                    }
                    ?>

                    <?php
                    if (!isset($_POST['submit'])) {
                        echo "<form class='f0001'>
                            <center>
                                <h1>
                                    <font color='white'>Login</font>
                                </h1>
                            </center>
    
                            <center><label class='la002' for='email'><b>Email</b></label></center>
                            <input type='text' placeholder='Enter Email' name='email'><br><br>
    
                            <center><label class='la002' for='password'><b>Password</b></label></center>
                            <input type='password' placeholder='Enter Password' name='password'><br><br>
    
                            <button type='submit' class='imglog-btn0001'>Login</button><br>
                            <br>
                            <a href='music-lesson-registration.php'><button type='regi' class='imglog-btn0001'>Register</button></a><br><br>
                        </form>";
                    }
                    ?>
                </div>
                <br><br><br>

            </div>

            <br>
            <div class="ac">

                <div class="ac1">
                    <center>
                        <h001>Musify for childeren</h001>
                        <p style="line-height: 2rem; text-align: justify;">This chance open for below 18 years old all people.
                            Not only Sri lankan, but also other country people can join us. Online classes and on classes are avaiable.Come and gain your knowledge.</p>
                    </center>
                </div>

                <div class="ac1">
                    <center>
                        <h001>Musify for Adult</h001>
                        <p style="line-height: 2rem; text-align: justify;">This chance open for above 18 and 18 years old all people.
                            Not only Sri lankan, but also other country people can join us. Online classes and on classes are avaiable.Come and gain your knowledge.
                        </p>
                    </center>
                </div>
            </div>
            <div class="ad">

                <div class="ad1">

                    <h4>
                        <center><strong>
                                <font class="h001" size="5">About Our Program</font>
                            </strong></center>
                    </h4>
                    <img class="img00001" src="images/musify lessons/learning-drum.jpg" alt="image of drum playing" style="width:100%">
                    <p style="line-height: 2rem; text-align: justify;">After you join here as an user only if you wish you can join us and learn from us. We have professional instructures. They will guide you
                        how to play. They teach you from beginnig. So, no worries. Destiny is not support us everytime. So I guess this is the best time to fullfill your dream. We
                        take you to professinal from beginner. We have a schedule, we have best instructers. If you want to learn online we supply all the matrials with best guidlines.If
                        you wish to on classes, our doors are open for you. Thes is our external program to you. Not only for Sri Lankan But also for foregins can use this offer. Think and
                        join us this is your chance, this is you destiny.

                    </p>
                </div>
                <div class="ad1">
                    <h4>
                        <center><strong>
                                <font class="h001" size="5">How to Join</font>
                            </strong></center>
                    </h4>
                    <img class="img00001" src="images/musify lessons/Teens-music-class-surat.jpg" alt="image of music class" style="width:100%">
                    <p style="line-height: 2rem; text-align: justify;">If you wish to join us, you have to register to our system. There is separate progrms for childern and adults. You have to choose the instrument what dou want
                        to learn. Whatever you are choosing we have best instruters for teach. In the form you have to add your first name, last name, address,email address likewise.
                        Below you can see the button to go to nregister form. Agter clicking it you will go to the registration page we provide. So, you have to enter your details hear and
                        create a seat for you.After registering you can simply log in to the lessons click on log in button.
                        Student auditions run approximately fifteen minutes and will include the following:
                    <ol style="line-height: 2rem; text-align: justify;">

                        <li> Performance</li>
                        <li> Perform two contrasting pieces of the student’s choice</li>
                        <li>Scales</li>
                        <li>Play three different major scales</li>
                        <li>Sight Reading</li>
                        <li>Melodic and Rhythmic Patterns</li>
                        <li>A faculty member will tap a series of short rhythmic patterns and melodies and the student will repeat them</li>

                    </ol>
                    </p>
                </div>

                <div class="ad1">
                    <h4>
                        <center><strong>
                                <font class="h001" size="5">Schedule</font>
                            </strong></center>
                    </h4>
                    <img class="img00001" src="images/musify lessons/musical-training-in-kids-min.jpg" alt="image if student playing music instruments" style="width:100%">
                    <p>Weekdays -<br>
                        <center>
                            08.00am to 10.00pm<br><br>
                            10.30am to 12.30pm<br><br>
                            02.30pm to 04.30pm<br><br></center>
                        <br>
                        Weekend - <br>
                        <center>
                            09.00am to 11.00pm<br><br>
                            11.30am to 01.30pm<br><br>
                            02.30pm to 04.30pm<br><br>
                            06.00pm to 08.00pm<br><br></center>
                        <br>
                    </p>
                </div>
            </div>
            <br><br><br>

            <hr>

            <div class="ae">
                <div class="ae1">
                    <video class="v001" width="100%" height="100%" autoplay muted>
                        <source src="images/Videoes/videoplayback001.mp4" type="video/mp4">
                        <source src="images/Videoes/videoplayback001.ogg" type="video/ogg">

                    </video>
                </div>
                <div class="ae2">
                    <center>
                        <h3>
                            <font class="h002" size="5"><u><b>We will Teach you to be professional</b></u></font>
                        </h3>
                    </center>
                    <p style="line-height: 2rem; text-align: justify;">This our additional for the person who choose our center to buy instrument. So, we have best instructers. In future we hope to start a vocal
                        training also here. We will do our best to take you on your dream path. Eve you are a beginner we are there to take you to professinal.
                        We supply best mettrials to you. Our instructers will show the path you really want to go. We make you best and best. You can start your career
                        in music path.
                        <br>


                        <center>
                            <b><i>"Musify is the soul of music. I was a beginner, but after learning from here. I am really greatful to myself."</i></b><br>
                            <b>~~~~ Saman Perera~~~~</b>
                            <br><br>

                            <b><i>"We’re all so lucky to participate a program like this which makes learning so much fun. Thanks for all of the extraordinary things you do!"</i></b><br>
                            <b>~~~~Alis Western~~~~</b>
                            <br><br>

                            <b><i>"Musify is the rhythm, the soul, the beat. It evolves around me. Musify is the music I fell in love with."</i></b><br>
                            <b>~~~~ Viraji Silva~~~~</b>
                        </center>
                    </p>
                </div>
            </div>
            <br><br><br>

            <div class="af">

                <h003>
                    <center><strong>
                            <font class="h001" size="6"><u>Our team</u></font>
                        </strong></center>
                </h003>
                <br><br>

            </div>

            <div class="ag">

                <div class="ag1">

                    <center>
                        <img class="img00003" src="images/people/person no5.jpg" alt="music instructer" style="width:40%">
                        <p>Violin lessons Cordinater</p>
                        <p>H.R.Perera</p>
                        <p>hrl@123musify.lk</p>
                    </center>

                </div>

                <hr>
                <div class="ag1">
                    <center>
                        <img class="img00003" src="images/people/person no4.jpg" alt="music instructer" style="width:40%">
                        <p>Guitar lessons Cordinater</p>
                        <p>G.G.Joon</p>
                        <p>ggl@123musify.lk</p>
                    </center>
                </div>

                <hr>
                <div class="ag1">
                    <center>
                        <img class="img00003" src="images/people/person no3.jpg" alt="music instructer" style="width:40%">
                        <p>Key board lessons Cordinater</p>
                        <p>J.K.Deland</p>
                        <p>jkl@123musify.lk</p>
                    </center>
                </div>
                <hr>
                <div class="ag1">
                    <center>
                        <img class="img00003" src="images/people/person no6.jpg" alt="music instructer" style="width:40%">
                        <p>Drums lessons Cordinater</p>
                        <p>R.T.Kate</p>
                        <p>rtl@123musify.lk</p>
                    </center>

                </div>

            </div>
        </div>


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
    </div>
    <script src="js/script.js"></script>
</body>

</html>