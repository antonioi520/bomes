<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 6/17/2019
 * Time: 5:31 PM
 */
?>

<?php include("views/header.html") ?>

<link href="css/mobile-min.css" rel="stylesheet">
<link href="css/css.css" rel="stylesheet">

<body>
<!-- Header -->

<?php include("views/nav.html") ?>

<div class="headerwrapper" id="iphone">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="z-index: 1;margin-top:-6.250em;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/TheaterInterior/DSC_0895.jpg" class="d-block w-100" alt="theatre interior" style="height:59.375em;filter:brightness(20%);object-fit: cover;">
                <div class="carousel-caption d-md-block" id="hero" style="top:150px;">

                    <center>
                        <br><br><br><br>
                        <img src="img/logoT.png" alt="bomes theatre logo" style="height:30%;width: 30%;z-index: 1;object-fit: contain;filter:brightness(95%);margin-top:-6em;margin-bottom:10px;">
                    </center>
                    <center>
                        <h1 class="headertext" style="margin-bottom: 50px;display: inline">The <h1 class="headertext" style="color:goldenrod;margin-bottom: 50px;display: inline">Bomes</h1> <h1 class="headertext" style="margin-bottom: 50px;display: inline">Theatre</H1>
                    </center>
                    <center>
                        <a href="events.php" id="box" style="margin-top: 1em;display:block">
                            <h2 id="headerHours">View Events</h2>
                        </a>
                    </center>
                    <center>
                        <ul class="headericons">
                            <li style="display: inline;padding:0.5em;"> <div id="test"><a href="https://www.facebook.com/TheBomesTheatre/" target="_blank" class="circleborder" rel="noopener" ><i class="fab fa-facebook-f iconcolor"></i></a></div></li>
                            <li style="display: inline;"><div id="test"><a href="https://www.instagram.com/bomestheatreri/" target="_blank" class="circleborder" rel="noopener"> <i class="fab fa-instagram iconcolor"></i></a></div></li>
                        </ul>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<div class="alert alert-success" style="text-align: center">
    <strong style="text-align: center">We are now hiring!</strong>
</div>
<div class="container" style="text-align: center" id="content-desktop896">
    <img src="img/hiring.jpeg" alt="hiring bartender information" style="height:500px;display: block;margin: 0 auto;">
</div>
<div id="content-mobile896">
    <img src="img/hiring.jpeg" alt="hiring bartender information" style="width: 100%;height:100%;padding:0 10px;">
</div>-->
<!--==========================
  About Section
  ============================-->
<section id="about">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title-lowercase" style="font-family: 'Niconne', cursive;letter-spacing: 0.05em;font-size: 3.125em;margin-bottom: 35px;line-height: 4px;">About us</h3>
                <div class="section-title-divider" style="margin-bottom: 30px;"></div>
            </div>
        </div>
    </div>
    <div class="container about-container wow fadeInUp">
        <div class="row">
            <div class="col-lg-6 about-img" id="content-desktop896">
                <img src="img/Staff/ABOUTUS_NEW.jpg" alt="staff" style="height:638px;object-fit: cover;filter:brightness(100%) grayscale(30%)" id="aboutImg">
            </div>

            <div class="col-lg-6 about-img" id="content-mobile896">
                <center>
                    <img src="img/Staff/ABOUTUS_NEW.jpg" alt="staff" style="height:638px;object-fit: cover;filter:brightness(100%) grayscale(30%);" id="aboutImg">
                </center>
            </div>

            <div class="col-md-6 about-content">
                <h2 class="about-title" style="margin-bottom: 14px;display: inline ">The <h2 class="about-title" style="margin-bottom: 14px;color:goldenrod;display: inline ">revitalization</h2> <h2 class="about-title" style="margin-bottom: 14px;display: inline ">of the historic Bomes Theatre</h2>
                <p class="about-text">
                    The Bomes Theatre, on the south side of Providence is about to get new life bringing you monthly performance events with all types of genres.
                </p>
                <p class="about-text">
                    We provide services for a variety of events, including weddings, birthdays, baby showers and more! Book an event with us and
                    create memories that will last a lifetime.
                </p>
                <h3 style="font-weight: bold;color: #333;margin-bottom: 14px;">Find Us:</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2974.4541081971906!2d-71.41585268432019!3d41.79697697846551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e44f893f923a5f%3A0x86f9ff49752031d1!2s1017+Broad+St%2C+Providence%2C+RI+02905!5e0!3m2!1sen!2sus!4v1560838747202!5m2!1sen!2sus" width="400" height="300" frameborder="0" style="border:0;max-width:100%" alt="map" allowfullscreen></iframe>            </div>
        </div>
    </div>

    <br id="content-desktop896"><br id="content-desktop896"><br id="content-desktop896">
    <div id="content-desktop896">
        <div class="row" id="videoRow" style="display: inline; padding-top: 0px;">
            <center>
                <iframe id="galleryVid" width="58%" height="525px" src="https://www.youtube.com/embed/yNe-c37CH9A?rel=0"
                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" alt="video" allowfullscreen>
                </iframe>
            </center>
        </div>
    </div>

    <div id="content-mobile896">
        <div class="row" id="videoRow" style="display: inline; padding-top: 0px;">
            <center>
                <iframe id="galleryVid" width="98%" height="325px" src="https://www.youtube.com/embed/yNe-c37CH9A?rel=0"
                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" alt="video" allowfullscreen>
                </iframe>
            </center>
        </div>
    </div>

    <!--div id="content-mobile896">
        <img src="img/welcome_poster.jpeg" alt="service venue information" style="width: 100%;height:100%;">
    </div-->

