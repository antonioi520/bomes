<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 6/17/2019
 * Time: 5:31 PM
 */
?>
<!DOCTYPE HTML>
<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90995944-5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-90995944-5');
    </script>


    <meta charset="UTF-8">
    <title>Bomes Theatre</title>
    <meta name = "viewport" content = "width=device-width, initial-scale = 1, user-scalable = no"/>


    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">
    <link href="css/services.css" rel="stylesheet">
    <link href="css/mobile.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/v4-shims.css">
    <link href="lib/animate-css/animate.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logoT.png" type="image/x-icon">
    <link rel="icon" href="img/logoT.png" type="image/x-icon">


</head>
<body>
<!-- Header -->


<?php include("views/nav_pages.html")?>
<BR>

<div class="headerwrapper" id="content-desktop896">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="z-index: 1;margin-top:-6.250em;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/Interior/MiAlmaCafeOpeningCeremony-12.jpg" class="d-block w-100" alt="..." style="height:710px;filter:brightness(30%);object-fit: cover">
                <div class="carousel-caption d-md-block" id="hero" style="top:150px;">

                    <center>
                        <br><br><br><br><br><br>
                        <img src="img/logoT.png" style="height:30%;width: 30%;z-index: 1;object-fit: contain;filter:brightness(95%);margin-top:-6em;margin-bottom:10px;">
                    </center>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" id="content-mobile896">
    <center>
        <img src="img/logoT.png" style="height:200px;width:300px;object-fit: contain;">
    </center>

    <hr style="margin-bottom:0px;">
</div>

<div class="container">

</div>
<section id="about">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h1 class="" style="font-family: 'Niconne', cursive;letter-spacing: 0.05em;font-size: 70px;color:black;margin-bottom: 10px;">Our Services</h1>
                <center>
                <div class="section-title-divider"></div>
            </div>
        </div>
    </div>
    <div class="container about-container wow fadeInUp">
        <br>
        <div class="row">
            <div class="col-lg-6 about-img" id="content-desktop896">
                <img src="img/TheaterInterior/concert-45.jpg" alt="" style="height:620px;object-fit: cover;filter:brightness(90%) grayscale(40%)" id="aboutImg">
                <br>
                <br>
<!--                <img src="img/TheaterInterior/Concert-9.jpg" alt="" style="height:auto;object-fit: cover;filter:brightness(100%) grayscale(30%)" id="aboutImg">-->
            </div>

            <div class="col-lg-6 about-img" id="content-mobile896">
                <center>
                    <img src="img/TheaterInterior/concert-45.jpg" alt="" style="height:auto;object-fit: cover;" id="aboutImg">
                </center>
            </div>

            <div class="col-md-6 about-content">

                <h2 class="about-title" style="margin-bottom: 5px;">Weddings</h2>
                <p class="about-text" style="padding-left:2px;margin-bottom: 10px;">
                    Come celebrate your special day with us! We have an
                    experienced staff that will exceed your expectations
                    and help plan the wedding of your dreams.
                </p>



                <h2 class="about-title" style="margin-bottom: 5px;">Baby Showers</h2>
                <p class="about-text" style="padding-left:2px;margin-bottom: 10px;">
                    Plan the perfect baby shower for your friends and family!
                    Our staff will assist you every step of the way to ensure a
                    smooth and stress free experience for you and your family.
                </p>



                <h2 class="about-title" style="margin-bottom: 5px;">Birthdays</h2>
                <p class="about-text" style="padding-left:2px;margin-bottom: 10px;">
                    Celebrate your child's 1st birthday, Quinceañera, or Sweet 16 with us and create memories that last a lifetime!
                </p>



                <!--h2 class="about-title" style="margin-bottom: 5px;">Quinceañeras</h2>
                <p class="about-text" style="padding-left:2px;margin-bottom: 10px;">
                    Commemorate your daughter's 15th birthday with your family at Bomes Theatre!
                </p>



                <h2 class="about-title" style="margin-bottom: 5px;">Sweet 16</h2>
                <p class="about-text" style="padding-left:3px;margin-bottom: 10px;">
                    Celebrate your child's 16th birthday with an extravagant party with assisted planning by our expert staff!
                </p-->



                <h2 class="about-title" style="margin-bottom: 5px;">Baptisms</h2>
                <p class="about-text" style="padding-left:2px;margin-bottom: 10px;">
                    Commemorate your child's baptism with us for a day to remember!
                </p>



                <h2 class="about-title" style="margin-bottom: 5px;">Banquet Meetings</h2>
                <p class="about-text" style="padding-left:2px;margin-bottom: 10px;">
                    Having a banquet meeting? Our staff can accommodate all your business needs!
                    Catering provided on location by Mi Alma Restaurant.
                </p>

                <br>

                <a href="booking" id="menuBox"><h2 id="menuBoxText" style="padding-top: 9px;padding-bottom: 9px;">Book an Event</h2></a>

            </div>
        </div>
    </div>
