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
    <meta name="description" content="View The Bomes Theatre's upcoming events and come join us for a fun and memorable experience!">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css-min.css" rel="stylesheet">
    <link href="css/events-min.css" rel="stylesheet">
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
<br>
<div id="content-desktop896">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="z-index: 1;margin-top:-6.250em;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/Events/Optimo%20Concert-25.jpg" alt="Third slide" style="height:710px;filter:brightness(35%) grayscale(50%);object-fit: cover">
                <div class="carousel-caption  d-md-block d-flex justify-content-center"  id="hero">
                    <center>
                        <br><br><br><br><br><br>
                        <img src="img/logoT.png" style="height:30%;width: 30%;z-index: 1;object-fit: contain;filter:brightness(95%);margin-top:-6em;margin-bottom:60px;">
                    </center>
                    <!--                <center>-->
                    <!--                    <div class="eventHeaderBox">-->
                    <!--                        <h1 class="eventHeaderText">Events</h1>-->
                    <!--                    </div>-->
                    <!--                </center>-->
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
    <br><br><br>
    <div id="top"></div>
    <div class="col-md-6"></div>
    <div class="row" style="display: inline;padding-top: -10px;" >
        <h1 style="text-align: center; color:#1b1b1b;margin-bottom: 3px;">Our upcoming <strong style="color:goldenrod">Events</strong></h1>
        <h5 class="" style="text-align: center;font-size: 17px;">Celebrate your next special occasion with us.</h5>
        <div class="section-title-divider" style="width:300px;margin-bottom: 0"></div>
    </div>

    <!--<center>
        <p id="content-desktop" style="font-weight: bold;margin-bottom: 5px;">View Style</p>
        <a href="#top" id="viewButton" onclick="switchToRotatingView()">Rotating</a>
        <a href="#top" id="viewButton" onclick="switchToNormalView()">Normal</a>
    </center>-->
    <h2 style="text-align: center;color:black;margin-bottom: 20px;margin-top:15px;font-weight: 600">Special Events</h2>
    <div class="row" id="videoRow" style="display: inline; padding-top: 0px;">
        <center>
            <iframe id="galleryVid" width="49%" height="430px" src="https://www.youtube.com/embed/EGx7DpPm5M0?rel=0"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
            <iframe id="galleryVid" width="49%" height="430px" src="https://www.youtube.com/embed/F15XEZrJjLA?rel=0"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
        </center>
    </div>

    <!--<div class="carousel1" data-gap="20" id="rotatingDiv" data-bfc style="width:100%;height:100%;">
        <figure>
            <img src="img/cards/card5.png" alt="" >
            <img src="img/cards/card6.png" alt="" >
            <img src="img/cards/card7.png" alt="" >
            <img src="img/cards/card8.png" alt="" >
            <img src="img/cards/card5.png" alt="" >
            <img src="img/cards/card6.png" alt="" >
            <img src="img/cards/card7.png" alt="" >
            <img src="img/cards/card8.png" alt="" >

        </figure>
        <nav>
            <button class="nav prev">Prev</button>
            <button class="nav next">Next</button>
        </nav>
    </div>-->

    <div class="row" id="normalDiv">

    </div>
    <br>
    <div class="col-md-6"></div>
</div>
<div class="col-md-6"></div>
</div>

<div class="container">
    <div class="row">
        <div class="card-deck" style="width:80%;margin:auto;">
            <div class="card" style="border-color: goldenrod">
                <img class="card-img-top" src="img/Events/la_cronica_irreverente.jpg" alt="Card image cap" style="height:400px;object-fit: contain;">
                <div class="card-body" style="padding-left:0;padding-right:0;padding-bottom:0;">
                    <h5 class="card-title" style="font-weight: bold;padding-left:10px;padding-right:10px;">La Crónica Irreverente</h5>
                    <p class="card-text" style="background-color: #ffffe0; color=black;padding-left:10px;padding-right:10px;">
                        Gratis un encuentro con el periodista marino zapete<br>
                        Mayor Información: Juan Chaves 617-970-9629
                        <br><br>
                        <strong>Date: Friday, October 18th</strong><br>
                        <strong>Start: 6pm</strong><br>
                        <br><br>
                    </p>

                </div>
                <div id="content-desktop" class="card-footer" style="background-color: goldenrod;height:50px;">
                    <small class="d-flex justify-content-cen6ter" style="color:white;font-weight: bold; text-align: center">
                        The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                </div>

                <div id="content-mobile" class="card-footer" style="background-color: goldenrod;height:60px;">
                    <small class="d-flex justify-content-center" style="color:white;font-weight: bold; text-align: center">
                        The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                </div>
            </div>
            <div class="card" style="border-color: goldenrod">
                <img class="card-img-top" src="img/Events/sushi_night_con_el_ninja.jpg" alt="Card image cap" style="height:400px;object-fit: contain;">
                <div class="card-body" style="padding-left:0;padding-right:0;padding-bottom:0;">
                    <h5 class="card-title" style="font-weight: bold;padding-left:10px;padding-right:10px;">Sushi Night Con El Ninja</h5>
                    <p class="card-text" style="background-color: #ffffe0; color=black;padding-left:10px;padding-right:10px;">
                        With Live DJS: DJ TRAVIESO x DJ JOTA x DJ BENTLY
                        <br><br>
                        <strong style="float:left">Dates:</strong><strong id="ninjaCardA"> Friday, November 1st <br> Sunday, November 3rd</strong><br><br>
                        <strong style="float:left">Times:</strong><strong id="ninjaCardB"> Friday: 4pm - 11pm <br> Sunday: 12pm - 10pm</strong><br>
                        <br><br>
                    </p>

                </div>
                <div id="content-desktop" class="card-footer" style="background-color: goldenrod;height:50px;">
                    <small class="d-flex justify-content-cen6ter" style="color:white;font-weight: bold; text-align: center">
                        The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                </div>

                <div id="content-mobile" class="card-footer" style="background-color: goldenrod;height:60px;">
                    <small class="d-flex justify-content-center" style="color:white;font-weight: bold; text-align: center">
                        The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                </div>
            </div>
        </div>
    </div>
