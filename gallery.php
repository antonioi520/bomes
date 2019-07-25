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
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/10.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(20)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/11.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(21)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/12.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(22)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/13.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(23)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/14.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(24)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/15.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(25)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/16.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(26)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/17.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(27)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/18.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(28)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/19.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(29)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/20.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(30)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/21.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(31)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/22.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(32)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/23.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(33)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/24.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(34)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/25.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(35)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/26.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(36)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/27.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(37)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/28.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(38)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/29.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(39)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/30.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(40)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/31.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(41)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/32.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(42)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/33.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(43)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/34.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(44)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/35.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(45)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/36.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(46)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/37.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(47)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/38.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(48)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/39.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(49)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/40.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(50)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/41.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(51)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/42.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(52)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/43.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(53)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/44.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(54)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/45.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(55)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/46.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(56)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/47.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(57)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/48.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(58)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/49.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(59)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/50.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(60)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/51.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(61)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/52.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(62)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/53.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(63)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/54.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(64)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/55.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(65)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/56.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(66)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/57.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(67)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/58.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(68)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/59.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(69)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/60.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(70)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/61.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(71)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/62.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(72)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/EventsThumb/63.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(73)" class="hover-shadow cursor">
            </div>

            <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-1.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(74)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-2.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(75)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-3.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(76)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-4.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(77)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-5.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(78)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-6.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(79)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-7.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(80)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-8.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(81)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-9.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(82)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-10.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(83)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-11.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(84)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-12.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(85)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-13.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(86)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-14.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(87)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-15.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(88)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-16.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(89)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-17.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(90)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-18.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(91)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-19.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(92)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-20.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(93)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-21.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(94)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-22.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(95)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-23.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(96)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-24.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(97)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-25.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(98)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-26.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(99)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-27.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(100)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-28.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(101)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-29.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(102)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-30.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(103)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-31.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(104)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-32.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(105)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-33.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(106)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-34.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(107)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-35.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(108)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-36.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(109)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-37.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(110)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-38.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(111)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-39.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(112)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-40.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(113)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-41.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(114)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-42.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(115)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-43.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(116)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-44.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(117)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-45.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(118)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-46.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(119)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-47.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(120)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-48.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(121)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-49.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(122)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-50.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(123)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-51.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(124)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-52.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(125)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-53.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(126)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-54.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(127)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-55.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(128)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-56.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(129)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-57.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(130)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-58.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(131)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-59.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(132)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-60.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(133)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-61.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(134)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-62.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(135)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-63.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(136)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-64.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(137)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-65.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(138)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-66.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(139)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-67.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(140)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-68.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(141)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-69.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(142)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-70.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(143)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-71.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(144)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-72.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(145)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-73.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(146)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-74.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(147)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-75.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(148)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-76.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(149)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-77.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(150)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-78.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(151)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-79.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(152)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-80.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(153)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-81.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(154)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-82.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(155)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-83.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(156)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-84.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(157)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-85.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(158)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-86.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(159)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-87.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(160)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-88.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(161)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-89.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(162)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-90.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(163)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-91.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(164)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-92.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(165)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-93.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(166)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-94.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(167)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-95.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(168)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-96.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(169)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-97.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(170)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-98.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(171)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-99.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(172)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-100.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(173)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-101.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(174)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-102.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(175)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-103.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(176)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-104.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(177)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-105.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(178)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-106.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(179)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-107.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(180)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-108.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(181)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-109.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(182)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-110.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(183)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-111.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(184)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-112.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(185)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-113.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(186)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-114.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(187)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-115.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(188)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-116.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(189)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-117.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(190)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-118.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(191)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-119.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(192)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-120.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(193)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-121.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(194)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-122.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(195)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-123.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(196)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-124.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(197)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-125.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(198)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-126.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(199)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-127.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(200)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-128.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(201)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-129.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(202)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-130.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(203)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-131.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(204)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-132.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(205)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-133.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(206)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-134.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(207)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-135.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(208)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-136.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(209)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-137.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(210)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-138.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(211)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-139.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(212)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-140.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(213)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-141.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(214)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-142.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(215)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-143.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(216)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-144.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(217)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-145.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(218)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-146.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(219)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-147.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(220)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-148.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(221)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-149.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(222)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-150.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(223)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-151.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(224)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-152.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(225)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-153.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(226)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-154.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(227)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-155.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(228)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-156.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(229)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-157.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(230)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-158.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(231)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-159.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(232)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-160.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(233)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-161.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(234)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-162.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(235)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-163.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(236)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-164.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(237)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-165.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(238)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-166.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(239)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-167.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(240)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-168.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(241)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-169.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(242)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-170.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(243)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-171.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(244)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-172.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(245)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img id="galleryImg" src="img/EventsThumb/Don%20Miguelo%20Concert-173.jpg" style="width:100%" onclick="openEventModal();currentEventSlide(246)" class="hover-shadow cursor">
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
            <div class="column">
                <img id="galleryImg" src="img/v1_event3.png" style="width:100%" onclick="openVideoModal();currentVideoSlide(3)" class="hover-shadow cursor">
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
                <div class="numbertext">1 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Concert-15.jpg" style="width:100%">
            </div>

            <div class="eventSlides">
                <div class="numbertext">2 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Concert-16.jpg" style="width:100%">
            </div>

            <div class="eventSlides">
                <div class="numbertext">3 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Concert-29.jpg" style="width:100%">
            </div>

            <div class="eventSlides">
                <div class="numbertext">4 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Concert-31.jpg" style="width:100%">
            </div>

            <div class="eventSlides">
                <div class="numbertext">5 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Optimo%20Concert-24.jpg" style="width:100%" alt="Optimo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">6 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Optimo%20Concert-25.jpg" style="width:100%" alt="Optimo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">7 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Optimo%20Concert-26.jpg" style="width:100%" alt="Optimo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">8 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Optimo%20Concert-27.jpg" style="width:100%" alt="Optimo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">9 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Optimo%20Concert-28.jpg" style="width:100%" alt="Optimo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">10 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/event1.JPG" style="width:100%" alt="Miss Dominican Republic 2019">
            </div>

            <div class="eventSlides">
                <div class="numbertext">11 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/event2.JPG" style="width:100%" alt="Miss Dominican Republic 2019">
            </div>

            <div class="eventSlides">
                <div class="numbertext">12 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/event3.jpeg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">13 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/3.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">14 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/4.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">15 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/5.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">16 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/6.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">17 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/7.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">18 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/8.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">19 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/9.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">20 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/10.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">21 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/11.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">22 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/12.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">23 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/13.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">24 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/14.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">25 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/15.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">26 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/16.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">27 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/17.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">28 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/18.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">29 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/19.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">30 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/20.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">31 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/21.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">32 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/22.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">33 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/23.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">34 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/24.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">35 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/25.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">36 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/26.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">37 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/27.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">38 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/28.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">39 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/29.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">40 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/30.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">41 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/31.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">42 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/32.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">43 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/33.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">44 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/34.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">45 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/35.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">46 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/36.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">47 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/37.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">48 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/38.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">49 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/39.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">50 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/40.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">51 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/41.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">52 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/42.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">53 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/43.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">54 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/44.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">55 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/45.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">56 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/46.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">57 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/47.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">58 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/48.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">59 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/49.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">60 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/50.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">61 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/51.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">62 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/52.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">63 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/53.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">64 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/54.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">65 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/55.jpg" style="width:100%" alt="El Varon De La Bachata">
            </div>

            <div class="eventSlides">
                <div class="numbertext">66 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/56.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">67 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/57.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">68 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/58.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">69 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/59.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">70 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/60.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">71 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/61.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">72 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/62.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">73 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/63.jpg" style="width:100%" alt="">
            </div>

            <div class="eventSlides">
                <div class="numbertext">74 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-1.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">75 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-2.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">76 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-3.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">77 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-4.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">78 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-5.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">79 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-6.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">80 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-7.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">81 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-8.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">82 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-9.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">83 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-10.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">84 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-11.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">85 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-12.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">86 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-13.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">87 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-14.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">88 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-15.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">89 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-16.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">90 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-17.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">91 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-18.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">92 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-19.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">93 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-20.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">94 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-21.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">95 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-22.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">96 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-23.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">97 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-24.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">98 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-25.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">99 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-26.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">100 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-27.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">101 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-28.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">102 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-29.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">103 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-30.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">104 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-31.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">105 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-32.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">106 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-33.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">107 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-34.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">108 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-35.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">109 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-36.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">110 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-37.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">111 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-38.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">112 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-39.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">113 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-40.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">114 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-41.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">115 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-42.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">116 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-43.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">117 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-44.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">118 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-45.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">119 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-46.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">120 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-47.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">121 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-48.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">122 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-49.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">123 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-50.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">124 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-51.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">125 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-52.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">126 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-53.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">127 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-54.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">128 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-55.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">129 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-56.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">130 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-57.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">131 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-58.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">132 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-59.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">133 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-60.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">134 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-61.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">135 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-62.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">136 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-63.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">137 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-64.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">238 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-65.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">139 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-66.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">140 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-67.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">141 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-68.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">142 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-69.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">143 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-70.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">144 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-71.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">145 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-72.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">146 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-73.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">147 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-74.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">148 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-75.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">149 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-76.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">150 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-77.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">151 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-78.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">152 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-79.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">153 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-80.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">154 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-81.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">155 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-82.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">156 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-83.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">157 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-84.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">158 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-85.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">159 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-86.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">160 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-87.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">161 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-88.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">162 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-89.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">163 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-90.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">164 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-91.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">165 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-92.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">166 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-93.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">167 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-94.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">168 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-95.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">169 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-96.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">170 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-97.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">171 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-98.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">172 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-99.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">173 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-100.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">174 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-101.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">175 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-102.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">176 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-103.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">177 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-104.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">178 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-105.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">179 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-106.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">180 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-107.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">181 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-108.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">182 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-109.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">183 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-110.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">184 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-111.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">185 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-112.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">186 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-113.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">187 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-114.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">188 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-115.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">189 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-116.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">190 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-117.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">191 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-118.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">192 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-119.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">193 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-120.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">194 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-121.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">195 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-122.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">196 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-123.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">197 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-124.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">198 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-125.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">199 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-126.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">200 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-127.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">201 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-128.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">202 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-129.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">203 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-130.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">204 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-131.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">205 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-132.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">206 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-133.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">207 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-134.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">208 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-135.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">209 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-136.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">210 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-137.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">211 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-138.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">212 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-139.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">213 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-140.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">214 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-141.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">215 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-142.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">216 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-143.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">217 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-144.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">218 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-145.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">219 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-146.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">220 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-147.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">221 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-148.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">222 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-149.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">223 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-150.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">224 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-151.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">225 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-152.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">226 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-153.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">227 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-154.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">228 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-155.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">229 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-156.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">230 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-157.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">231 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-158.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">232 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-159.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">233 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-160.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">234 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-161.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">235 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-162.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">236 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-163.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">237 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-164.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">238 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-165.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">239 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-166.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">240 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-167.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">241 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-168.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">242 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-169.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">243 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-170.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">244 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-171.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">245 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-172.jpg" style="width:100%" alt="Don Miguelo Concert">
            </div>

            <div class="eventSlides">
                <div class="numbertext">246 / 246</div>
                <img class="demo cursor" id="galleryImg" src="img/Events/Don%20Miguelo%20Concert-173.jpg" style="width:100%" alt="Don Miguelo Concert">
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
                <div class="numbertext">1 / 3</div>
                <!--video controls id="galleryVid" src="vid/event_video.MP4" title="Miss Dominican Republic 2019" style="width:100%"></video-->
                <video id="galleryVid" title="Miss Dominican Republic 2019" style="width:100%" controls>
                    <source src="vid/event_video.MP4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <p><center style="color: white;">Miss Dominican Republic 2019</center></p>
            </div>

            <div class="videoSlides">
                <div class="numbertext">2 / 3</div>
                <!--video controls id="galleryVid" src="vid/event_video2.mp4" title="El Varon De La Bachata" style="width:100%"></video-->
                <video id="galleryVid" title="El Varon De La Bachata" style="width:100%" controls>
                    <source src="vid/event_video2.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <p><center style="color: white;">El Varon De La Bachata</center></p>
            </div>

            <div class="videoSlides">
                <div class="numbertext">3 / 3</div>
                <!--video controls id="galleryVid" src="vid/event_video2.mp4" title="El Varon De La Bachata" style="width:100%"></video-->
                <video id="galleryVid" title="Don Miguelo Concert" style="width:100%" controls>
                    <source src="vid/event_video3.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <p><center style="color: white;">Don Miguelo Concert</center></p>
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
