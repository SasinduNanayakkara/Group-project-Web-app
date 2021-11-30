<!DOCTYPE html>
<html>

<head>
    <title>About Us</title>

    <link rel="stylesheet" type="text/css" href="CSS/cssfile/about.css">
    <link rel="stylesheet" type="text/css" href="CSS/cssfile/header_footer.css">

    <style>
        * {
            box-sizing: border-box;
        }

        .column {
            float: left;
            width: 33.33%;
            padding: 5px;
        }

        /* Clearfix (clear floats) */
        .row::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>


</head>

<body>

    <!-- header section -->
    <section id="header">
        <div class="title">
            <h1 class="title1">Musify</h1>
            <!-- search bar -->
            <form action="home.php" method="post" class="search-bar">
                <input type="search" name="search" id="search-text">
                <button type="button" class="search-btn">Search</button>
                <button type="button" class="log">Log In</button>
            </form>
        </div>
    </section>
    <!-- navigation bar -->
    <section id="navigation-bar">
        <div class="nav-bar">
            <ul type="none">
                <li class="nav-start"><a aria-current="page" href="home.php">Home</a></li>
                <li><a aria-current="page" href="guitars1.php">Product</a></li>
                <li><a aria-current="page" href="services.php">Services</a></li>
                <li><a aria-current="page" href="contact-us.php">Contact Us</a></li>
                <li class="last"><a aria-current="page" href="about-us.php">About Us</a></li>
                <!-- <li class="last"><a aria-current="page" href="login.php">Log In</a></li> -->


            </ul>
        </div>



        <div class="header">

            <h1 class="about">ABOUT US</h1>

        </div>
        <!--header-->

        <br>


        <div class="main">

            <div class="main2">

                <p class="para">
                    <B>Musify </B>is the abode of all music lovers. We offer you the opportunity to
                    purchase musical instruments as well as play musical instruments and we are committed to that.
                    We have a wide range of musical instruments to choose from. You have the opportunity to easily
                    purchase professional audio equipment from world leading brands. <br>

                    Today, we offer the widest selection of musical instruments, professional audio equipment,
                    home theatre systems, and audio accessories from the world’s leading brands. Complemented by a music store
                    that is a veritable wonderland of sound, equipping amateur enthusiast and professional alike. The ‘We Love Music’
                    banner is an association between the Yamaha Music Centre and Mike Audio. It is also a promise of exceptional quality,
                    professional expertise, affordable pricing with something for everyone, and genuine enthusiasm that is equal parts love and excellence

                </p>

                <br><a href="ourteam.html">


                    <button class="our_team">OUR TEAM</button>

                </a>

                <div class="row">
                    <div class="column">
                        <img src="image/222.jpg" style="width:84%">

                    </div>
                    <div class="column">
                        <img src="image/555.jpg" style="width:84%">

                    </div>
                    <div class="column">
                        <img src="image/777.jpg" style="width:84%">
                    </div>
                </div>





            </div>
            <!--main2-->





        </div>
        <!--main-->



        <!--footer below-->


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
                        <input type="image" class="visa" src="image/visa.ico" alt="visa">
                        <input type="image" class="visa" src="image/amrican-express.ico" alt="american-express">
                        <input type="image" class="master-card" src="image/master-card.ico" alt="master card">
                    </form>
                </li>

            </ul>
        </div>

    </section>
    <!-- social media section -->
    <section>

        <div class="row1">

            <form action="" class="social-items">
                <input type="image" src="image/5293-facebook_102565.ico" alt="facebook" class="icon">
                <input type="image" src="image/google_icon-icons.com_62736.ico" alt="google" class="icon">
                <input type="image" src="image/Instagram_icon-icons.com_66804.ico" alt="instagram" class="icon">
                <input type="image" src="image/Twitter_icon-icons.com_66803.ico" alt="twitter" class="icon">

            </form>

        </div>


        <div class="row1">

            <p class="text">CopyWrite© 2021 Musify Music Center All rights reserved</p>

        </div>

    </section>




</body>

</html>