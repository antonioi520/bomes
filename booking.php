<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 6/17/2019
 * Time: 5:31 PM
 */
?>

<?php include("views/header.html") ?>

<link href="css/mobile.css" rel="stylesheet">

<body>
<!-- Header -->

<?php include("views/nav_pages.html")?>


<div class="headerwrapper">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="z-index: 1;margin-top:-6.250em;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/Interior/MiAlmaCafeOpeningCeremony-22.jpg" class="d-block w-100" alt="..." style="height:59.375em;filter:brightness(20%);object-fit: cover;">
                <div class="carousel-caption d-md-block" id="hero" style="top:150px;">
                    <center>
                        <!--h1 class="headertext">WELCOME TO MI ALMA<br> RESTAURANT</H1-->
                    </center>
                    <center>
                        <br><br><br><br><br><br><br>
                        <img src="img/logoT.png" style="height:30%;width: 30%;z-index: 1;object-fit: contain;filter:brightness(95%);margin-top:-6em;margin-bottom:10px;">
                    </center>
                    <center>
                        <a href="#contact" id="box" style="margin-top: 1em;display:block">
                            <h2 id="headerHours">View Hours</h2>
                        </a>
                    </center>
                    <center>
                        <ul class="headericons">
                            <li style="display: inline;padding:0.5em;"> <div id="test"><a href="https://www.facebook.com/TheBomesTheatre/" target="_blank" class="circleborder"><i class="fab fa-facebook-f iconcolor"></i></a></div></li>
                            <li style="display: inline;"><div id="test"><a href="https://www.instagram.com/bomestheatreri/ target="_blank" class="circleborder"> <i class="fab fa-instagram iconcolor"></i></a></div></li>
                        </ul>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>


<!--contact-->
<section id="contact">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title-lowercase" style="font-family: 'Niconne', cursive;letter-spacing: 0.05em;font-size: 3.125em;">Book an Event</h3>
                <div class="section-title-divider"></div>
                <p class="section-description">Please fill out the form below to book your event.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 col-md-push-2" style="padding-bottom: 0.625em;">
                <div class="form">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage">One or more of your entries appears to be invalid, please try again.</div>
                    <form action="" method="post" role="form" class="contactForm" id="myForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name (First/Last)" minlength="2"  required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"  required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" minlength="7"  required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="comp_name" id="comp_name" placeholder="Company Name" minlength="2"  required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" id="address" placeholder="Address" minlength="5"  required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" id="city" placeholder="City" minlength="2"  required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="state" id="state" placeholder="State/Province/Region" minlength="2"  required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="zip" id="zip" placeholder="Postal/Zip Code" minlength="5"  required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="country" id="country" placeholder="Country" minlength="2"  required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="event_name" id="event_name" placeholder="Event Name" minlength="2"  required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="event_type" id="event_type" placeholder="Event Type" minlength="2"  required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="event_desc" rows="5"  placeholder="Event Description" minlength="10" required></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="attendees" id="attendees" placeholder="Estimated number of Attendees" minlength="1"  required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="date" id="date" placeholder="Date" minlength="1"  required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="hours" id="hours" placeholder="Hours" minlength="1"  required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <!-- captcha-->
                            <div class="g-recaptcha" data-sitekey="6LfyMaoUAAAAAGI59fbDwBbcF9dY-4Yp8vEmbBsf" data-callback="recaptchaCallback"></div>
                            <!--<img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" />
                            <br>
                            <br>
                            <input class="form-control" style="width: 50%; float: left;" placeholder="Enter captcha" type="text" name="captcha_code" size="10" maxlength="6" required />
                            <a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">
                                <img id="content-desktop" src="img/refresh_sm.png" width="9%" height="9%" style="float: left; padding-left: 4px;">
                                <img id="content-mobile" src="img/refresh_sm.png" width="13%" height="13%" style="float: left; padding-left: 4px;">
                            </a>-->
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
                        <p>(401) 403-2787</p>
                    </div>
                    <div style="padding-top: 1.250em;">
                        <i class="far fa-calendar-alt" style="color: goldenrod"></i><h4 style="padding-left:1.6em;">Hours</h4>
                        <strong>Mon:</strong><p style="padding-left:0;"> 8am-4:00pm</p><br>
                        <strong>Tue:</strong><p style="padding-left:0;"> 8am-4:00pm</p><br>
                        <strong>Wed:</strong><p style="padding-left:0;"> 8am-4:00pm</p><br>
                        <strong>Thurs:</strong><p style="padding-left:0;"> 8am-4:00pm</p><br>
                        <strong>Fri:</strong><p style="padding-left:0;"> 8am-4:00pm</p><br>
                        <strong>Sat:</strong><p style="padding-left:0;"> 8am-4:00pm</p><br>
                        <strong>Sun:</strong><p style="padding-left:0;"> 8am-4:00pm</p>
                    </div>
                    <div style="padding-top: 1.250em;">
                        <i class="fas fa-location-arrow" style="color: goldenrod"></i><h4 style="padding-left:1.6em;">Location</h4>
                        <p>1017 Broad Street</p><br>
                        <p>Providence, RI 02907</p>
                    </div>

                </div>
            </div>

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
            url: "book_event.php",
            data: frm.serialize(),
            success: function (data) {
                //alert('Your message has been sent, thank you!');
               // $("#sendmessage").show();
                //$("#myForm")[0].reset();
               // grecaptcha.reset();
                //document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random();
                return false;
            },
            error: function()
            {
                $("#errormessage").show();
                //document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random();
                return false;
            }
        });

        // apparently success/error are deprecated, try .done() and .fail() next

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
            //document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random();
            return false;
        }else{
            $("#myForm")[0].reset();
            grecaptcha.reset();
            $("#errormessage").show();
            $("#sendmessage").hide();

            return false;
        }
    }
</script>

</body>
</html>
