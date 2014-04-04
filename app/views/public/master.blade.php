<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','ProTechMaster')</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    {{ HTML::style('assets/plugins/bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('assets/plugins/bootstrap/css/bootstrap-theme.min.css') }}
    {{ HTML::style('assets/styles/fam-icons.css') }}
    {{ HTML::style('assets/styles/publicStyle.css') }}


    {{ HTML::script('assets/js/jquery.min.js') }}
    {{ HTML::script('assets/plugins/bootstrap/js/bootstrap.min.js') }}
    {{ HTML::script('assets/js/bootstrap-hover-dropdown.min.js') }}


    <!--flexslider scripts starts-->
    {{ HTML::style('assets/plugins/flexslider/css/flexslider.css') }}
    {{ HTML::script('assets/plugins/flexslider/js/jquery.flexslider-min.js') }}
    <script type="text/javascript">
        // Slider with thumbnail
        $(document).ready(function() {
            $('#thumb-slider').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: true,
                directionNav: false,
                controlNav: false,
                itemWidth: 180,
                itemMargin: 0,
                asNavFor: '#slider'
            });
            $('#slider').flexslider({
                animation: "slide",
                controlNav: false,
                directionNav: false,
                animationLoop: true,
                slideshow: true,
                sync: "#thumb-slider"
            });
        });
    </script>
    <!--flexslider scripts ends-->
    <!--Drop Down nav on hover-->
    <script>
        $(document).ready(function(){
            var activeLink = '<?php echo Request::segment(1); ?>';

            $('.mainNav li a').each(function(){
                if($(this).attr('href')== activeLink)
                {
                    $(this).addClass('active');
                }

                if($(this).attr('value') == activeLink)
                {
                    $(this).addClass('active');
                }
            });
        });

    </script>
    <!--Drop Down nav on hover-->

