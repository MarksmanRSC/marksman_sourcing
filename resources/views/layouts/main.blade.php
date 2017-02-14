<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Marksman RSC - {{ $title or "Your Return Handling Partner" }}</title>

        <meta name="description" content="{{ $description or "Outsource return handling and asset recovery." }}">

        <meta name="keywords" content="{{ $keywords or "return handling, ecommerce returns, reverse logistics, asset recovery, liquidation alternative, fba prep, amazon returns" }}">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' />
        

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

        <script defer src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
        <script defer src="js/plugins.js"></script>
        <script defer src="js/main.js"></script>

    </head>
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"> <img src="img/logo.jpg" alt="Marksman RSC" /> </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> -->
                        <li>
                            <a href="/">Home</a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Outsource Return Handling <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/return-handling">How it Works</a>
                                </li>
                                <li>
                                    <a href="/serviced-products">Products and Pricing</a>
                                </li>
                                <li>
                                    <a href="/recover-value">Recover Value from Returned Items</a>
                                </li>
                                <li>
                                    <a href="/technicians">Our Trained Technicians</a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <a href="/dropshipping">Drop Shipping</a>
                        </li>

                        <li>
                            <a href="/amazon-fba-prep">FBA Prep</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Other Services <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/return-handling">Return Handling</a>
                                </li>
                                <li>
                                    <a href="/amazon-fba-prep">FBA Preparation</a>
                                </li>
                                <li>
                                    <a href="/discounted-shipping">Discounted Shipping</a>
                                </li>
                                <li>
                                    <a href="/dropshipping#shipping-services">Mail Forwarding</a>
                                </li>

                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="https://app.marksmanrsc.com">Sign In</a>
                        </li>
                        <li>
                            <a href="https://app.marksmanrsc.com/?page=register">Register</a>
                        </li>
                        <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        </ul>
                        </li> -->
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container-fluid" id="main-content">

            @yield('content')

            <div class="cta">

                @yield('cta')

            </div>

        </div>

        <footer>
            <div class="container-fluid">
                <div class="col-sm-3">
                    <h2>Marksman</h2>
                    <h3>Refurbishment Service Center</h3>
                    <p>
                        Marksman RSC &reg; strives to help reduce costs associated
                        with returned merchandise.
                    </p>
                    <p>
                        <a target="_blank" title="Marksman RSC BBB Business Review" href="https://www.bbb.org/cincinnati/business-reviews/electronic-equipment-and-suppliers-service-and-repair/marksman-rsc-in-cincinnati-oh-90015484/#bbbonlineclick"> <img alt="Marksman RSC BBB Business Review" style="border: 0;" src="https://seal-cincinnati.bbb.org/seals/blue-seal-160-90-marksman-rsc-90015484.png"> </a>
                    </p>
                </div>
                <div class="col-sm-6">
                    <h2>Quick Links</h2>

                    <div class="col-sm-6">
                        <ul class="quick-links">
                            <li class="head">Services</li>
                            <li>
                                <a href="/return-handling">Outsource Return Handling</a>
                            </li>
                            <li>
                                <a href="/amazon-fba-prep">Amazon FBA Prep</a>
                            </li>
                            <li>
                                <a href="/dropshipping">Drop Shipping</a>
                            </li>
                            <li>
                                <a href="/dropshipping#shipping-services">Mail Forwarding</a>
                            </li>
                            <li>
                                <a href="/discounted-shipping">Discounted Shipping</a>
                            </li>
                            <li>
                                <a href="/recover-value">Liquidation Alternative</a>
                            </li>
                            <li>
                                <a href="/contact-us">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
 
                    </div>

                </div>

                <div class="col-sm-3">

                    <!-- Begin MailChimp Signup Form -->
                    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                    <style type="text/css">
                        #mc_embed_signup {
                            background: #fff;
                            clear: left;
                            font: 14px Helvetica, Arial, sans-serif;
                        }
                        /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                         We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                    </style>
                    <div id="mc_embed_signup">
                        <form action="//MarksmanRSC.us12.list-manage.com/subscribe/post?u=9bd8b9a80404f22a08957c480&amp;id=433d15588e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                                <h2>Subscribe to our mailing list</h2>
                                <div class="indicates-required">
                                    <span class="asterisk">*</span> indicates required
                                </div>
                                <div class="mc-field-group">
                                    <label for="mce-EMAIL">Email Address <span class="asterisk">*</span> </label>
                                    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                                </div>
                                <div class="mc-field-group">
                                    <label for="mce-FNAME">First Name </label>
                                    <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                                </div>
                                <div class="mc-field-group">
                                    <label for="mce-LNAME">Last Name </label>
                                    <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
                                </div>
                                <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                </div>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                    <input type="text" name="b_9bd8b9a80404f22a08957c480_433d15588e" tabindex="-1" value="">
                                </div>
                                <div class="clear">
                                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                                </div>
                            </div>
                        </form>
                    </div>

                    <!--End mc_embed_signup-->

                </div>
            </div>
        </footer>
<link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->



        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <script defer src="js/vendor/modernizr-2.8.3.min.js"></script>




        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            ( function(b, o, i, l, e, r) {
                    b.GoogleAnalyticsObject = l;
                    b[l] || (b[l] = function() {
                        (b[l].q = b[l].q || []).push(arguments)
                    });
                    b[l].l = +new Date;
                    e = o.createElement(i);
                    r = o.getElementsByTagName(i)[0];
                    e.src = 'https://www.google-analytics.com/analytics.js';
                    r.parentNode.insertBefore(e, r)
                }(window, document, 'script', 'ga'));
            ga('create', 'UA-XXXXX-X', 'auto');
            ga('send', 'pageview');
        </script>
        
        <script>
            $('.pull-down').each(function() {
                var $this = $(this);
                $this.css('margin-top', $this.parent().height() - ($this.height()*4 ) )
            });
        </script>
    </body>
</html>