</div>

<h2 style="text-align: center;color:black;margin-bottom: 40px;margin-top:40px;font-weight: 600">Recurring Events</h2>
<div class="container">
    <div class="col-md-6"></div>
    <!--hr style="margin-bottom:0px;">
    <div class="col-md-6"></div>
    <div class="row" style="display: inline;padding-top: -10px;" >
        <h1 style="text-align: center; color:#1b1b1b;margin-bottom: 3px;">Our past <strong style="color:goldenrod">Events</strong></h1>
        <div class="section-title-divider" style="width:300px;"></div>
    </div-->
    <!--<div class="row" id="videoRow" style="display: inline; padding-top: -10px;">
        <center>
            <video id="video" style="margin-bottom: 30px" controls>
                <source src="vid/event_video.MP4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </center>
    </div>-->
    <div class="row" id="normalDiv2">
        <div class="card-deck" style="width:82%;margin:auto;">
            <div class="card" style="border-color: goldenrod">
                <img class="card-img-top" src="img/Events/event9.jpg" alt="Card image cap" style="height:400px;object-fit: contain;">
                <div class="card-body" style="padding-left:0;padding-right:0;padding-bottom:0;">
                    <h5 class="card-title" style="font-weight: bold;padding-left:10px;padding-right:10px;">Miércoles De Sushi & Domingo De Brunch!</h5>
                    <p class="card-text" style="background-color: #ffffe0; color=black;padding-left:10px;padding-right:10px;">
                        Sushi Wednesday and Sunday Brunch!<br>
                        Call Keiry for reservations: 401-215-7824.
                        <br><br>
                        <strong>Date: Every Wednesday and Sunday</strong><br><br><br>
                        <!--strong>Start: 12pm</strong><br>
                        <!--strong>End: </strong><br-->
                    </p>

                </div>
                <div id="content-desktop" class="card-footer" style="background-color: goldenrod;height:50px;">
                    <small class="d-flex justify-content-cen6ter" style="color:white;font-weight: bold; text-align: center">
                        The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                </div>

                <div id="content-mobile" class="card-footer" style="background-color: goldenrod;height:60px;">
                    <small class="d-flex justify-content-center" style="color:white;font-weight: bold; text-align: center">
                        The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                </div>
            </div>
            <div class="card" style="border-color: goldenrod">
                <img class="card-img-top" src="img/Events/event10.jpeg" alt="Card image cap" style="height:400px;object-fit: contain;">
                <div class="card-body" style="padding-left:0;padding-right:0;padding-bottom:0;">
                    <h5 class="card-title" style="font-weight: bold;padding-left:10px;padding-right:10px;">100 NFL</h5>
                    <p class="card-text" style="background-color: #ffffe0; color=black;padding-left:10px;padding-right:10px;">
                        Every Thursday at 8:00pm.<br>
                        Buffalo/BBQ chicken wings $6.00. <br>
                        Nachos/Tacos $6.00.
                        <br><br>
                        <strong>Date: Every Thursday</strong><br>
                        <strong>Start: 8pm</strong><br>
                        <!--strong>End: 1am</strong><br-->
                    </p>

                </div>
                <div id="content-desktop" class="card-footer" style="background-color: goldenrod;height:50px;">
                    <small class="d-flex justify-content-cen6ter" style="color:white;font-weight: bold; text-align: center">
                        The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                </div>

                <div id="content-mobile" class="card-footer" style="background-color: goldenrod;height:60px;">
                    <small class="d-flex justify-content-center" style="color:white;font-weight: bold; text-align: center">
                        The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6"></div>
</div>

<br id="content-desktop">


<!--<script src="js/test.js"></script>

<script>
    var normal = document.getElementById("normalDiv");
    var normal2 = document.getElementById("normalDiv2");
    var rotating = document.getElementById("rotatingDiv");


    function switchToNormalView() {
        normal.style.display = "inline";
        normal2.style.display = "inline";
        rotating.style.display = "none";
    }
    function switchToRotatingView() {
        normal.style.display = "none";
        normal2.style.display = "none";
        rotating.style.display = "flex";
    }
</script>-->
<?php include("views/footer.html")?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
