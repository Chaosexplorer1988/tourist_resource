<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<script>
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            pager: true,
        });
    });

</script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="../../js/move-top.js"></script>
<script type="text/javascript" src="../../js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
        });
    });
</script>
<div class="header" id="home">

    <div class="header-top">
        <div class="container">
            <div class="icon">
                <ul>
                    <li><i class="message"></i></li>
                    <li><a href="mailto:b2c@micronetgroup.co.in">b2c@micronetgroup.co.in</a></li>
                    <li><i class="phone"></i></li>
                    <li><p>+91 9540-01-02-03</p></li>
                </ul>
            </div>
            <div class="social-icons">
                <a href="https://www.facebook.com/pages/White-Label-Travel-Portal-Solutions/442768912569752" target="new"><i class="icon1"></i></a>
                <a href="https://plus.google.com/115975902111090220647/about" target="new"><i class="icon2"></i></a>
                <a href="https://twitter.com/whitelabeltrav2" target="new"><i class="icon3"></i></a>
                <a href="https://www.pinterest.com/bkairtck/white-label-travel-portal-solutions/" target="new"><i class="icon4"></i></a>
                <a href="http://whitelabeltravelportaldevelopment.blogspot.in/" target="new"><i class="icon5"></i></a>
                <a href="#"><i class="icon6"></i></a>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="container">
        <div class="header-bottom">
            <div class="logo">
                <h1><a href="index.html"><img src="../images/logo.jpg" alt="white label travel solutions" title="white label travel solutions"/></a></h1>
            </div>
            <div class="top-menu">
                <span class="menu"><img src="../images/nav-icon.png" alt="white label travel website"/></span>
                <ul>
                    <nav class="cl-effect-5">
                        <li><a href="/" class="active"><span data-hover="Маршруты">Маршруты</span></a></li>
                        <li><a href="about-us-white-label-travel-portal.html"><span data-hover="О нас">О нас</span></a></li>
                        <li><a href="pricing.html"><span data-hover="Цены">Цены</span></a></li>
                        <li><a href="portfolio.html"><span data-hover="Фото">Фото</span></a></li>
                        <li><a href="enquiry.html"><span data-hover="Вопросы">Вопросы</span></a></li>
                        <li><a href="contact.html"><span data-hover="Контакты">Контакты</span></a></li>
                        <li><a href="support.html"><span data-hover="Поддержка">Поддержка</span></a></li>
                    </nav>
                </ul>
                <div class="clearfix"></div>
            </div>
            <!--script-nav-->
            <script>
                $("span.menu").click(function(){
                    $(".top-menu ul").slideToggle("slow" , function(){
                    });
                });
            </script>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- header-section-ends -->
<div class="header-slider">
    <div class="slider">
        <div class="callbacks_container">
            <ul class="rslides" id="slider">
                <li><img src="../images/banner.jpg" alt="b2c white label travel portal" title="b2c white label travel portal"></li>
                <li><img src="../images/banner1.jpg" alt=" White Label Travel Portal Development" title=" White Label Travel Portal Development"></li>
                <li><img src="../images/banner2.jpg" alt="White Label travel portal solution" title="White Label travel portal solution"></li>
            </ul>
        </div>
    </div>
