<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 6/17/2019
 * Time: 5:31 PM
 */
?>
<!DOCTYPE HTML>
<html lang="en">
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
    <title>The Bomes Theatre</title>
    <meta name = "viewport" content = "width=device-width, initial-scale = 1, user-scalable = no"/>
    <meta name="description" content="The Bomes Theatre is catered by Mi Alma Restaraunt. Services provided at Mi Alma Restaurant include an array of Dominican/Latin cuisine, events and live concerts.">


    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css-min.css" rel="stylesheet">
    <link href="css/services-min.css" rel="stylesheet">
    <link href="css/mobile-min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/v4-shims.css">
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
                <img src="img/Interior/1.jpeg" class="d-block w-100" alt="el ninja restaurant" style="height:710px;filter:brightness(50%) grayscale(80%);object-fit: cover">
                <div class="carousel-caption d-md-block" id="hero" style="top:150px;">

                    <center>
                        <br><br><br><br><br><br>
                        <img src="img/logoT.png" alt="bomes theatre logo" style="height:30%;width: 30%;z-index: 1;object-fit: contain;filter:brightness(95%);margin-top:-6em;margin-bottom:20px;">
                    </center>

                </div>
            </div>
        </div>
    </div>
</div>

<!--div class="container" id="content-mobile896">
    <center>
        <img src="img/logoT.png" style="height:200px;width:300px;object-fit: contain;">
    </center>

    <hr style="margin-bottom:0px;">
</div-->

<div class="container">
<center>
    <img src="img/logo_ninja.png" alt="el ninja logo" style="height:200px;width:300px;object-fit: contain;">
</center>

<hr style="margin-bottom:0px;">
</div>
<section id="about">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <!--h3 class="section-title" style="font-family: 'Satisfy', cursive;letter-spacing: 0.05em;font-size: 3.125em;">About us</h3>
                <div class="section-title-divider"></div-->
            </div>
        </div>
    </div>
    <div class="container about-container wow fadeInUp">
        <div class="row">
            <div class="col-lg-6 about-img" id="content-desktop896">
                <img src="img/Interior/4.jpg" alt="mi alma restaurant" style="height:400px;width:100%;object-fit: cover;" id="aboutImg">
            </div>

            <div class="col-lg-6 about-img" id="content-mobile896">
                <center>
                    <img src="img/Interior/4.jpg" alt="mi alma restaurant" style="height:400px;object-fit: cover;" id="aboutImg">
                </center>
            </div>

            <div class="col-md-6 about-content">
                <h2 class="about-title" style="margin-bottom: 14px;">We provide incredible Latin/Japanese fusion dishes!</h2>
                <p class="about-text">
                    El Ninja Restaurant is a Latin fusion sushi restaurant brought to Broad Street alongside the newly renovated Bomes Theatre,
                    headed by world-class chef El Ninja and a talented staff, that uses only the finest ingredients!
                </p>
                <p class="about-text">
                    We provide an array of services including special events and
                    takeout. El Ninja Restaurant serves traditional Japanese cuisine, alongside signature Japanese/Latin fusion dishes that will blow you away!
                </p>
                <br>
                <h3 style="font-weight: bold;color: #333;margin-bottom: 14px;">Check out our Website:</h3>
                <a href="https://www.ElNinja.net" id="menuBox" target="_blank" style="width: 230px; padding-right: 13px;"><h2 id="menuBoxText">View Website</h2></a>
            </div>
        </div>
    </div>
    <br>
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