</section>

<!--==========================
  Subscrbe Section
  ============================-->
<section id="subscribe">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <img src="img/divider3.png" style="text-align: center;display: block;margin:auto;object-fit: scale-down;">
            </div>
        </div>
    </div>
</section>

<section id="about">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h1 class="" style="font-family: 'Niconne', cursive;letter-spacing: 0.05em;font-size: 70px;color:black;margin-bottom: 10px;">Special Events</h1>
                    <center>
                        <div class="section-title-divider"></div>
            </div>
        </div>
    </div>
    <div class="container about-container wow fadeInUp">
        <br>
        <div class="row">
            <div class="col-lg-6 about-img" id="content-desktop896">
                <img src="img/TheaterInterior/concert-46.jpg" alt="" style="height:400px;object-fit: cover;filter:brightness(90%) grayscale(0%)" id="aboutImg">
                <br>
                <br>
                <!--                <img src="img/TheaterInterior/Concert-9.jpg" alt="" style="height:auto;object-fit: cover;filter:brightness(100%) grayscale(30%)" id="aboutImg">-->
            </div>

            <div class="col-lg-6 about-img" id="content-mobile896">
                <center>
                    <img src="img/TheaterInterior/concert-46.jpg" alt="" style="height:auto;object-fit: cover;" id="aboutImg">
                </center>
            </div>

            <div class="col-md-6 about-content">

                <h2 class="about-title" style="margin-bottom: 5px;">Live Performances</h2>
                <p class="about-text" style="padding-left:2px;margin-bottom: 10px;">
                    Looking to book a live performance at The Bomes Theatre? Fill out our event booking form <a href="booking.php">here!</a>
                </p>



                <h2 class="about-title" style="margin-bottom: 5px;">Business Events</h2>
                <p class="about-text" style="padding-left:2px;margin-bottom: 10px;">
                    The Bomes Theatre has a skilled staff that can accommodate any of your company's needs to ensure
                    a quality experience for you and your business.
                </p>



                <h2 class="about-title" style="margin-bottom: 5px;">Conventions</h2>
                <p class="about-text" style="padding-left:2px;margin-bottom: 10px;">
                    Our venue at The Bomes Theatre is perfectly equipped to host a convention for your business!
                </p>


                <br>

                <a href="booking" id="menuBox"><h2 id="menuBoxText" style="padding-top: 9px;padding-bottom: 9px;">Book an Event</h2></a>

            </div>
        </div>
    </div>
</section>

<!--==========================
  Subscrbe Section
  ============================-->
<section id="subscribe">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <img src="img/divider3.png" style="text-align: center;display: block;margin:auto;object-fit: scale-down;">
            </div>
        </div>
    </div>
</section>

<section id="about">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h1 class="" style="font-family: 'Satisfy', cursive;letter-spacing: 0.05em;font-size: 70px;color:black;margin-bottom: 10px;">Catering</h1>
                    <center>
                <div class="section-title-divider"></div>
            </div>
        </div>
    </div>
    <div class="container about-container wow fadeInUp">
        <div class="row">
            <div class="col-lg-6 about-img" id="content-desktop896">
                <img src="img/FoodDrink/MiAlmaCafe-2.jpg" alt="" style="width:520px; height: 430px; object-fit: cover;" id="aboutImg">
            </div>

            <div class="col-lg-6 about-img" id="content-mobile896">
                <center>
                    <img src="img/FoodDrink/MiAlmaCafe-2.jpg" alt="" style="width:520px; height: 330px; object-fit: cover;" id="aboutImg">
                </center>
            </div>

            <div class="col-md-6 about-content">

                <h2 class="about-title" style="margin-bottom: 10px;">Catering at the Bomes Theatre provided by Mi Alma Restaurant</h2>
                <p class="about-text">
                    At Mi Alma Restaurant, we provide an array of catering services for our customers.
                    If you are looking to host an event at the Bomes Theatre, we can
                    cater for your event there!
                </p>

                <br>

                <h2 class="about-title" style="margin-bottom: 10px;">Catering for personal events</h2>
                <p class="about-text">
                    Our catering services are not limited to just events hosted on location at the Bomes Theatre, we also
                    cater for various other events including weddings, banquets, family gatherings and parties.
                </p>
                <br>
                <a href="https://www.MiAlmaRestaurant.com" id="menuBox" target="_blank" style="width: 230px; padding-right: 13px;"><h2 id="menuBoxText" style="padding-bottom: 9px;width: 226.875px;">View Website</h2></a>
                <br id="content-desktop">

            </div>
        </div>
    </div>
</section>

<br id="content-desktop">
<?php include("views/footer.html")?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>