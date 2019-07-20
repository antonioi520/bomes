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
    <link href="css/gallery.css" rel="stylesheet">
    <link href="css/mobile.css" rel="stylesheet">
<!--    <link href="css/menu.css" rel="stylesheet">-->
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
<div class="headerwrapper" id="content-desktop896">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="z-index: 1;margin-top:-6.250em;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/TheaterInterior/Concert-9.jpg" class="d-block w-100" alt="..." style="height:710px;filter:brightness(50%) grayscale(80%);object-fit: cover">
                <div class="carousel-caption d-md-block" id="hero" style="top:150px;">

                    <center>
                        <br><br><br><br><br><br>
                        <img src="img/logoT.png" style="height:30%;width: 30%;z-index: 1;object-fit: contain;filter:brightness(95%);margin-top:-6em;margin-bottom:20px;">
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

<div class="container wow fadeInUp">
    <br>
    <br>
    <div class="row">
        <div class="col-md-12">
            <center>
                <h1 class="" style="font-family: 'Niconne', cursive;letter-spacing: 0.05em;font-size: 70px;color:black;margin-bottom: 10px;">Gallery</h1>
                <center>
                    <div class="section-title-divider"></div>
        </div>
    </div>
</div>
<div class="container">
    <!--h2>work in progress</h2-->
<!--    <h1 class="menu-heading">Gallery</h1>-->