</head>
<body>

    <!--Header Start-->
    <section id="header">
        <nav class="navbar" role="navigation">
            <div class="container container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle dropMenu" data-toggle="collapse" data-target="#collapse1">
                        <span class="sr-only">Toggle navigation</span>
                        <span>Menu <b class="caret"></b></span>
                    </button>
                    <span class="logo">{{HTML::image('assets/img/logo.png')}}</span>
                    <span class="sm-logo">{{HTML::image('assets/img/sm-logo.png')}}</span>

                </div>

                <div class="collapse navbar-collapse" id="collapse1">
                    <ul class="nav navbar-nav navbar-right mainNav">
                        <li><a href="/" value="">Home Page</a></li>
                        <li class="dropdown">
                            <a href="services" class="dropdown-toggle disabled" data-toggle="dropdown" data-hover="dropdown">Services <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="webdesign"><i class="fam-layout-content"></i> Web Design</a></li>
                                <li><a href="ecommerce"><i class="fam-cart"></i> e-Commerce</a></li>
                                <li><a href="seo"><i class="fam-chart-bar"></i> SEO</a></li>
                                <li><a href="maintenance"><i class="fam-wrench-orange"></i> Website Maintenance</a></li>
                                <li><a href="hosting"><i class="fam-world"></i> Hosting</a></li>
                            </ul>
                        </li>
                        <li><a href="portfolio">Our Work</a></li>
                        <li><a href="pricing">Pricing</a></li>
                        <li class="dropdown">
                            <a href="support" class="dropdown-toggle disabled" data-toggle="dropdown" data-hover="dropdown">Support <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="faq"><i class="fam-help"></i> Frequently Asked Questions</a></li>
                                <li><a href="contactus"><i class="fam-email"></i> Contact us</a></li>
                            </ul>
                        </li>
                        <li><a href="login">Client Login <i class="fam-lock"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!--Header End-->

    <!--Slideshow Start-->
    @if(Request::segment(1) == 'home' || Request::segment(1) == "")
    <section id="slider-bg">
        <div class="container">
            <!--slides starts-->
            <div class="span12">
                <div id="slider" class="flexslider">
                    <ul class="slides">

                        <!--slide one starts-->
                        <li>
                            <div class="row">
                                <div class="col-md-6">
                                    <h2>Promise to create <br/>
                                        unique experiences for web and mobile</h2>
                                    <p>Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum qui blandit praesent feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. </p>
                                </div>
                                <div class="col-md-6"> <img src="assets/img/preview/tab-slide1.png" alt="slide"/> </div>
                            </div>
                        </li>
                        <!--slide one ends-->

                        <!--slide two starts-->
                        <li>
                            <div class="row">
                                <div class="col-md-6">
                                    <h2>Responsive interface <br/>
                                        became necessity for various devices</h2>
                                    <p> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui zzril delenit quam littera qui blandit praesent augue duis dolore te feugait nulla facilisi. </p>
                                </div>
                                <div class="col-md-6"> <img src="assets/img/preview/tab-slide2.png" alt="slide"/> </div>
                            </div>
                        </li>
                        <!--slide two ends-->

                        <!--slide three starts-->
                        <li>
                            <div class="row">
                                <div class="col-md-6">
                                    <h2>Easy to edit & <br/>
                                        customize templates for web and mobile</h2>
                                    <p>Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril in iis qui facit eorum delenit augue duis dolore te feugait nulla facilisi. </p>
                                </div>
                                <div class="col-md-6"> <img src="assets/img/preview/tab-slide3.png" alt="slide"/> </div>
                            </div>
                        </li>
                        <!--slide three ends-->

                        <!--slide four starts-->
                        <li>
                            <div class="row">
                                <div class="col-md-6">
                                    <h2>Awesome creativity<br/>
                                        & passion to develop apps for mobile devices</h2>
                                    <p> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui qui blandit praesent zzril gothica delenit augue duis dolore te feugait nulla facilisi. </p>
                                </div>
                                <div class="col-md-6"> <img src="assets/img/preview/tab-slide4.png" alt="slide"/> </div>
                            </div>
                        </li>
                        <!--slide four ends-->

                        <!--slide five starts-->
                        <li>
                            <div class="row">
                                <div class="col-md-6">
                                    <h2>Our cloud thinking <br/>
                                        process creates unlimited possibilities</h2>
                                    <p>Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te qui blandit praesent feugait nulla facilisi. </p>
                                </div>
                                <div class="col-md-6"> <img src="assets/img/preview/tab-slide5.png" alt="slide"/> </div>
                            </div>
                        </li>
                        <!--slide five ends-->

                    </ul>

                </div>
            </div>

            <!--slides ends-->

            <!--thumbnails starts-->
            <div class="col-md-12">
                <div id="thumb-slider" class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="thumb-text clearfix"><img src="assets/img/icons/slider-tab-icon1.png" width="64" height="64" alt="icon">
                                <p>Awesome web templates</p>
                            </div>
                        </li>
                        <li>
                            <div class="thumb-text clearfix"><img src="assets/img/icons/slider-tab-icon2.png" width="64" height="64" alt="icon">
                                <p>Responsive layout</p>
                            </div>
                        </li>
                        <li>
                            <div class="thumb-text clearfix"><img src="assets/img/icons/slider-tab-icon3.png" width="64" height="64" alt="icon">
                                <p>Easy to customize </p>
                            </div>
                        </li>
                        <li>
                            <div class="thumb-text clearfix"><img src="assets/img/icons/slider-tab-icon4.png" width="64" height="64" alt="icon">
                                <p>State of art design</p>
                            </div>
                        </li>
                        <li>
                            <div class="thumb-text clearfix"><img src="assets/img/icons/slider-tab-icon5.png" width="64" height="64" alt="icon">
                                <p>Infinite modules</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--thumbnails ends-->
        </div>
    </section>
    @endif
    <!--Slideshow End-->
    <!--Main content Start-->

        @yield('content')

    <!--Main content End-->
    <!--Footer Start-->
    <footer id="footer" class="clearfix">
        <div class="container">
            <div class="col-md-4">
                <p><strong>About ProTechMaster</strong></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, ducimus et exercitationem in ipsam odio odit rem ut! Delectus dolorem et iusto magnam maiores nobis officiis perferendis recusandae repellendus unde!</p>
            </div>
            <div class="col-md-4">
                <p><strong>Check Our Services</strong></p>
                <ul>
                    <li>Web Design</li>
                    <li>e-Commerce</li>
                    <li>SEO</li>
                    <li>Website Maintenance</li>
                    <li>Hosting</li>
                </ul>
            </div>
            <div class="col-md-4">
                <p><strong>Get in Touch</strong></p>
                <p><img src="assets/img/icons/icon-18-mail.png" alt="icon"> support@protechmaster.com</p>
                <p><img src="assets/img/icons/icon-18-phone.png" alt="icon"> (859) 553-3025</p>
                <img src="assets/img/icons/social-icon-linkedin.png" width="28" height="28" alt="icon">
                <img src="assets/img/icons/social-icon-facebook.png" width="28" height="28" alt="icon">
                <img src="assets/img/icons/social-icon-twitter.png" width="28" height="28" alt="icon">
            </div>
        </div>
    </footer>
    <!--Footer End-->
    <!--CopyRight Start-->
    <section id="copyright" class="clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p> © Copyright <?php echo date("Y"); ?></p>

                    <!--copyright menu starts-->
                    <ul class="copyright-menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Our Work</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Login</a></li>
                    </ul>
                    <!--copyright menu ends-->

                </div>
            </div>
        </div>
    </section>
    <!--CopyRight End-->
</body>
</html>