</section>
<!--images in middle -->
<section id="middleImages">
    <div class="wrapper" id="iphone">
        <div class="row" style="overflow: hidden;">
            <div class="col-lg-6">
                <div style="margin: auto;width: 50%;position: absolute;z-index: 1;left:20%;top:20%;">
                    <img src="img/gd3.png" alt="img header" style="object-fit: contain;">
                    <h1 style="color:goldenrod;font-weight: bolder;padding-top: 10%;margin-bottom: 0;">BOOK AN EVENT</h1>
                    <strong style="color:white;letter-spacing: 0.05em;">Looking to book an event? The Bomes Theatre can accommodate all of your needs. Take a look at our event contract
                        <a href="docs/bomes%20theatre%20event%20contract%2008.06.19.pdf" target="_blank" style="text-decoration: underline;color:goldenrod;">here</a>.</strong><br><br><br>
                    <a href="booking" id="ingredientBox" style="height: 4.000em;"><h2 id="ingredientBoxText">Book Now</h2></a>
                </div>
                <img src="img/TheaterInterior/concert-46.jpg" alt="theatre interior" style="height:43.750em;width: 62.500em;object-fit: cover;filter:brightness(40%) grayscale(80%);float:left;">
            </div>
            <div class="col-lg-6">
                <div style="margin: auto;width: 50%;position: absolute;z-index: 1;left:20%;top:20%;">
                    <img src="img/gd3.png" alt="img header">
                    <h1 style="color:goldenrod;font-weight: bolder;padding-top: 10%;margin-bottom: 0;">ONGOING EVENTS</h1>
                    <strong style="color:white;letter-spacing: 0.05em;">Take a look at our upcoming events, including musical guests, contests and more!</strong><br><br><br>
                    <a href="events" id="ingredientBox" style="width:15.000em; height: 4.000em;"><h2 id="ingredientBoxText" style="padding-top: 10px;">View Events</h2></a>
                </div>
                <img src="img/Events/Concert-15.jpg" alt="concert" style="height:43.750em;width: 62.500em;object-fit: cover;filter:brightness(40%) grayscale(80%);">
            </div>
        </div>
    </div>
