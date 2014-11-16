<?php   if ( isset( $_GET[ 's' ] ) ): ?>
<?php       $alert = "success"; ?>
<?php   elseif ( isset( $_GET[ 'e' ] ) ): ?>
<?php       $alert = "error"; ?>
<?php       if ( $_GET[ 'e' ] == 'blank' ) $msg = 'Please make sure all fields are filled out!'; ?>
<?php       if ( $_GET[ 'e' ] == 'email' ) $msg = 'The address you entered isn\'t an email address...'; ?>
<?php       if ( $_GET[ 'e' ] == 'post' ) $msg =  'Please use the submit button on the form!'; ?>
<?php       if ( $_GET[ 'e' ] == 'human' ) $msg =  'It looks like you\'re a robot... please... no more.'; ?>
<?php       if ( $_GET[ 'e' ] == 'api' ) $msg =  'Sorry there was an issue with Postmark, try again?'; ?>
<?php   endif; ?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Andrew Gioia</title>
    <base href="http://lorien.local/andrew/" />
    <meta name="description" content="Co-founder of TeachBoost, technologist, and home brewer." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="public/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="public/css/supersized.css" />
    <link rel="stylesheet" type="text/css" href="public/css/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="public/css/andrew.css" />
    <link rel="icon" href="favicon.ico" type="image/png" />
    <!--[if lt IE 9]>
        <script src="public/js/vendor/html5shiv.js" type="text/javascript"></script>
    <![endif]-->
</head>

<!-- Body -->
<body class="home">

    <!-- Header -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Andrew Gioia</h1>
                    <menu class="navigation">
                        <div class="inner">
                            <a href="#me" class="item">Biography</a>
                            <a href="#pj" class="item">Projects</a>
                            <a href="#em" class="item">Contact Me</a>
                            <a href="#mp" class="item">Find Me</a>
                            <a href="#hi" class="item top-1">
                                <i class="fa fa-rocket"></i>
                            </a>
                        </div>
                    </menu>
                    <aside class="relative-position top-1">
                        <a href="javascript:;" id="open" data-state="closed" class="white-text">
                            <i class="fa fa-navicon"></i>
                        </a>
                    </aside>
                    <aside>
                        <a href="mailto:hi@andrewgioia.com">hi@andrewgioia.com</a>
                    </aside>
                </div>
            </div>
        </div>
    </header>

    <!-- Content -->
    <section id="content">

        <!-- Welcome -->
        <article id="hi">
            <div class="inner">
<?php   if ( isset( $alert ) && $alert == 'success' ): ?>
                <div id="post-msg" class="success fadeout">
                    <div class="notif">Thank you for your note! I'll get back to you asap.</div>
                </div>
