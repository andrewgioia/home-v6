<?php   if ( file_exists( 'config.local.php' ) ): ?>
<?php       include( 'config.local.php' ); ?>
<?php   else: ?>
<?php       $config[ 'SITE_URL' ] = ''; ?>
<?php   endif; ?>

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
    <base href="<?php echo $config[ 'SITE_URL' ]; ?>" />
    <meta name="description" content="Co-founder of TeachBoost, technologist, and home brewer." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="public/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="public/css/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Asar" />
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
                    <h1>
                        <a href="#hi" class="self">Andrew Gioia</a>
                    </h1>
                    <menu class="navigation">
                        <div class="inner">
                            <a href="#me" class="item self">Biography</a>
                            <a href="#pj" class="item self">Projects</a>
                            <a href="#em" class="item self">Contact Me</a>
                            <a href="#hi" class="item self top-1">
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
            <div class="inner row">
                <div class="col col-xs-10 col-xs-offset-1 centered-text">
<?php   if ( isset( $alert ) && $alert == 'success' ): ?>
                    <div id="post-msg" class="success fadeout">
                        <div class="notif">Thank you for your note! I'll get back to you asap.</div>
                    </div>
<?php   endif; ?>

                    <h1>Andrew Gioia</h1>
                    <p class="no-bottom-margin bold-weight serif-font font-size-21">Co-founder of TeachBoost</p>
                    <p class="no-top-margin bottom-margin-20 font-size-19">Philadephia, PA</p>
                    <p class="font-size-17">
                        Technologist, lawyer, and amateur craftsman.<br />
                        I'm passionate about clean design and simple living.
                    </p>
                    <div class="top-margin-40 bottom-padding-40">
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
                        <a href="http://linkedin.com/in/andrewgioia" class="right-margin-15">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a href="https://www.flickr.com/photos/andrewgioia/">
                            <i class="fa fa-flickr"></i>
                        </a>
                    </div>
                </div>
            </div>
        </article>

        <!-- About -->
        <article id="me">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1
                                col-sm-7 col-sm-offset-1">
                        <h1 class="no-margin">
                            A Brief History.
                        </h1>
                        <h2 class="top-margin-20 bottom-padding-20">
                            Just a bit about me and what I do.
                        </h2>
                        <p>
                            A few years ago I started an educational technology company called <a href="http://teachboost.com">TeachBoost</a> with my brother, <a href="http://mikegioia.com">Mike</a>, and friend, <a href="http://jason.deroner.com">Jason</a>. We make web-based productivity and reporting tools for K-12 schools so that they can leverage their professional development into something wonderful for their educators and students. Day to day I now manage our customer engagement, maintain the brand and front-end design of the app, and run the operations-side of things.
                        </p>
                        <p>
                            Prior to TeachBoost I was an attorney for two years at a <a href="http://rubinfortunato.com">law firm</a> in Philadelphia. I graduated from the University of Michigan Law School in 2010 and Cornell University in 2007. I grew up outside Philadelphia and currently love living near the art museum.
                        </p>
                        <p>
                            In my free time I enjoy building data-visualization tools, tinkering with our growing home automation setup, <a href="http://aisphila.org">learning Italian</a> and woodworking, and spending as much time as possible with my beautiful wife, Beth, and our dog, Maggie.
                        </p>
                        <p>
                            Take a look below for some of the things I work(ed) on and please don't hesitate to <a href="#em" class="self">say hi</a>!
                        </p>
                    </div>
                    <div id="headcut" class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0">
                        <div class="centered-text" style="width: 200px;">
                            <img src="public/img/andrew/hedcut-v1.png" width="200" />
                            <p class="no-margin top-padding-10 font-size-15 line-height-1-4">
                                <em>Andrew Gioia</em>, 2015
                                <br />
                                Also in <a href="http://facebook.com/andrewgioia">full color</a>!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!-- Projects -->
        <article id="pj">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1
                                centered-text">
                        <h1>Projects and Other Work</h1>
                    </div>
                    <div class="col-sm-8 col-sm-offset-2
                                centered-text top-padding-10">
                        <h2>Apps and Software Projects</h2>
                        <ol class="projects left-justified">
                            <li>
                                <a href="https://github.com/andrewgioia/EchoPHP" class="title-font no-border">EchoPHP</a>&mdash;Basic PHP wrapper for the <a href="http://echomtg.com">EchoMTG</a> API, a service to manage card collections/inventory and view pricing history. <em>PHP</em>.
                            </li>
                            <li>
                                <a href="https://andrewgioia.github.io/Keyrune" class="title-font no-border">Keyrune</a>&mdash;Magic: the Gathering pictographic font for <strong>card set and rarity</strong> symbols. <em>CSS, Design</em>.
                            </li>
                            <li>
                                <a href="https://github.com/andrewgioia/Mana" class="title-font no-border">Mana</a>&mdash;Magic: the Gathering pictographic font for <strong>mana, tap, and casting cost</strong> symbols. <em>CSS, Design</em>.
                            </li>
                            <li>
                                <a href="https://itunes.apple.com/us/app/coffeebean/id934226885?ls=1&mt=12" class="title-font no-border">Coffeebean</a>&mdash;small <strong>OSX menubar app</strong> to temporarily disable automatic sleep, dimming, and screensavers. <em>Swift</em>.
                            </li>
                            <li>
                                <a href="https://github.com/andrewgioia/canopy" class="title-font no-border">Canopy</a>&mdash;home <strong>energy data visualization</strong> and reporting app built around the GreenButton data standard, to view how your home uses electricity. <em>PHP, Javascript</em>.
                            </li>
                        </ol>
                    </div>
                    <div class="col-sm-8 col-sm-offset-2
                                centered-text top-padding-10">
                        <h2>Writing</h2>
                        <ol class="projects left-justified">
                            <li>
                                <a href="http://particlebits.com" class="title-font no-border">Particle Bits</a>&mdash;budding blog with Mike on web development, design, technology, and internet thoughts.
                            </li>
                            <li>
                                <a href="http://www.mttlr.org/wp-content/journal/volfifteen/gioia.pdf" class="title-font no-border">FCC Jurisdiction Over ISPs in Protocol-Specific Bandwidth Throttling</a>&mdash;note published in Michigan Telecommunications and Technology Law Review (Spring 2009) on the FCC's legal grounds to enforce net neutrality.
                            </li>
                        </ol>
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

                    <h2 class="bottom-margin-50 centered-text">
                        Send me a note!
                    </h2>
                    <div class="row left-justified">
                        <div id="fields" class="col-sm-8 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                            <form id="contact" class="form" method="post" action="email.php">
                                <div class="fields">
                                    <div id="name"
                                         class="field field-current top-margin-10"
                                         data-order="1">
                                        <h3 class="bottom-margin-30 anim-upper sans-font">What is your name?</h3>
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
                                        <h3 class="bottom-margin-30 anim-upper sans-font">What is your email address?</h3>
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
                                        <h3 class="bottom-margin-30 anim-upper sans-font">What can I do for you?</h3>
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
                                        <h3 class="bottom-margin-30 anim-upper sans-font">Too many robots online, what color is the sky?</h3>
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
                        <div id="steps" class="col-sm-2 col-sm-offset-0 col-xs-10 col-xs-offset-1">
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

        <!-- Footer -->
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <p>
                            <a href="#me">Biography</a> &middot;
                            <a href="#pj">Projects</a> &middot;
                            <a href="#em">Contact form</a> or email hi@andrewgioia.com.
                        </p>
                        <p>
                            Layout, content, and graphics &copy; 2016 Andrew Gioia &amp; friends. <br />Any opinions expressed here are my own personal opinions and do not represent my employer’s view in any way.
                        </p>
                        <p>
                            Made with ❤️ in Philadelphia, PA.
                        </p>
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
        $( '.self' ).on( 'click', function() {
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