</section>
<!--contact-->
<section id="contact">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title-lowercase" style="font-family: 'Niconne', cursive;letter-spacing: 0.05em;font-size: 3.125em;margin-bottom: 5px;">Contact Us</h3>
                <div class="section-title-divider" style="margin-bottom: 30px;"></div>
                <p class="section-description">If you have any questions,
                    feel free to reach out to us and we'll get right back to you. <br>
                    Looking to book an event? Fill out the form <a href="booking.php" style="text-decoration: underline">here</a>. </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 col-md-push-2" style="padding-bottom: 0.625em;">
                <div class="form">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage">One or more of your entries appears to be invalid, please try again.</div>
                    <form action="" method="post" role="form" class="contactForm" id="myForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" minlength="2"  required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"  required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" minlength="4"  required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5"  placeholder="Message" minlength="2" required></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <!-- captcha-->
                            <div class="g-recaptcha" data-sitekey="6LfyMaoUAAAAAGI59fbDwBbcF9dY-4Yp8vEmbBsf" data-callback="recaptchaCallback"></div>
                        </div>

                        <div class="text-center"><button style="background-color: goldenrod" value="Submit" type="submit" onclick="recaptchaCallbackSubmit()">Submit</button></div>
                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-4 col-md-push-2">
                <div class="info">
                    <br id="content-mobile">
                    <div>
                        <i class="fas fa-phone" style="color: goldenrod"></i><h4 style="padding-left:1.6em;">Phone</h4>
                        <p>(401) 588-0974</p>
                    </div>
                    <div style="padding-top: 1.250em;">
                        <i class="far fa-calendar-alt" style="color: goldenrod"></i><h4 style="padding-left:1.6em;">Hours</h4>
                        <strong>Mon:</strong><p style="padding-left:0;"> 10:00am - 4:00pm</p><br>
                        <strong>Tue:</strong><p style="padding-left:0;"> 10:00am - 4:00pm</p><br>
                        <strong>Wed:</strong><p style="padding-left:0;"> 10:00am - 4:00pm</p><br>
                        <strong>Thurs:</strong><p style="padding-left:0;"> 10:00am - 4:00pm</p><br>
                        <strong>Fri:</strong><p style="padding-left:0;"> 10:00am - 4:00pm</p><br>
                        <strong>Sat:</strong><p style="padding-left:0;"> Appointment Only</p><br>
                        <strong>Sun:</strong><p style="padding-left:0;"> Appointment Only</p>
                    </div>
                    <div style="padding-top: 1.250em;">
                        <i class="fas fa-location-arrow" style="color: goldenrod"></i><h4 style="padding-left:1.6em;">Location</h4>
                        <p>1017 Broad Street</p><br>
                        <p>Providence, RI 02905</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br><br><br>

    <!-- Manager/Rental Agent Desktop View  -->
    <div class="container" id="content-desktop896">
        <div class="row">
            <!--img src="img/manager.jpg" alt="service venue information" style="width: 50%;"-->
            <img src="img/rental_agent.jpg" alt="service venue information" style="width: 90%;">
        </div>
    </div>

    <!-- Manager/Rental Agent Mobile View  -->
    <div class="container" id="content-mobile896">
        <!--h3 class="section-title-lowercase" style="font-family: 'Niconne', cursive;letter-spacing: 0.05em;font-size: 3.125em;margin-bottom: 5px;">Manager</h3>
        <div class="section-title-divider" style="margin-bottom: 30px;"></div>
        <div class="row">
            <img src="img/manager.jpg" alt="service venue information" style="width: 100%;height: 100%;">
        </div>
        <br><br-->
        <h3 class="section-title-lowercase" style="font-family: 'Niconne', cursive;letter-spacing: 0.05em;font-size: 3.125em;margin-bottom: 5px;">Rental Agent</h3>
        <div class="section-title-divider" style="margin-bottom: 30px;"></div>
        <div class="row">
            <img src="img/rental_agent.jpg" alt="service venue information" style="width: 100%;height:100%;">
        </div>
    </div>
</section>

<!-- #footer -->
<?php include("views/footer.html")?>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<?php include("views/includebottom.html") ?>

<script type="text/javascript">
    var frm = $('#myForm');
    frm.submit(function (ev) {
        $.ajax({
            type: frm.attr('method'),
            url: "send_email.php",
            data: frm.serialize(),
            success: function (data) {

                return false;
            },
            error: function()
            {
                $("#errormessage").show();

                return false;
            }
        });

        ev.preventDefault();
    });
</script>
<script>
    var invalidClassName = 'invalid'
    var inputs = document.querySelectorAll('input, select, textarea')
    inputs.forEach(function (input) {
        // Add a css class on submit when the input is invalid.
        input.addEventListener('invalid', function () {
            input.classList.add(invalidClassName)
        })

        // Remove the class when the input becomes valid.
        // 'input' will fire each time the user types
        input.addEventListener('input', function () {
            if (input.validity.valid) {
                input.classList.remove(invalidClassName)
            }
        })
    })
</script>
<script>
    function recaptchaCallbackSubmit(){
        //var response = grecaptcha.getResponse().length;
        if(grecaptcha.getResponse().length > 0){
            //captcha validated and got response code
            $("#sendmessage").show();
            $("#errormessage").hide();
           // $("#myForm")[0].reset();
            grecaptcha.reset();
            return false;
        }else{
            //$("#myForm")[0].reset();
            grecaptcha.reset();
            $("#errormessage").show();
            $("#sendmessage").hide();

            return false;
        }
    }
</script>

</body>
</html>