<?php   endif; ?>

                </script>
                <h1>Andrew Gioia</h1>
                <p class="no-bottom-margin">Co-founder of TeachBoost</p>
                <p class="no-top-margin bottom-margin-20">Philadephia, PA</p>
                <p>
                    Technologist, lawyer, and amateur craftsman.<br />
                    I'm passionate about clean design and simple living.
                </p>
                <p class="top-margin-40">
                    <a href="mailto:hi@andrewgioia.com" class="right-margin-15">
                        <i class="fa fa-envelope-o"></i>
                    </a>
                    <a href="http://twitter.com/andrewgioia" class="right-margin-15">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="http://facebook.com/andrewgioia" class="right-margin-15">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="https://github.com/andrewgioia" class="right-margin-15">
                        <i class="fa fa-github"></i>
                    </a>
                    <a href="http://linkedin.com/in/andrewgioia">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </p>
            </div>
        </article>

        <!-- About -->
        <article id="me">
            <div class="inner">
                <div class="container-fluid">
                    <div class="andrew avatar"></div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1
                                    col-sm-5 col-sm-offset-1
                                    left-justified">
                            <p class="first">
                                A few years ago I started an educational technology company called <a href="http://teachboost.com">TeachBoost</a> with my brother, <a href="http://mikegioia.com">Mike</a>, and friend, <a href="http://jason.deroner.com">Jason</a>. We make web-based productivity and reporting tools for K-12 schools so that they can leverage their professional development into something wonderful for their educators and students. I maintain the brand and front-end design of the app and run the operations-side of things.
                            </p>
                        </div>
                        <div class="col-xs-10 col-xs-offset-1
                                    col-sm-5 col-sm-offset-0
                                    left-justified">
                            <p>
                                Prior to TeachBoost I was an attorney for two years at a law firm in Philadelphia. I graduated from the University of Michigan Law School in 2010 and Cornell University in 2007. In my free time I enjoy building data-visualization tools, tinkering with our growing home automation setup, learning carpentry and woodworking, and spending as much time as possible with my beautiful girlfriend, Beth, and our dog, Gus.
                            </p>
                        </div>
                    </div>
                </div>
                <div id="colors"></div>
            </div>
        </article>

        <!-- Projects -->
        <article id="pj">
            <div class="inner">
                <div class="container-fluid">
                    <div class="code avatar">
                        <i class="fa fa-desktop back"></i>
                        <i class="fa fa-mobile front"></i>
                    </div>
                    <div class="row left-margin-10 right-margin-10">
                        <div class="col-sm-4 project">
                            <div class="info one">
                                <i class="icon coffeebean"></i>
                                <h2 class="no-margin no-padding">
                                    <a href="https://itunes.apple.com/us/app/coffeebean/id934226885?ls=1&mt=12">Coffeebean</a>
                                </h2>
                                <p>Small OSX menubar app that lets you temporarily disable automatic sleep, dimming, and screensavers.</p>
                                <p>First foray into Swift, and you can download it now in the <a href="https://itunes.apple.com/us/app/coffeebean/id934226885?ls=1&mt=12">Mac App Store</a> now!</p>
                            </div>
                        </div>
                        <div class="col-sm-4 project">
                            <div class="info two">
                                <i class="fa fa-lightbulb-o"></i>
                                <h2 class="no-margin no-padding">
                                    <a href="https://github.com/andrewgioia/canopy">Canopy</a>
                                </h2>
                                <p>Home energy data visualization and reporting app&mdash;import energy data to make better decisions.<p>
                                <p>Built around the GreenButton data standard used by PECO and other utility companies, this PHP app provides some nice charts to view how your home uses electricity.<p>
                            </div>
                        </div>
                        <div class="col-sm-4 project">
                            <div class="info three">
                                <i class="fa fa-flask"></i>
                                <h2 class="no-margin no-padding">Particle Bits</h2>
                                <p>Budding blog with Mike on web development, design, technology, and internet thoughts. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!-- Form -->
        <article id="em">
            <div class="inner">
                <div class="container-fluid">
<?php   if ( isset( $alert ) && $alert == 'error' ): ?>
                <div id="post-msg" class="error fadeout">
                    <div class="error notif"><?php echo $msg; ?></div>
                </div>