</div>
</div>
<div class="beautifull">
    <div class="container">
        <div class="beautifull-header">
            <h4>Our Specialized White Label Travel Portal Solutions</h4>
            <p>We provides you travel portal development service like White Label B2B Travel Portal, White Label B2C Travel Portal, White Label Travel Portal, Travel Portal API, Flight xml API more.</p>
        </div>
        <div class="beautifull-grids">
            <div class="col-md-4 beautiful-grid">
                <div class="icon1">
                    <i><img src="../images/flight-icon.png" alt="Air Ticket Booking Engine"/></i>
                </div>
                <div class="passion">
                    <h4 title="Хорватия (2 дня)">Хорватия (2 дня)</h4>
                    <p>Сплит является самым крупным городом на побережье Адриатического моря.
                        Осмотреть Дворец Диоклетиана, древнеримский комплекс в центре города (раньше фильм Игра престолов!).
                        Пляж бачвице, известный своим мягким песком и прозрачной водой, является излюбленным с местными жителями. Попробовать игру Пицигина, традиционную игру от сплит играла на мелководье.

                        Аэропорт сплита находится в 15,5 миль (25 км) к западу от Сплита. Есть также железнодорожное сообщение между Сплите и Загребе.
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 beautiful-grid">
                <div class="icon1">
                    <i><img src="../images/hotel-icon.png" alt="Hotel Booking"/></i>
                </div>
                <div class="passion">
                    <h4 title="Hotel Booking">Hotel Booking</h4>
                    <p>Advanced XML and API integration makes our Online Hotel Booking System unique and search for the lowest tariffs available with hotels. After selecting the particular search result it will be redirected to payment gateway for payment processing.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 beautiful-grid">
                <div class="icon1">
                    <i><img src="../images/holiday-icon.png" alt="Holiday Booking" /></i>
                </div>
                <div class="passion">
                    <h4 title="Holiday Booking">Holiday Booking</h4>
                    <p>Advanced XML and API integration makes our Online Domestic & International Holidays
                        booking System unique and search for the lowest tariffs available with hotels. After selecting the particular search result it will be redirected to payment gateway for payment processing.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="beautifull-grids">
            <div class="col-md-4 beautiful-grid">
                <div class="icon1">
                    <i><img src="../images/xml-api-icon.png" alt="Travel API Intetration"/></i>
                </div>
                <div class="passion">
                    <h4 title="Travel API Intetration">Travel API Intetration</h4>
                    <p>We offer wide range Travel/Hospitality technology solution to the global clients.
                        Travel portal domain is one of the large component in e-Commerce vertical. Travel portal development holds various Online Reservation System & Online booking software.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 beautiful-grid">
                <div class="icon1">
                    <i><img src="../images/payment-gateway-icon.png" alt="Payment Gateway"/></i>
                </div>
                <div class="passion">
                    <h4 title="Payment Gateway">Payment Gateway</h4>
                    <p>White Label travel portal provide online payment gateway in your travel portal website. Customer make payment online through payumoney payment gateway direct your account. You can pay through Credit Card/Debit Card/Netbanking.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 beautiful-grid">
                <div class="icon1">
                    <i><img src="../images/support-icon.png" alt="Maintenance & Support"/></i>
                </div>
                <div class="passion">
                    <h4 title="Maintenance & Support">Maintenance & Support</h4>
                    <p>We offer website maintenance services to global Clients for Online Robust Meta Search, Travel Portal Development. Flight Reservation System, Hotel Reservation System, Holiday Packages Domestic & International.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>


    </div>
</div>
<div class="checkout-section">
    <div class="container">
        <div class="checkout-header">
            <h4>Latest Works</h4>
            <p  title="ravel Portal Development">Fully Responsive Design Travel Portal Development. Your Website looks perfectly good on any modern device</p>
        </div>
        <div id="portfoliolist">
            <div class="portfolio">
                <div class="portfolio-wrapper">
                    <a href="#small-dialog" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                        <img class="work-img" src="../images/pic1.jpg" alt="Travel Portal Development" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="../images/icon-eye.png" alt="Travel Portal Development"/></h2>
                        </div></a>
                </div>
                <div class="bottom-header">
                    <h5>Visit Website</h5>
                    <p><a href="http://www.myairtravel.in/" target="new"> www.myairtravel.in</a></p>
                </div>
            </div>
            <div class="portfolio">
                <div class="portfolio-wrapper">
                    <a href="#small-dialog1" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                        <img class="work-img" src="../images/pic2.jpg" alt="Travel Portal Development" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="../images/icon-eye.png" alt="Travel Portal Development"/></h2>
                        </div></a>
                </div>
                <div class="bottom-header">
                    <h5>Visit Website</h5>
                    <p><a href="http://www.pearlint.in/" target="new">www.pearlint.in</a></p>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>


        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
                });
            });
        </script>
        <!-- Script for gallery Here -->
        <script type="text/javascript" src="../js/jquery.mixitup.min.js"></script>
        <script type="text/javascript">
            $(function () {

                var filterList = {

                    init: function () {

                        // MixItUp plugin
                        // http://mixitup.io
                        $('#portfoliolist').mixitup({
                            targetSelector: '.portfolio',
                            filterSelector: '.filter',
                            effects: ['fade'],
                            easing: 'snap',
                            // call the hover effect
                            onMixEnd: filterList.hoverEffect()
                        });

                    },

                    hoverEffect: function () {

                        // Simple parallax effect
                        $('#portfoliolist .portfolio').hover(
                            function () {
                                $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                                $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
                            },
                            function () {
                                $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                                $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                            }
                        );

                    }

                };

                // Run the show!
                filterList.init();


            });
        </script>
        <!-- Gallery Script Ends -->




    </div>
</div>

<!------------------------------------------------------------------------------>