<BR>
    <br>
    <!--h2 style="text-align:center; color:black;padding-bottom:0px;">Interior (Theatre)</h2-->
    <h2 class="section-title-lowercase" style="margin-bottom: 10px;font-weight: 500">Interior (Theatre)</h2>
    <div class="gallery-border">
        <div class="row">
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/concert-46.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(1)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/DSC_0895.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(2)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/Concert-9.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(3)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/concert-37.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(4)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/concert-38.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(5)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/concert-39.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(6)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/concert-41.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(7)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/concert-42.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(8)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/concert-43.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(9)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/concert-44.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(10)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/concert-45.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(11)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/Concert-2.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(12)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/Concert-7.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(13)" class="hover-shadow cursor">
            </div>
        </div>
    </div>

    <br><br>

    <!--h2 style="text-align:center; color:black;padding-bottom:0px;">Interior (Cafe)</h2-->
    <h2 class="section-title-lowercase" style="margin-bottom: 10px;font-weight: 500">Interior (Cafe)</h2>
    <div class="gallery-border">
        <div class="row">
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-5.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(1)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-6.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(2)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-9.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(3)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-10.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(4)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-11.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(5)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-12.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(6)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-13.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(7)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-14.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(8)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-15.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(9)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-16.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(10)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-17.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(11)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-19.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(12)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-20.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(13)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-21.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(14)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-22.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(15)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-23.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(16)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-24.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(17)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-26.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(18)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-27.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(19)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-29.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(20)" class="hover-shadow cursor">
            </div>
        </div>
    </div>

    <br><br>

    <!--h2 style="text-align:center; color:black;padding-bottom:0px;">Events</h2-->
    <h2 class="section-title-lowercase" style="margin-bottom: 10px;font-weight: 500">Event Images</h2>
    <div class="gallery-border">
        <div class="row">
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/Concert-15.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(1)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/Concert-16.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(2)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/Concert-29.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(3)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/Concert-31.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(4)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/Optimo%20Concert-24.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(5)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/Optimo%20Concert-25.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(6)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/Optimo%20Concert-26.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(7)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/Optimo%20Concert-27.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(8)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/Optimo%20Concert-28.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(9)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/event1.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(10)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/event2.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(11)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/event3.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(12)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/3.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(13)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/4.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(14)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/5.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(15)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/6.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(16)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/7.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(17)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/8.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(18)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/9.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(19)" class="hover-shadow cursor">
            </div>
        </div>
    </div>

    <br>

    <h2 class="section-title-lowercase" style="margin-bottom: 10px;font-weight: 500">Event Videos</h2>
    <div class="gallery-border">
        <div class="row">
            <div class="column">
                <img id="galleryImg" src="img/v1_event1.png" style="width:100%" onclick="openVideoModal();currentVideoSlide(1)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/v1_event2.png" style="width:100%" onclick="openVideoModal();currentVideoSlide(2)" class="hover-shadow cursor">
            </div>
        </div>
    </div>

    <br>

    <div id="interiorModal" class="modal">
        <span class="close cursor" onclick="closeInteriorModal()">&times;</span>
        <div class="modal-content">

            <div class="interiorSlides">
                <div class="numbertext">1 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-5.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">2 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-6.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">3 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-9.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">4 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-10.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">5 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-11.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">6 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-12.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">7 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-13.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">8 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-14.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">9 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-15.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">10 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-16.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">11 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-17.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">12 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-19.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">13 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-20.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">14 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-21.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">15 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-22.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">16 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-23.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">17 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-24.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">18 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-26.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">19 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-27.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">20 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-29.jpg" style="width:100%">
            </div>

            <a class="prev" onclick="plusInteriorSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusInteriorSlides(1)">&#10095;</a>

        </div>
    </div>

    <div id="interiorTModal" class="modal">
        <span class="close cursor" onclick="closeInteriorTModal()">&times;</span>
        <div class="modal-content">

            <div class="interiorTSlides">
                <div class="numbertext">1 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/concert-46.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">2 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/DSC_0895.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">3 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/Concert-9.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">4 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/concert-37.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">5 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/concert-38.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">6 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/concert-39.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">7 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/concert-41.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">8 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/concert-42.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">9 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/concert-43.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">10 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/concert-44.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">11 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/concert-45.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">12 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/Concert-2.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">13 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/Concert-7.jpg" style="width:100%">
            </div>

            <a class="prev" onclick="plusInteriorTSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusInteriorTSlides(1)">&#10095;</a>

        </div>
    </div>

    <div id="eventModal" class="modal">
        <span class="close cursor" onclick="closeEventModal()">&times;</span>
        <div class="modal-content">

            <div class="eventSlides">
                <div class="numbertext">1 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Concert-15.jpg" style="width:100%">
            </div>

            <div class="eventSlides">
                <div class="numbertext">2 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Concert-16.jpg" style="width:100%">
            </div>

            <div class="eventSlides">
                <div class="numbertext">3 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Concert-29.jpg" style="width:100%">
            </div>

            <div class="eventSlides">
                <div class="numbertext">4 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Concert-31.jpg" style="width:100%">
            </div>

            <div class="eventSlides">
                <div class="numbertext">5 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Optimo%20Concert-24.jpg" style="width:100%" alt="Optimo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">6 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Optimo%20Concert-25.jpg" style="width:100%" alt="Optimo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">7 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Optimo%20Concert-26.jpg" style="width:100%" alt="Optimo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">8 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Optimo%20Concert-27.jpg" style="width:100%" alt="Optimo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">9 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Optimo%20Concert-28.jpg" style="width:100%" alt="Optimo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">10 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/event1.JPG" style="width:100%" alt="Miss Dominican Republic 2019">
            </div>

            <div class="eventSlides">
                <div class="numbertext">11 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/event2.JPG" style="width:100%" alt="Miss Dominican Republic 2019">
            </div>

            <div class="eventSlides">
                <div class="numbertext">12 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/event3.jpeg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">13 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/3.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">14 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/4.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">15 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/5.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">16 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/6.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">17 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/7.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">18 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/8.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">19 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/9.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">20 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/10.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">21 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/11.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">22 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/12.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">23 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/13.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">24 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/14.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">25 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/15.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">26 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/16.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">27 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/17.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">28 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/18.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">29 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/19.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">30 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/20.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">31 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/21.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">32 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/22.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">33 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/23.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">34 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/24.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">35 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/25.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">36 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/26.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">37 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/27.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">38 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/28.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">39 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/29.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">40 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/30.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">41 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/31.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">42 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/32.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">43 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/33.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">44 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/34.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">45 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/35.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">46 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/36.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">47 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/37.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">48 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/38.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">49 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/39.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">50 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/40.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">51 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/41.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">52 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/42.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">53 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/43.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">54 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/44.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">55 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/45.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">56 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/46.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">57 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/47.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">58 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/48.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">59 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/49.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">60 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/50.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">61 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/51.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">62 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/52.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">63 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/53.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">64 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/54.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">65 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/55.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">66 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/56.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">67 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/57.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">68 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/58.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">69 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/59.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">70 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/60.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">71 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/61.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">72 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/62.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">73 / 73</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/63.jpg" style="width:100%" alt="">
            </div>

            <a class="prev" onclick="plusEventSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusEventSlides(1)">&#10095;</a>

            <!-- Caption text -->
            <div class="caption-container" style="height: 25px;">
                <p id="caption"></p>
            </div>

        </div>
    </div>

    <div id="videoModal" class="modal">
        <span class="close cursor" onclick="closeVideoModal()">&times;</span>
        <div class="modal-content">

            <div class="videoSlides">
                <div class="numbertext">1 / 2</div>
                <!--video controls id="galleryVid" src="vid/event_video.MP4" title="Miss Dominican Republic 2019" style="width:100%"></video-->
                <video id="galleryVid" title="Miss Dominican Republic 2019" style="width:100%" controls>
                    <source src="vid/event_video.MP4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <p><center style="color: white;">Miss Dominican Republic 2019</center></p>
            </div>

            <div class="videoSlides">
                <div class="numbertext">2 / 2</div>
                <!--video controls id="galleryVid" src="vid/event_video2.mp4" title="El Varon De La Bachata" style="width:100%"></video-->
                <video id="galleryVid" title="El Varon De La Bachata" style="width:100%" controls>
                    <source src="vid/event_video2.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <p><center style="color: white;">El Varon De La Bachata</center></p>
            </div>

            <a class="prev" onclick="plusVideoSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusVideoSlides(1)">&#10095;</a>

        </div>
    </div>

    <script>

        function openInteriorModal() {
            document.getElementById("interiorModal").style.display = "block";
        }

        function closeInteriorModal() {
            document.getElementById("interiorModal").style.display = "none";
        }

        function openInteriorTModal() {
            document.getElementById("interiorTModal").style.display = "block";
        }

        function closeInteriorTModal() {
            document.getElementById("interiorTModal").style.display = "none";
        }

        function openEventModal() {
            document.getElementById("eventModal").style.display = "block";
        }

        function closeEventModal() {
            document.getElementById("eventModal").style.display = "none";
        }

        function openVideoModal() {
            document.getElementById("videoModal").style.display = "block";
        }

        function closeVideoModal() {
            document.getElementById("videoModal").style.display = "none";
        }

        var interiorSlideIndex = 1;
        showInteriorSlides(interiorSlideIndex);

        var interiorTSlideIndex = 1;
        showInteriorTSlides(interiorTSlideIndex);

        var eventSlideIndex = 1;
        showEventSlides(eventSlideIndex);

        var videoSlideIndex = 1;
        showVideoSlides(videoSlideIndex);

        function plusInteriorSlides(n) {
            showInteriorSlides(interiorSlideIndex += n);
        }

        function currentInteriorSlide(n) {
            showInteriorSlides(interiorSlideIndex = n);
        }

        function plusInteriorTSlides(n) {
            showInteriorTSlides(interiorTSlideIndex += n);
        }

        function currentInteriorTSlide(n) {
            showInteriorTSlides(interiorTSlideIndex = n);
        }

        function plusEventSlides(n) {
            showEventSlides(eventSlideIndex += n);
        }

        function currentEventSlide(n) {
            showEventSlides(eventSlideIndex = n);
        }

        function plusVideoSlides(n) {
            showVideoSlides(videoSlideIndex += n);
        }

        function currentVideoSlide(n) {
            showVideoSlides(videoSlideIndex = n);
        }

        function showInteriorSlides(n) {
            var i;
            var slides = document.getElementsByClassName("interiorSlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {interiorSlideIndex = 1}
            if (n < 1) {interiorSlideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[interiorSlideIndex-1].style.display = "block";
            dots[interiorSlideIndex-1].className += " active";
            captionText.innerHTML = dots[interiorSlideIndex-1].alt;
        }

        function showInteriorTSlides(n) {
            var i;
            var slides = document.getElementsByClassName("interiorTSlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {interiorTSlideIndex = 1}
            if (n < 1) {interiorTSlideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[interiorTSlideIndex-1].style.display = "block";
            dots[interiorTSlideIndex-1].className += " active";
            captionText.innerHTML = dots[interiorTSlideIndex-1].alt;
        }

        function showEventSlides(n) {
            var i;
            var slides = document.getElementsByClassName("eventSlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {eventSlideIndex = 1}
            if (n < 1) {eventSlideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[eventSlideIndex-1].style.display = "block";
            dots[eventSlideIndex-1].className += " active";
            captionText.innerHTML = dots[eventSlideIndex-1].alt;
        }

        function showVideoSlides(n) {
            var i;
            var slides = document.getElementsByClassName("videoSlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {videoSlideIndex = 1}
            if (n < 1) {videoSlideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[videoSlideIndex-1].style.display = "block";
            dots[videoSlideIndex-1].className += " active";
            captionText.innerHTML = dots[videoSlideIndex-1].alt;
        }
    </script>
</div>

<br>
<br>
<?php include("views/footer.html")?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
