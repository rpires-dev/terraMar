<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TerraMar I&E</title>

    <link rel="icon" type="image/png" href="{{url('/img/favicon.png')}}" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>

<body class="antialiased">

    <!-- partial:index.partial.html -->
    <!-- Main Navigation -->
    <nav class="main-nav" id="main-nav">
        <div class="content-wrapper-sm">
            <a href="/" class="navbar-brand"><img width="130px" src="{{url('/img/logo.png')}}" alt=""></a>
            <div id="menu-button">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#reserve">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main header -->
    <header>
        <!-- First replaceble image -->
        <img class="img-absolute" src="{{url('/img/carrier.jpg')}}" alt="City 1">
        <div class="wrapper astonish animated fadeInDown">
            <h1><strong>Terra</strong>Mar</h1>
            <h2>A Modern SupplyChain Service Dedicated to the Empowerment <br> of the Modern Independent Business
                Man
                and Their Workforce</h2>
        </div>
    </header>

    <!-- Main content -->
    <main>
        <div class="content-wrapper" id="about">
            <!-- second replaceble image -->
            <img class="img-absolute"
                src="https://raw.githubusercontent.com/Jesus-E-Rodriguez/cityscapes-landing-page/master/img/city2.png"
                alt="City 2">
            <div class="grid">
                <div class="grid-col-sm-12 grid-col-md-6 astonish" data-animation="fadeInLeft">
                    <h2 class="section-title">About TerraMar</h2>
                    <p>TerraMar is a fully responsive and customizable landing page template. All images can
                        easily be replaced from the html side, without having to dig through the css.</p>
                    <p>The full version of this template is available at Github and it comes with the SASS files in
                        order to provide quicker customization features, for those who are developers.</p>
                    <p>Javascript files are also included, they are used to enhance the user experience but apart
                        from the menu.js file, they are all optional.</p>
                </div>
            </div>
        </div>

        <div id="reserve" class="content-wrapper-lg text-center astonish" data-animation="zoomIn">
            <h2 class="section-title">Explore New Pathways</h2>
            <p>TerraMar is great for any travel agency or tour agency, that wishes to showcase the focal points of
                a city. If you want a unique looking landing page that has a unique artistic style that will attract
                clients, then this is the template for you. Go
                ahead and download it for free from Github.</p>

            <a href="https://github.com/Jesus-E-Rodriguez/cityscapes-landing-page" class="btn btn-outline-purple"
                target="_blank">Download</a>
        </div>

        <div class="content-wrapper" id="contact">
            <!-- Third replaceble image -->
            <img class="img-absolute" src="{{url('/img/alv.jpg')}}" alt="City 3">

            <!-- Custom form, important note: you will need additional code in order to make this form work -->
            <form class="contact-form astonish" action="#" method="post" data-animation="fadeInRight">
                <h2 class="section-title">Contact Us</h2>
                <div class="grid">
                    <div class="grid-col-sm-12 grid-col-md-6">
                        <div class="form-group">
                            <input type="text" name="firstName" required>
                            <label for="firstName">First Name:</label>
                        </div>
                    </div>
                    <div class="grid-col-sm-12 grid-col-md-6">
                        <div class="form-group">
                            <input type="text" name="lastName" required>
                            <label for="lasttName">Last Name:</label>
                        </div>
                    </div>
                    <div class="grid-col-sm-12">
                        <div class="form-group">
                            <input type="text" name="email" required>
                            <label for="email">Email:</label>
                        </div>
                    </div>
                    <div class="grid-col-sm-12">
                        <div class="form-group">
                            <textarea name="message" required></textarea>
                            <label for="message">Message:</label>
                        </div>
                    </div>
                </div>
                <input class="btn btn-outline-teal" type="submit" value="Send">
            </form>
        </div>

        <!-- This is an embedded Google map, this is easily customizable especially if you get a Google API key, this will allow for more customizable features. -->
        <iframe id="map"
            src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d81584.50435706123!2d-80.8378430874413!3d35.23358937843391!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1514142608486"
            frameborder="0" style="border:0" allowfullscreen></iframe>
    </main>

    <!-- Main footer -->
    <footer>
        <div class="content-wrapper-sm display-flex-between">
            <!-- Easily replaceble copyright information -->
            <small>Terramar 2021©</small>

            <!-- Make sure to edit the links so that they go to your social media. -->
            <div class="social-links">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>




</body>

</html>