<div class="chandan-raj">
    <div class="container">
        <h4 title="White Label Travel Portal"><font color="#000000">Welcome to </font>White Label Travel Portal</h4><br>
        <p>If you are in travel business and want to grow rapidly then creating your own web travel portal will be worthy decision. www.whitelabeltravelportal.com. provides you <strong title="travel portal development service">travel portal development service</strong> like <strong>White Label B2B Travel Portal, White Label B2C Travel Portal, White Label Travel Portal, Travel Portal API, Flight xml API more</strong>. If you are developing your <strong title="travel business">travel business</strong> or entering for the first time in e-business, we are here to help you find all the travel related solutions. We provide customized <strong title="White Label travel portal development">White Label travel portal development</strong> to your changing requirements.<br><br>

            We influence the travel technology market with innovative business solutions and strive to be a one-stop shop for all your travel technology needs. We <strong title="White Label develop travel portals">White Label develop travel portals</strong> that can generate monetary returns for you at every single click. By providing the best class <strong title="travel portal development services">travel portal development services</strong> we strive to improve the client’s capability, thereby helping them achieve their objectives. The objective behind tour and <strong title="travel portal development">travel portal development</strong> is to enhance the business territory for those who are dealing in this field and at the same time to help the online visitors who visits such websites with the hope to access the related service.<br><br>

            <strong>Travel Portal XML</strong> So why are you wasting your valuable time get agency online today in a matter of days at very sensible price. <strong title="White Label Travel portal development company">White Label Travel portal development company</strong> gives you the best solutions in travel industry so that you could offer your customer guaranteed best deals in Air Tickets, Hotel, Bus Tickets, Train Tickets and Tour Packages. <strong title="Travel Portal development">Travel Portal development</strong> also gives you a choice to choose too many largest airline consolidators in India. We also provide you best commission in the market. if you are a new in travel domain there is nothing to worry about we will give you proper training absolutely free for air, rail, & hotel booking or start a new <strong title="travel agency">travel agency</strong>. <br><br>

            We believe in such travel websites which are easily navigable and where in people can get the required information only through few clicks. </p>

    </div>
</div>



<div class="contact-section">
    <div class="container">
        <div class="contact-grids">
            <div class="col-md-3 contact-grid">
                <h5>who we are</h5>
                <p>WLTP is a White lavel travel Solution company in India serving globally. Our prime focus is on providing customized and ready-made platforms for businesses to take their processes online.</p>
                <a href="Who-we-are.html" class="more">more about us<img src="../images/arrow.png"></a>
            </div>
            <div class="col-md-3 contact-grid">
                <h5>Why Choose us</h5>
                <p>We monitor the quality of our services to uphold reputation ensure satisfied customers, acquire new customers and generate repeat business. Our team comprises of professional experts with latest technology know how having ability to handle complex.</p>
                <a href="why-choose-us.html" class="more">more about us<img src="../images/arrow.png"></a>

            </div>
            <div class="col-md-3 contact-grid">
                <h5> Our Company</h5>
                <div class="buttom-nav">
                    <ul>
                        <li><a href="index.html">Home </a></li>
                        <li><a href="about-us-white-label-travel-portal.html">About us</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="enquiry.html">Enquiry</a></li>
                        <li><a href="contact.html">Contact us</a></li>
                        <li><a href="support.html">Support</a></li>
                    </ul>

                </div>


            </div>
            <div class="col-md-3 contact-grid">
                <h5>get in touch </h5>
                <p>We're here to help by Phone,Email & Instant Message.</p>
                <div class="icon2">
                    <ul>

                        <li><p class="label1">287, Sant Nagar, East of kailash, New Delhi - 110065.</p></li>
                    </ul>
                    <ul>
                        <li><i class="phone"></i></li>
                        <li><p class="label1">+91 9540-01-02-03 </p></li>
                    </ul>
                    <ul>
                        <li><i class="message"></i></li>
                        <li><a href="mailto:b2c@micronetgroup.co.in">b2c@micronetgroup.co.in</a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="footer-section">
    <div class="container">
        <div class="footer-left">
            <p>&copy; whitelabeltravelportal.com 2015  All rights  Reserved | Design by<a href="http://www.websitedesignforce.com/" target="target_blank">WDF</a></p>
        </div>
        <div class="bottom-menu">
            <ul>
                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                <li><a href="disclaimer.html">Disclaimer</a></li>
                <li><a href="terms-conditions.html">Term & Conditions</a></li>
                <li><a href="site-map.html">Site Map</a></li>
                <li><a href="blog.html">Blog</a></li>

            </ul>
        </div>
        <div class="clearfix"></div>
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
