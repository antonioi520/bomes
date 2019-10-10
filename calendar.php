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
    <link href="css/css-min.css" rel="stylesheet">
    <link href="css/gallery-min.css" rel="stylesheet">
    <link href="css/mobile-min.css" rel="stylesheet">
    <link href="css/calendar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/v4-shims.css">
    <link rel="shortcut icon" href="img/logoT.png" type="image/x-icon">
    <link rel="icon" href="img/logoT.png" type="image/x-icon">



</head>
<body>
<!-- Header -->

<?php include("views/nav_pages.html")?>

<div class="headerwrapper" id="content-desktop896">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="z-index: 1;margin-top:-6.250em;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/TheaterInterior/concert-38.jpg" class="d-block w-100" alt="..." style="height:733px;filter:brightness(50%) grayscale(80%);object-fit: cover">
                <div class="carousel-caption d-md-block" id="hero" style="top:150px;">

                    <center>
                        <br><br><br><br><br><br><br>
                        <img src="img/logoT.png" style="height:30%;width: 30%;z-index: 1;object-fit: contain;filter:brightness(95%);margin-top:-6em;margin-bottom:10px;">
                    </center>

                </div>
            </div>
        </div>
    </div>
</div>

<br id="content-mobile896">

<div class="container" id="content-mobile896">
    <center>
        <img src="img/logoT.png" style="height:200px;width:300px;object-fit: contain;">
    </center>

    <hr style="margin-bottom:0px;">
</div>

<section id="about" style="padding-bottom:10px;">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h1 class="" style="font-family: 'Niconne', cursive;letter-spacing: 0.05em;font-size: 70px;color:black;margin-bottom: 0px;">Calendar</h1>
                    <center>
                        <div class="section-title-divider" style="margin-bottom: 0;"></div>
                        <br id="content-mobile">
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="col-md-4"></div>
    <div class="responsiveCal" id="content-desktop">
        <center>
            <iframe src="https://calendar.google.com/calendar/b/3/embed?height=600&amp;wkst=1&amp;bgcolor=%23daa520&amp;ctz=America%2FNew_York&amp;src=dGhlYm9tZXN0aGVhdHJlMTAxN2Jyb2Fkc3RAZ21haWwuY29t&amp;src=ZW4udXNhI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%23039BE5&amp;color=%230B8043&amp;showTitle=0&amp;showCalendars=0"
                    style="border-width:0" width="1200" height="800" frameborder="0" scrolling="no"></iframe>
        </center>
    </div>
    <div class="col-md-4"></div>
</div>

<div id="content-mobile414">
    <center>
        <iframe src="https://calendar.google.com/calendar/b/3/embed?height=600&amp;wkst=1&amp;bgcolor=%23daa520&amp;ctz=America%2FNew_York&amp;src=dGhlYm9tZXN0aGVhdHJlMTAxN2Jyb2Fkc3RAZ21haWwuY29t&amp;src=ZW4udXNhI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%23039BE5&amp;color=%230B8043&amp;showTitle=0&amp;showCalendars=0"
                style="border-width:0" width="400" height="650" frameborder="0" scrolling="no"></iframe>
    </center>
</div>

<div id="content-mobile360">
    <center>
        <iframe src="https://calendar.google.com/calendar/b/3/embed?height=600&amp;wkst=1&amp;bgcolor=%23daa520&amp;ctz=America%2FNew_York&amp;src=dGhlYm9tZXN0aGVhdHJlMTAxN2Jyb2Fkc3RAZ21haWwuY29t&amp;src=ZW4udXNhI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%23039BE5&amp;color=%230B8043&amp;showTitle=0&amp;showCalendars=0"
                style="border-width:0" width="360" height="650" frameborder="0" scrolling="no"></iframe>
    </center>
</div>

<div id="content-mobile320">
    <center>
        <iframe src="https://calendar.google.com/calendar/b/3/embed?height=600&amp;wkst=1&amp;bgcolor=%23daa520&amp;ctz=America%2FNew_York&amp;src=dGhlYm9tZXN0aGVhdHJlMTAxN2Jyb2Fkc3RAZ21haWwuY29t&amp;src=ZW4udXNhI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%23039BE5&amp;color=%230B8043&amp;showTitle=0&amp;showCalendars=0"
                style="border-width:0" width="320" height="650" frameborder="0" scrolling="no"></iframe>
    </center>
</div>



<br>
<?php include("views/footer.html")?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
