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
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90995944-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-90995944-4');
    </script>

    <meta charset="UTF-8">
    <title>Bomes Theatre</title>
    <meta name = "viewport" content = "width=device-width, initial-scale = 1, user-scalable = no"/>


    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">
    <link href="css/events.css" rel="stylesheet">
    <link href="css/mobile.css" rel="stylesheet">
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

<div class="container">
<br><br><br>
    <div class="col-md-6"></div>
    <div class="row" style="display: inline;padding-top: -10px;" >
        <h1 style="text-align: center; color:#1b1b1b;margin-bottom: 3px;">Our upcoming <strong style="color:goldenrod">Events</strong></h1>
        <h5 class="" style="text-align: center;font-size: 17px;">Celebrate your next special occasion with us.</h5>
        <div class="section-title-divider" style="width:300px;"></div>
    </div>

    <div class="carousel1" data-gap="20" data-bfc style="width:100%;height:100%;">
        <figure>
            <img src="img/cards/card1.png" alt="" >
            <img src="img/cards/card2.png" alt="" >
            <img src="img/cards/card3.png" alt="" >
            <img src="img/cards/card1.png" alt="" >
            <img src="img/cards/card2.png" alt="" >
            <img src="img/cards/card3.png" alt="" >
            <img src="img/cards/card1.png" alt="" >
            <img src="img/cards/card2.png" alt="" >
            <img src="img/cards/card3.png" alt="" >
        </figure>
        <nav>
            <button class="nav prev">Prev</button>
            <button class="nav next">Next</button>
        </nav>
    </div>

    <div class="row" style="display:inline;">
        <div class="card-deck" style="width:80%;margin:auto;">
            <div class="col-md-3"></div>
            <div class="card" style="border-color: goldenrod">
                <img class="card-img-top" src="img/Events/event4.png" alt="Card image cap" style="height:400px;object-fit: contain;">
                <div class="card-body" style="padding-left:0;padding-right:0;padding-bottom:0;">
                    <h5 class="card-title" style="font-weight: bold;padding-left:10px;padding-right:10px;">Fiesta Dominicana</h5>
                    <p class="card-text" style="background-color: #ffffe0; color=black;padding-left:10px;padding-right:10px;">
                        Cristian La Voz Y Los Rebeldes Del Tipico <br> With DJ Riggs, DJ Bently, DJ Chombo and DJ Mambo.
                        <br><br>
                        <strong>Date: Sunday, August 11th</strong><br>
                        <strong>Start: 10am</strong><br>
                        <strong>End: 8pm</strong><br>
                    </p>

                </div>
                <div id="content-desktop" class="card-footer" style="background-color: goldenrod;height:50px;">
                    <small class="d-flex justify-content-center" style="color:white;font-weight: bold; text-align: center">
                        The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                </div>

                <div id="content-mobile" class="card-footer" style="background-color: goldenrod;height:60px;">
                    <small class="d-flex justify-content-center" style="color:white;font-weight: bold; text-align: center">
                        The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                </div>
            </div>
            <div class="col-md-3"></div>

        </div>
    </div>
    <div class="col-md-6"></div>


</div>
    <div class="col-md-6"></div>
</div>


<div class="container">

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
    <div class="row" style="display:inline;">
        <div class="card-deck" style="width:80%;margin:auto;">
            <div class="card" style="border-color: goldenrod">
                <img class="card-img-top" src="img/Events/event5.png" alt="Card image cap" style="height:400px;object-fit: contain;">
                <div class="card-body" style="padding-left:0;padding-right:0;padding-bottom:0;">
                    <h5 class="card-title" style="font-weight: bold;padding-left:10px;padding-right:10px;">Sushi Night Con El Ninja</h5>
                    <p class="card-text" style="background-color: #ffffe0; color=black;padding-left:10px;padding-right:10px;">
                        Hosted by Chicho Comedy at Mi Alma Restaurant.
                        <br><br>
                        <strong>Date: Friday, August 16th</strong><br>
                        <strong>Start: 4pm</strong><br>
                        <strong>End: 11pm</strong><br>
                    </p>

                </div>
                <div id="content-desktop" class="card-footer" style="background-color: goldenrod;height:50px;">
                    <small class="d-flex justify-content-center" style="color:white;font-weight: bold; text-align: center">
                        The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                </div>

                <div id="content-mobile" class="card-footer" style="background-color: goldenrod;height:60px;">
                    <small class="d-flex justify-content-center" style="color:white;font-weight: bold; text-align: center">
                        The Bomes Theatre, 1017 Broad Street, Providence, RI 02905</small>
                </div>
            </div>
            <div class="card" style="border-color: goldenrod">
                <img class="card-img-top" src="img/Events/event5.png" alt="Card image cap" style="height:400px;object-fit: contain;">
                <div class="card-body" style="padding-left:0;padding-right:0;padding-bottom:0;">
                    <h5 class="card-title" style="font-weight: bold;padding-left:10px;padding-right:10px;">Ninja Brunch</h5>
                    <p class="card-text" style="background-color: #ffffe0; color=black;padding-left:10px;padding-right:10px;">
                        Hosted by Chicho Comedy at Mi Alma Restaurant.
                        <br><br>
                        <strong>Date: Sunday, August 18th</strong><br>
                        <strong>Start: 12pm</strong><br>
                        <strong>End: 10pm</strong><br>
                    </p>

                </div>
                <div id="content-desktop" class="card-footer" style="background-color: goldenrod;height:50px;">
                    <small class="d-flex justify-content-center" style="color:white;font-weight: bold; text-align: center">
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


<script>
    window.addEventListener('load', () => {
        var
            carousels = document.querySelectorAll('.carousel1')
        ;

        for (var i = 0; i < carousels.length; i++) {
            carousel(carousels[i]);
        }
    });

    function carousel(root) {
        var
            figure = root.querySelector('figure'),
            nav = root.querySelector('nav'),
            images = figure.children,
            n = images.length,
            gap = root.dataset.gap || 0,
            bfc = 'bfc' in root.dataset,

            theta =  2 * Math.PI / n,
            currImage = 0
        ;

        setupCarousel(n, parseFloat(getComputedStyle(images[0]).width));
        window.addEventListener('resize', () => {
            setupCarousel(n, parseFloat(getComputedStyle(images[0]).width))
        });

        setupNavigation();

        function setupCarousel(n, s) {
            var
                apothem = s / (2 * Math.tan(Math.PI / n))
            ;

            figure.style.transformOrigin = `50% 50% ${- apothem}px`;

            for (var i = 0; i < n; i++)
                images[i].style.padding = `${gap}px`;
            for (i = 1; i < n; i++) {
                images[i].style.transformOrigin = `50% 50% ${- apothem}px`;
                images[i].style.transform = `rotateY(${i * theta}rad)`;
            }
            if (bfc)
                for (i = 0; i < n; i++)
                    images[i].style.backfaceVisibility = 'hidden';

            rotateCarousel(currImage);
        }

        function setupNavigation() {
            nav.addEventListener('click', onClick, true);

            function onClick(e) {
                e.stopPropagation();

                var t = e.target;
                if (t.tagName.toUpperCase() != 'BUTTON')
                    return;

                if (t.classList.contains('next')) {
                    currImage++;
                }
                else {
                    currImage--;
                }

                rotateCarousel(currImage);
            }

        }

        function rotateCarousel(imageIndex) {
            figure.style.transform = `rotateY(${imageIndex * -theta}rad)`;
        }

    }
</script>
<?php include("views/footer.html")?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
