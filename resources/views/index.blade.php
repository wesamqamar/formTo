<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>فـــروم تو – فـــروم تو لخدمات النقل والمساعدة على الطريق</title>
	<!-- Stylesheets -->
    <link rel="icon" href="{{ asset('landing-page/images/favicon.svg') }}">
	<link href= "{{ asset('landing_page/css/style.css') }}" rel="stylesheet">
	<!-- Responsive -->
	<link href="{{ asset('landing_page/css/responsive.css') }}" rel="stylesheet">
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
	<script src="{{ asset('landing_page/js/jquery-3.2.1.min.js') }}"></script>

</head>
<body>

	<div class="main-wrapper">


          <!-- /* start navbar section */ -->
  <div id="navbar_contner_id"></div>
  <!-- /* end navbar section */ -->
		<!--header-->

        <header id="header">
			<div class="top-header">
			    <div class="container">
			        <ul class="hd-cont">
			            <li><a href="tel:(+62)546776543"><i class="fa-solid fa-phone"></i> (+62) 546 776 543</a></li>
			            <li><a href="mailto:info@fromto.sa"><i class="fa-solid fa-envelope"></i> info@fromto.sa</a></li>
			        </ul>
			        <div class="social">
			            <p>Follow Us :</p>
			            <ul>
			                <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
			                <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
			                <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
			                <li><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
			            </ul>
			        </div>
			    </div>
			</div>
			<div class="bottom-header">
			    <div class="container">
			        <div class="logo-site">
			            <a href="index">
			                <img src="{{ asset('landing_page/images/logo.png') }}" alt="" />
			            </a>
			        </div>
			        <ul class="main_menu clearfix">
			            <li><a class="page-scroll" href="index">Home</a></li>
			            <li class="active"><a class="page-scroll" href="about">About FromTo</a></li>
			            <li><a class="page-scroll" href="partners">Our Partners</a></li>
			            <li><a class="page-scroll" href="services">Our Services</a></li>
			            <li><a class="page-scroll" href="contact">Contact Us</a></li>
			            <li><a href="index_ar" class="page-scroll">العربية</a></li>
			            <li class="login-site"><a href="index_ar" class="page-scroll"><span><i class="fa-solid fa-user"></i> Login</span></a></li>
			            <li class="download-app"><a href="index_ar" class="page-scroll"><span><i class="fa-solid fa-download"></i> Download App</span></a></li>
			        </ul>
			        <div class="opt-mobail">
			            <button type="button" class="hamburger">
			                <span class="hamb-top"></span>
			                <span class="hamb-middle"></span>
			                <span class="hamb-bottom"></span>
			            </button>
			        </div>
			    </div>
			</div>
		</header>
        <section class="section_home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="home_txt wow slideInLeft" data-wow-duration="1s">
                            <h1>FromTo Transportation Services And help is on the way</h1>
                            <p>Our application specializes in express transportation services, goods transportation, delivery services, and logistics services, in order to meet the needs and demands of our customers for transportation services for factories, companies, and individuals. </p>
                            <a href="" class="btn-site">Contact Us</a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="thumb-home wow zoomIn" data-wow-duration="1s" >
                            <img src="{{ asset('landing_page/images/thumb-home.png') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div  class="shape-home">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path class="elementor-shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path>
                    <path class="elementor-shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
                    <path class="elementor-shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
                </svg>
            </div>
		</section>
		<!--section_home-->

        <section class="section_partners">
            <div class="container">
                <div class="partners_head wow fadeInUp"  data-wow-duration="2s">
                    <p><strong>FromTo</strong> partners</p>
                </div>
                <div class="owl-carousel coloum4 wow fadeInUp" data-wow-duration="2s">
                    <div class="item">
                        <figure class="item-partners"><img src="{{ asset('landing_page/images/Domoo.png') }}" alt="Image Certificates" /></figure>
                    </div>
                    <div class="item">
                        <figure class="item-partners"><img src="{{ asset('landing_page/images/Garret.png') }}" alt="Image Certificates" /></figure>
                    </div>
                    <div class="item">
                        <figure class="item-partners"><img src="{{ asset('landing_page/images/square-pixel.png') }}" alt="Image Certificates" /></figure>
                    </div>
                    <div class="item">
                        <figure class="item-partners"><img src="{{ asset('landing_page/images/Parka.png') }}" alt="Image Certificates" /></figure>
                    </div>
                    <div class="item">
                        <figure class="item-partners"><img src="{{ asset('landing_page/images/Garret.png') }}" alt="Image Certificates" /></figure>
                    </div>
                    <div class="item">
                        <figure class="item-partners"><img src="{{ asset('landing_page/images/Domoo.png') }}" alt="Image Certificates" /></figure>
                    </div>
                </div>
            </div>
        </section>
        <!--section_partners-->

        <section class="section_about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="thumb-about">
                            <img src="{{ asset('landing_page/images/about.png') }}" alt="Image About" class=" wow bounceInUp" data-wow-duration="1s" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sec_head wow fadeInUp">
                            <h2 class="wow bounceInRight" data-wow-duration="1.5s">About FromTo</h2>
                            <p class="wow fadeInUp">Our application specializes in express transportation services, goods transportation, delivery services, and logistics services, in order to meet the needs and demands of our customers for transportation services for factories, companies, and individuals.
                            <br /><br />
                            From To help you safely and easily transport your car, furniture, and anything you want.
                            </p>
                            <a href="about" class="btn-site"><span>Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--section_about-->

        <section class="section_services">
            <div class="container">
                <div class="sec_head wow fadeInUp"  data-wow-duration="1s">
                    <h2>Services We Offer</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-6">
                        <div class="item-services wow fadeInUp"  data-wow-duration="1s">
                            <figure>
                                <img src="{{ asset('landing_page/images/TransportVehicles.svg') }}" alt="Image Services" />
                            </figure>
                            <div class="txt-services">
                                <h4>Transport Vehicles</h4>
                                <p>Transport vehicles (we safely transport goods, products and cargo).</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="item-services wow fadeInUp"  data-wow-duration="1s">
                            <figure>
                                <img src="{{ asset('landing_page/images/FurnitureMoving.svg') }}" alt="Image Services" />
                            </figure>
                            <div class="txt-services">
                                <h4>Furniture Moving</h4>
                                <p>Furniture moving (this service provides technicians to help upon request).</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="item-services wow fadeInUp" data-wow-duration="1s">
                            <figure>
                                <img src="{{ asset('landing_page/images/CarTransport.svg') }}" alt="Image Services" />
                            </figure>
                            <div class="txt-services">
                                <h4>Car Transport</h4>
                                <p>Car transport and shipment to the place you want.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="item-services wow fadeInUp" data-wow-duration="1s">
                            <figure>
                                <img src="{{ asset('landing_page/images/roadMaintenance.svg') }}" alt="Image Services" />
                            </figure>
                            <div class="txt-services">
                                <h4>On-the-road Maintenance</h4>
                                <p>On-the-road maintenance services.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="item-services wow fadeInUp" data-wow-duration="1s">
                            <figure>
                                <img src="{{ asset('landing_page/images/Shipping.svg') }}" alt="Image Services" />
                            </figure>
                            <div class="txt-services">
                                <h4>Shipping</h4>
                                <p>Shipping products and raw materials.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--section_services-->

        <section class="section_how_use">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="thumb-how-use">
                            <img src="{{ asset('landing_page/images/how-use.png') }}" alt="Image About" class="wow zoomIn" data-wow-duration="1s"  />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sec_head text-start">
                            <h2 class="wow fadeInUp" data-wow-duration="1.5s">How To Use FromTo</h2>
                        </div>
                        <div class="step-use">
                            <div class="item-step">
                                <figure><i class="fa-solid fa-cloud-arrow-down"></i></figure>
                                <div class="txt-step">
                                    <h6>Download the App</h6>
                                    <p>Available on google play store all versions & Apple app store.</p>
                                </div>
                            </div>
                            <div class="item-step">
                                <figure><i class="fa-solid fa-person-circle-check"></i></figure>
                                <div class="txt-step">
                                    <h6>Activate Your Account</h6>
                                    <p>The account can be only activated on the phone number.</p>
                                </div>
                            </div>
                            <div class="item-step">
                                <figure><i class="fa-solid fa-comment-dots"></i></figure>
                                <div class="txt-step">
                                    <h6>Receive A Request</h6>
                                    <p>Request the service from the list of services and wait for help.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-how-use">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path class="elementor-shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path>
                    <path class="elementor-shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
                    <path class="elementor-shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
                </svg>
            </div>
        </section>
        <!--section_how_use-->

        <section class="section_make_unique">
            <div class="container">
                <div class="sec_head wow fadeInUp" data-wow-duration="1s">
                    <h2>What Makes Us Unique?</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="item-make-unique wow fadeInUp" data-wow-duration="1s">
                            <figure><img src="{{ asset('landing_page/images/customized.svg') }}" alt="" /></figure>
                            <div class="txt-make-unique">
                                <p>Customized solutions according to the needs of each place.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item-make-unique wow fadeInUp" data-wow-duration="1s">
                            <figure><img src="{{ asset('landing_page/images/customer-service.svg') }}" alt="" /></figure>
                            <div class="txt-make-unique">
                                <p><b>24h</b> customer service.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item-make-unique wow fadeInUp" data-wow-duration="1s">
                            <figure><img src="{{ asset('landing_page/images/quality.svg') }}" alt="" /></figure>
                            <div class="txt-make-unique">
                                <p> Quality and price</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item-make-unique wow fadeInUp" data-wow-duration="1s">
                            <figure><img src="{{ asset('landing_page/images/transparency.svg') }}" alt="" /></figure>
                            <div class="txt-make-unique">
                                <p>Transparency in tracking your shipment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item-make-unique wow fadeInUp" data-wow-duration="1s">
                            <figure><img src="{{ asset('landing_page/images/detailed.svg') }}" alt="" /></figure>
                            <div class="txt-make-unique">
                                <p>Detailed-prices</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item-make-unique wow fadeInUp" data-wow-duration="1s">
                            <figure><img src="{{ asset('landing_page/images/providing.svg') }}" alt="" /></figure>
                            <div class="txt-make-unique">
                                <p>Providing different payment methods.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--section_make_unique-->

		<footer id="footer">
            <div class="top-footer">
                <div class="container">
                    <div class="d-flex row-ft">
                        <div class="col-dt">
                            <div class="cont-ft wow fadeInUp">
                                <figure class="logo-ft wow fadeInUp">
                                    <img src="{{ asset('landing_page/images/logo.png') }}" alt="Logo" class="img-fluid">
                                </figure>
                                <p>Our application specializes in express transportation services, goods transportation, delivery services, and logistics services, in order to meet the needs and demands of our customers.</p>
                                <ul class="social-ft">
                                    <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-about">
                            <div class="menu-ft">
                                <h5>About FromTo</h5>
                                <ul class="li-ft wow fadeInUp">
                                    <li><a href="home">Home</a></li>
                                    <li><a href="about">About From To</a></li>
                                    <li><a href="partners">Our Partners</a></li>
                                    <li><a href="contact">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-connect">
                            <div class="menu-ft">
                                <h5>Connect With Us</h5>
                                <ul class="list-contact wow fadeInUp">
                                    <li><a href="tel:(+62)546776543"><i class="fa-solid fa-phone"></i> (+62) 546 776 543</a></li>
			                        <li><a href="mailto:info@fromto.sa"><i class="fa-solid fa-envelope"></i> info@fromto.sa</a></li>
                                    <li><a href=""><i class="fa-solid fa-location-dot"></i> Kingdom of Saudi Arabia</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-downl">
                            <div class="menu-ft mb-3">
                                <h5>Download The App</h5>
                                <ul class="d-download wow fadeInUp">
                                    <li><a href=""><img src="{{ asset('landing_page/images/google-play.png') }}" alt="" /></a></li>
                                    <li><a href=""><img src="{{ asset('landing_page/images/apple-store.svg') }}" alt="" /></a></li>
                                </ul>
                            </div>
                            <div class="menu-ft">
                                <h5>Payment Methods</h5>
                                <ul class="list-contact wow fadeInUp">
                                    <li><a href=""><img src="{{ asset('landing_page/images/pay.png') }}" alt="" /></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-ft">
                <div class="container">
                    <div class="cont-bt">
                        <p class="copyRight wow fadeInUp">All rights reserved FromTo 2022 ©</p>
                        <ul>
                            <li><a href="privacy">Privacy Policy</a></li>
                            <li><a href="cookies">Cookies Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="shape-footer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path class="elementor-shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path>
                    <path class="elementor-shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
                    <path class="elementor-shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
                </svg>
            </div>
		</footer>
        <!--footer-->


	</div>
	<!--main-wrapper-->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
	<script src="{{ asset('landing_page/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing_page/js/all.min.js') }}"></script>
    <script src="{{ asset('landing_page/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('landing_page/js/wow.js') }}"></script>
	<script src="{{ asset('landing_page/js/jquery.easing.min.js') }}"></script>
	<script src="{{ asset('landing_page/js/script.js') }}"></script>

	<script>
		new WOW().init();

	</script>

<script>

    $(function (){
        $("#navbar_contner_id").load("/resources/views/layout/navbar");
      });
</script>

</body>
</html>