<?php   endif; ?>

                    <h2 class="bottom-margin-50">Send me a note!</h2>
                    <div class="row left-justified">
                        <div class="col col-xs-8 col-xs-offset-1">
                            <form id="contact" class="form" method="post" action="email.php">
                                <div class="fields">
                                    <div id="name"
                                         class="field field-current top-margin-10"
                                         data-order="1">
                                        <h3 class="bottom-margin-30 anim-upper">What is your name?</h3>
                                        <input type="text"
                                               name="name"
                                               placeholder="Andrew Gioia"
                                               class="bigfield anim-lower" />
                                        <div id="nameError" class="hide error-msg anim-lower">
                                            Please enter your full name here.
                                        </div>
                                    </div>
                                    <div id="email"
                                         class="field top-margin-10"
                                         data-order="2">
                                        <h3 class="bottom-margin-30 anim-upper">What is your email address?</h3>
                                        <input type="text"
                                               name="email"
                                               placeholder="hi@andrewgioia.com"
                                               class="bigfield anim-lower" />
                                        <div id="emailError" class="hide error-msg anim-lower">
                                            Please enter your email address here.
                                        </div>
                                    </div>
                                    <div id="note"
                                         class="field top-margin-10"
                                         data-order="3">
                                        <h3 class="bottom-margin-30 anim-upper">What can I do for you?</h3>
                                        <textarea name="note"
                                               placeholder="Something's been on my mind a lot lately and I..."
                                               class="bigfield anim-lower"
                                               cols="20"
                                               rows="4"></textarea>
                                        <div id="noteError" class="hide error-msg anim-lower">
                                            Please enter a message, come on now!
                                        </div>
                                    </div>
                                    <div id="human"
                                         class="field top-margin-10"
                                         data-order="4">
                                        <h3 class="bottom-margin-30 anim-upper">Too many robots online, what color is the sky?</h3>
                                        <input type="text"
                                               name="human"
                                               placeholder="hint: blue"
                                               class="bigfield anim-lower" />
                                        <div id="humanError" class="hide error-msg anim-lower">
                                            You didn't answer the human question correctly.
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="steps" class="col col-xs-2 top-padding-20">
                            <a href="javascript:;"
                               data-field="name"
                               data-order="1"
                               class="on step-link dot block-level right-padding-20 bottom-padding-5">
                                <i class="fa fa-circle"></i>
                            </a>
                            <a href="javascript:;"
                               data-field="email"
                               data-order="2"
                               class="step-link dot block-level right-padding-20 bottom-padding-5">
                                <i class="fa fa-circle"></i>
                            </a>
                            <a href="javascript:;"
                               data-field="note"
                               data-order="3"
                               class="step-link dot block-level right-padding-20 bottom-padding-5">
                                <i class="fa fa-circle"></i>
                            </a>
                            <a href="javascript:;"
                               data-field="human"
                               data-order="4"
                               class="step-link dot block-level right-padding-20 bottom-padding-15">
                                <i class="fa fa-circle"></i>
                            </a>
                            <a href="javascript:;"
                               class="continue step-link block-level"
                               id="continue"
                               data-field="email"
                               data-order="2">
                                Continue
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!-- Map -->
        <article id="mp">
            <div id="map" style="width: 100%; height: 100%;"></div>
        </article>

        <!-- Footer -->
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="#me">Biography</a> / <a href="#pj">Projects</a> / <a href="#em">Contact me</a> / <a href="#mp">Find me</a>
                        <br />
                        &copy; 2014 Andrew Gioia &amp; friends. Made with &nbsp;&#9829;&nbsp; in Philadelphia, PA.
                        <br />
                        <em>As iron sharpens iron, so one person sharpens another.</em> &mdash;Proverbs 27:17
                    </div>
                </div>
            </div>
        </footer>

    </section>

    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="public/js/jquery.min.js"><\/script>')</script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
    <script>!window.jQuery.ui && document.write('<script src="public/js/jquery-ui.min.js"><\/script>')</script>
    <script src="public/js/jquery.scrollTo.min.js"></script>

    <!-- Plugins -->
    <script src="public/js/supersized.min.js"></script>

    <!-- Background transitions -->
    <script>
        jQuery( function($) {
            $.supersized({
                // Functionality
                slide_interval   : 0,
                transition       : 1,
                transition_speed : 15000,
                // Components
                slide_links      : 'blank',
                slides           : [
                    {image : 'public/img/backgrounds/gazebo.blur.jpg', title : '', thumb : '', url : ''},
                    {image : 'public/img/backgrounds/museum.blur.jpg', title : '', thumb : '', url : ''},
                    {image : 'public/img/backgrounds/street.blur.jpg', title : '', thumb : '', url : ''}
                                   ]

            });
        });
    </script>

    <!-- Scroll header effect -->
    <script>
        $( window ).scroll( function ( event ) {
            var y = $( this ).scrollTop();
            if ( y > 1) {
                $( 'header' ).addClass( 'more' );
            } else {
                $( 'header' ).removeClass( 'more' );
            }
        });
    </script>

    <!-- Naviation scrolling -->
    <script>
        $( 'menu .item' ).on( 'click', function() {
            var id = $( this ).attr( 'href' );
            $.scrollTo( id, 1000, {easing:'easeInOutQuart'} );
            return false;
        });
    </script>

    <!-- Contact form steps -->
    <script>
        $( '.step-link' ).on( 'click', function() {

            // get the vars
            var field = $( this ).data( 'field' );
            var order = $( this ).data( 'order' );
            var current = $( '.field-current' ).data( 'order' );

            // if we're on the same page as we clicked, do nothing
            if ( current == order ) { return false; }

            // if we're on submit, do that instead of everything else
            if ( field == 'submit' ) {
                var name = $( 'input[name="name"]' ).val();
                var email = $( 'input[name="email"]' ).val();
                var note = $( 'textarea[name="note"]' ).val();
                var human = $( 'input[name="human"]' ).val();
                if ( name.length == 0 ) {
                    setError( 'name' );
                    setDirection( 1, 5 );
                    setCircle( 'name' );
                    setButton( 1 );
                    setAnimations( 'name' );
                } else if ( email.length == 0 || ! validateEmail( email ) ){
                    setError( 'email' );
                    setDirection( 2, 5 );
                    setCircle( 'email' );
                    setButton( 2 );
                    setAnimations( 'email' );
                } else if ( note.length == 0 ) {
                    setError( 'note' );
                    setDirection( 3, 5 );
                    setCircle( 'note' );
                    setButton( 3 );
                    setAnimations( 'note' );
                } else if ( human.length == 0 || human != 'blue' ) {
                    setError( 'human' );
                    setDirection( 4, 5 );
                    setCircle( 'human' );
                    setButton( 4 );
                    setAnimations( 'human' );
                } else {
                    $( '.error-msg' ).addClass( 'hide' );
                    $( '#contact' ).submit();
                }
                return false;
            }

            // set animation direction, circle/button status, and animations
            setDirection( order, current );
            setCircle( field );
            setButton( order );
            setAnimations( field );

            return false;
        });

        function setDirection( order, current ){
            if ( order > current ) {
                $( '.fields' ).addClass( 'display-next' ).removeClass( 'display-prev' );
            } else if ( order < current ) {
                $( '.fields' ).addClass( 'display-prev' ).removeClass( 'display-next' );
            }
        }

        function setCircle( field ){
            $( '.dot.on' ).removeClass( 'on' );
            $( '.dot[data-field="'+field+'"]' ).addClass( 'on' );
        }

        function setButton( order ){
            if ( order == 4 ) {
                $( '#continue' ).data( 'field', 'submit' ).data( 'order', 5 )
                    .html( 'Submit!' ).addClass( 'submit' );
            } else if ( order == 3 ) {
                $( '#continue' ).data( 'field', 'human' ).data( 'order', 4 )
                    .html( 'Continue' ).removeClass( 'submit' );
            } else if ( order == 2 ) {
                $( '#continue' ).data( 'field', 'note' ).data( 'order', 3 )
                    .html( 'Continue' ).removeClass( 'submit' );
            } else if ( order == 1 ) {
                $( '#continue' ).data( 'field', 'email' ).data( 'order', 2 )
                    .html( 'Continue' ).removeClass( 'submit' );
            }
        }

        function setError( field ){
            $( '.error-msg' ).addClass( 'hide' );
            $( '#'+field+'Error' ).removeClass( 'hide' );
        }

        function setAnimations( field ){
            $( '.field-hide' ).removeClass( 'field-hide' );
            $( '.field-current' ).removeClass( 'field-current field-show' ).addClass( 'field-hide' );
            $( '#'+field ).removeClass( 'field-hide' ).addClass( 'field-current field-show' );
            setTimeout( function() {
                $( '.fields' ).removeClass( 'display-next display-prev' );
            }, 1000 );
        }

        function validateEmail( email ){
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test( email );
        }

    </script>

    <!-- Map -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script>
        function initialize() {
            var myLatlng = new google.maps.LatLng( 39.96557, -75.180966 );
            var mapOptions = {
                zoom: 12,
                scrollwheel: false,
                center: myLatlng
            }
            var contentString = '<div style="width:220px;height:80px;padding:10px 0 10px 25px;text-align:center;"><h3>Hi there!</h3><p style="font-size:16px;margin:10px 0 0;"><a href="#em">Say hi back</a></p></div>';
            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });
            var map = new google.maps.Map( document.getElementById( 'map' ), mapOptions );
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: 'Welcome!'
            });
            infowindow.open(map,marker);
            google.maps.event.addListener(marker, 'click', function() {

            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <!-- Hamburger menu -->
    <script>
        $( '#open' ).click( function() {
            var state = $( this ).data( 'state' );
            if ( state == 'closed' ) {
                $( 'menu' ).animate( { width: 'toggle' }, 500 );
                $( this ).data( 'state', 'open' );
            } else {
                $( 'menu' ).animate( { width: 'toggle' }, 500 );
                $( this ).data( 'state', 'closed' );
            }
        });
    </script>

</body>
</html>
