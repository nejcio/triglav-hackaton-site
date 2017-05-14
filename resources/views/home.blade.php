<!DOCTYPE HTML>
<html>
    <head>
        <title>Freelance Insurance | Home</title>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link rel="shortcut icon" href="images/fav.png" />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
         <!---- start-smoth-scrolling---->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
  rel="stylesheet"  type='text/css'>

         <!-- Custom Theme files -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />
         <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        </script>
        <!----webfonts---->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700' rel='stylesheet' type='text/css'>
        <!----//webfonts---->
        <!----start-top-nav-script---->
        <script>
            $(function() {
                var pull        = $('#pull');
                    menu        = $('nav ul');
                    menuHeight  = menu.height();
                $(pull).on('click', function(e) {
                    e.preventDefault();
                    menu.slideToggle();
                });
                $(window).resize(function(){
                    var w = $(window).width();
                    if(w > 320 && menu.is(':hidden')) {
                        menu.removeAttr('style');
                    }
                });
            });
        </script>
        <!----//End-top-nav-script---->
</head>
    <body>
        <!-----start-container----->
        <!-----header-section------>
        <div class="header-section">
            <!----- start-header---->
            <div id="home" class="header">
                <div class="container">
                    <div class="top-header">
                        <div class="logo">
                            <a href="#"><img src="images/lanceout2.png" title="logo" /></a>
                        </div>
                        <!----start-top-nav---->
                         <nav class="top-nav">
                            <ul class="top-nav">
                                <li class="active"><a href="#home" class="scroll">Home </a></li>
                                <li class="page-scroll"><a href="#fea" class="scroll">FEATURES</a></li>
                                <li class="page-scroll"><a href="#gallery" class="scroll">OUR APP</a></li>
                                <li class="contatct-active" class="page-scroll"><a href="#contact" class="scroll">Contact</a></li>
                            </ul>
                            <a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
                        </nav>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <!----- //End-header---->
            <!----- start-slider---->
            <!----start-slider-script---->
            <script src="js/responsiveslides.min.js"></script>
             <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                  // Slideshow 4
                  $("#slider4").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                      $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                      $('.events').append("<li>after event fired.</li>");
                    }
                  });

                });
              </script>
            <!----//End-slider-script---->
            <!-- Slideshow 4 -->
                <div  id="top" class="callbacks_container">
                  <ul class="rslides" id="slider4">
                    <li>
                      <img src="images/img2.jpg" alt="">
                      <div class="caption text-center">
                        <div class="slide-text-info">
                            <h1>WELCOME, <span>Freelancer</span></h1>
                            <h2>Secure your work, health and gear</h2>
                            <div class="slide-text">
                                <ul>
                                    <li><span> </span>Get paid sick leave</li>
                                    <li><span> </span>Don't wory about your gear</li>
                                    <li><span> </span>Get paid 100%</li>
                                    <li><span> </span>Legal help</li>
                                </ul>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="big-btns">
                                <a class="download" href="#"><i class="fa fa-umbrella" aria-hidden="true"></i>Get Insured</a>

                            </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="clearfix"> </div>

                    <div class="divice-demo">
                        <img src="images/device-in-hand.png" title="demo" />
                    </div>

            <!----- //End-slider---->
            </div>

            <div id="fea" class="features">
                <div class="container">
                    <div class="section-head text-center">
                        <h2><span class="frist"> </span>WE HAVE <span class="bold">YOUR BACK</span><span class="second"></span></h2>
                        <p>Insure your<span class="bold"> active payments, your gear and get paid sick leave</span> simple&fast. Insurance premium'll be on your account <span class="bold">next day</span> after end of your sickleave</p>
                    </div>

                    <div class="features-grids">
                        <div class="col-md-4 features-grid">
                            <div class="features-grid-info">
                                <div class="col-md-2 features-icon">
                                    <i class="fa fa-user-o" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-10 features-info">
                                    <h4>CREATE ACCOUNT</h4>
                                    <p>You'll go through several steps & make live talk to our assistant</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="features-grid-info">
                                <div class="col-md-2 features-icon">
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-10 features-info">
                                    <h4>CHOSE A PRODUCT OR MORE</h4>
                                    <p>You can chose from various products, combinations or all of them </p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="features-grid-info">
                                <div class="col-md-2 features-icon">
                                    <i class="fa fa-umbrella" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-10 features-info">
                                    <h4>GET INSURED</h4>
                                    <p>Every product has dashboard with overview of main informations</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>

                        </div><!---end-features-grid---->
                        <div class="col-md-4 features-grid">
                            <div class="big-divice">
                                <img src="images/device.png" title="features-demo" />
                            </div>
                        </div><!---end-features-grid---->
                        <div class="col-md-4 features-grid">
                            <div class="features-grid-info">
                                <div class="col-md-2 features-icon1">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-10 features-info">
                                    <h4>LOYALTY BONUSES - HIGHER PAYOUT</h4>
                                    <p>Special loyalty extra fees for healthy customers</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="features-grid-info">
                                <div class="col-md-2 features-icon1">
                                    <i class="fa fa-gavel" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-10 features-info">
                                    <h4>REPORT SICKNESS, GEAR DAMAGE, UNPAID CHECKS</h4>
                                    <p>Report with in-app feature buttons</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="features-grid-info">
                                <div class="col-md-2 features-icon1">
                                    <i class="fa fa-money" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-10 features-info">
                                    <h4>GET MONEY NEXT DAY</h4>
                                    <p>Recive money next day after claming gear damage, ending sick leave</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>

                        </div><!---end-features-grid-->
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <div id="sick">
                <div class="container">
                    <div class="section-head text-center">
                        <h2><span class="frist"> </span><span class="bold">PAID SICK</span> LEAVE INSURANCE<span class="second"></span></h2>
                        <p>Insure your<span class="bold"> acitve payments, your gear and get paid sick leave</span> simple&fast. Insurance premium'll be on your account next day after end of your sickleave</p>
                    </div>

                    <div class="features-grids">
                        <div class="col-md-8 features-grid">
                            <div class="features-grid-info">
                                <div class="col-md-2 features-icon">

                                </div>
                                <div class="col-md-10 features-info">
                                    <h3><li><span class="bold">NO REPORT</span> FIRST DAY</li></h3>
                                    <p>You don't have to do nothing on the first day of sick leave, just click the app button I'SICK</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="features-grid-info">
                                <div class="col-md-2 features-icon">

                                </div>
                                <div class="col-md-10 features-info">
                                    <h3><li><span class="bold">100 €/day</span> PAYOUT</li></h3>
                                    <p>You can get up to 100€ per day sick leave payout without yearly limit (up to 30 days streak sick leave)</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="features-grid-info">
                                <div class="col-md-2 features-icon">

                                </div>
                                <div class="col-md-10 features-info">
                                    <h3><li><span class="bold">LOYALTY</span> EXTRA FEES</li></h3>
                                    <p>Get bonus fees for healthy live</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>

                        </div><!---end-features-grid-->
                        <div class="col-md-4 features-grid">
                            <div class="big-divice">
                                <img src="images/device.png" title="features-demo" />
                            </div>
                        </div><!---end-features-grid-->

                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>

                <div id="gallery" class="screen-shot-gallery">
                        <div class="container">
                            <div class="section-head text-center">
                                <h3><span class="frist"> </span>LANCEOUT APP<span class="second"> </span></h3>
                                <p><span class="bold">Simple&quick</span> install and you are on your way for reporting <span class="bold">sick leave,</span> gear compensation or request for legal help</p>
                            </div>
                        </div>
                        <!----sreen-gallery-cursual---->
                        <div class="sreen-gallery-cursual">
                             <!-- requried-jsfiles-for owl -->
                            <link href="css/owl.carousel.css" rel="stylesheet">
                                <script src="js/owl.carousel.js"></script>
                                    <script>
                                $(document).ready(function() {
                                  $("#owl-demo").owlCarousel({
                                    items : 3,
                                    lazyLoad : true,
                                    autoPlay : true,
                                  });
                                });
                                </script>
                             <!-- //requried-jsfiles-for owl -->
                             <!-- start content_slider -->
                             <div class="container">
                               <div id="owl-demo" class="owl-carousel">
                                    <div class="item">
                                        <img class="lazyOwl" data-src="images/Dashboard.jpg" alt="screen-name">
                                    </div>
                                    <div class="item">
                                        <img class="lazyOwl" data-src="images/Onboarding-1.jpg" alt="screen-name">
                                    </div>
                                    <div class="item">
                                        <img class="lazyOwl" data-src="images/Sick-modal.jpg" alt="screen-name">
                                    </div>
                                    <div class="item">
                                        <img class="lazyOwl" data-src="images/Sick-leaves-detail.jpg" alt="screen-name">
                                    </div>
                                    <div class="item">
                                        <img class="lazyOwl" data-src="images/Sick-leaves-detail-1.jpg" alt="screen-name">
                                    </div>
                                    <div class="item">
                                        <img class="lazyOwl" data-src="images/Sick-leaves-contcts.jpg" alt="screen-name">
                                    </div>
                                    <div class="item">
                                        <img class="lazyOwl" data-src="images/Sick-leave-video.jpg" alt="screen-name">
                                    </div>
                                    <div class="item">
                                        <img class="lazyOwl" data-src="images/Sick-modal.jpg" alt="screen-name">
                                    </div>
                              </div>
                        </div>
                        <!--//sreen-gallery-cursual---->
                    </div>
                </div>
                <!--//screen-shot-gallery---->
                <!---- show-reel ---->
                <!---pop-up-box---->
                    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
                    <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
                    <!---//pop-up-box---->
                <div class="show-reel text-center">
                    <div class="container">
                        <h5>AWESOME  <i class="fa fa-heart"></i> INSURANCE</h5>
                        <div id="small-dialog" class="mfp-hide">

                    </div>
                     <script>
                            $(document).ready(function() {
                            $('.popup-with-zoom-anim').magnificPopup({
                                type: 'inline',
                                fixedContentPos: false,
                                fixedBgPos: true,
                                overflowY: 'auto',
                                closeBtnInside: true,
                                preloader: false,
                                midClick: true,
                                removalDelay: 300,
                                mainClass: 'my-mfp-zoom-in'
                            });

                            });
                    </script>
                    </div>
                </div>

            <div id="contact" class="getintouch">
                <div class="container">
                    <div class="section-head text-center">
                        <h3><span class="frist"> </span>GET IN TOUCH<span class="second"> </span></h3>
                        <p>If you would like to find out more about how we can help you, please give us a call or drop us an email.</p>
                    </div>

                    <div class="col-md-9 getintouch-left">
                        <div class="contact-form col-md-10">
                            <h3>Say hello!</h3>
                            <form>
                                <input type="text" placeholder="Name" required />
                                <input type="text"  placeholder="Email" required />
                                <textarea placeholder="Message" required /> </textarea>
                                <input type="submit" value="Send message" />
                            </form>
                        </div>
                        <ul class="footer-social-icons col-md-2 text-center">
                            <li><a class="f-be" href="#"><span> </span></a></li>
                            <li><a class="f-tw" href="#"><span> </span></a></li>
                            <li><a class="f-db" href="#"><span> </span></a></li>
                            <li><a class="f-ti" href="#"><span> </span></a></li>
                            <li><a class="f-go" href="#"><span> </span></a></li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>
                    <div class="col-md-2 getintouch-left">
                        <div class="footer-divice">
                            <img src="images/device-half.png" title="getintouch" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer">
                <div class="container">
                    <div class="footer-grids">
                        <div class="col-md-3 footer-grid about-info">
                            <a href="#"><img src="images/lanceout2.png" title="Umbrella" /></a>
                            <p>eusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="col-md-3 footer-grid subscribe">
                            <h3>Subscribe </h3>
                            <form>
                                <input type="text" placeholder="" required />
                                <input type="submit" value="" />
                            </form>
                            <p>eusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        </div>
                        <div class="col-md-3 footer-grid explore">
                            <h3>Explore</h3>
                            <ul class="col-md-6">
                                <li><a href="#">Envato</a></li>
                                <li><a href="#">Themecurve</a></li>
                                <li><a href="#">Kreativeshowcase</a></li>
                                <li><a href="#">Freebiescurve</a></li>
                            </ul>
                            <ul class="col-md-6">
                                <li><a href="#">Themeforest</a></li>
                                <li><a href="#">Microsoft</a></li>
                                <li><a href="#">Google</a></li>
                                <li><a href="#">Yahoo</a></li>
                            </ul>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="col-md-3 footer-grid copy-right">
                            <p>Eusmod tempor incididunt ut labore et dolore magna aliqua. ut labore et dolore magna aliqua. </p>

                        </div>
                        <div class="clearfix"> </div>
                        <script type="text/javascript">
                            $(document).ready(function() {
                                /*
                                var defaults = {
                                    containerID: 'toTop', // fading element id
                                    containerHoverID: 'toTopHover', // fading element hover id
                                    scrollSpeed: 1200,
                                    easingType: 'linear'
                                };
                                */

                                $().UItoTop({ easingType: 'easeOutQuart' });

                            });
                        </script>
                            <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
                    </div>
                </div>
            </div>
            {{-- <!---//footer-----> --}}

    </body>
</html>

