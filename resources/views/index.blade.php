<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TerraMar I&E</title>

    <link rel="icon" type="image/png" href="{{url('/img/favicon2.png')}}" />

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
            <a href="/" class="navbar-brand"><img width="160px" src="{{url('/img/logo2.png')}}" alt=""></a>
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


<<<<<<< HEAD
=======
                .animated {
                    visibility: visible;
                }
            }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    </head>

    <body>
        <!-- partial:index.partial.html -->
        <!-- Main Navigation -->
        <nav class="main-nav" id="main-nav">
            <div class="content-wrapper-sm">
                <a href="/" class="navbar-brand"><img width="130" src="{{url('/img/LOGO.png')}}" alt=""></a>
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
                    Nations
                    and Their People</h2>
            </div>
        </header>
>>>>>>> master

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

        <div class="card-body">

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

                <a href="javascript:void(0)" class="btn btn-outline-purple" target="">Download</a>
            </div>

            <div class="content-wrapper" id="contact">
                <!-- Third replaceble image -->
                <img class="img-absolute" src="{{url('/img/alv.jpg')}}" alt="City 3">

                <!-- Custom form, important note: you will need additional code in order to make this form work -->
                <form class="contact-form astonish" id="contact-form" action="" method="" data-animation="fadeInRight">

                    <div class="gridContact">
                        <h2 class="section-title">Contact Us</h2>
                        <span id="contactMessageSuccess" style="display:none;color: green">Your Message was sent!</span>
                        <span id="contactMessageFail" style="display:none;color: red">There was a problem try
                            again!</span>
                    </div>
                    <div class="grid">
                        <div class="grid-col-sm-12 grid-col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" id="name" required>
                                <label for="firstName">Name:</label>

                                <span class="text-danger" id="name-error"></span>
                            </div>
                        </div>
                        <div class="grid-col-sm-12 grid-col-md-6">
                            <div class="form-group">
                                <input type="text" name="phone_number" id="phone_number" required>
                                <label for="Phone">Phone:</label>
                                <span class="text-danger" id="phone_number-error"></span>

                            </div>
                        </div>
                        <div class="grid-col-sm-12">
                            <div class="form-group">
                                <input type="text" name="email" id="email" required>
                                <label for="email">Email:</label>
                                <span class="text-danger" id="email-error"></span>
                            </div>

                        </div>

                        <div class="grid-col-sm-12">
                            <div class="form-group">
                                <input type="text" name="subject" id="subject" required>
                                <label for="subject">Subject:</label>
                                <span class="text-danger" id="subject-error"></span>

                            </div>
                        </div>
                        <div class="grid-col-sm-12">
                            <div class="form-group">
                                <textarea name="message" rows="7" cols="80" id="message" required></textarea>
                                <label for="message">Message:</label>
                                <span class="text-danger" id="message-error"></span>

                            </div>
                        </div>
                    </div>
                    <input class="btn btn-outline-teal" type="submit" id="btnContact" value="Send">
                    <!-- 2 -->
                    <div class="loader loader--style2" id="loaderContact" title="1" style="display: none;">
                        <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="60px" height="60px"
                            viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                            <path fill="#000"
                                d="M25.251,6.461c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615V6.461z">
                                <animateTransform attributeType="xml" attributeName="transform" type="rotate"
                                    from="0 25 25" to="360 25 25" dur="0.6s" repeatCount="indefinite" />
                            </path>
                        </svg>
                    </div>
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

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#contact-form').on('submit', function(event){
            document.getElementById("btnContact").style.display = "none";
            document.getElementById("loaderContact").style.display = "block";
            event.preventDefault();
            $('#name-error').text('');
            $('#email-error').text('');
            $('#phone-number-error').text('');
            $('#subject-error').text('');
            $('#message-error').text('');

            name = $('#name').val();
            email = $('#email').val();
            phone_number = $('#phone_number').val();
            subject = $('#subject').val();
            message = $('#message').val();

            $.ajax({
              url: "/contact-form",
              type: "POST",
              data:{
                  name:name,
                  email:email,
                  phone_number:phone_number,
                  subject:subject,
                  message:message,
              },
              success:function(response){
            //   APAGAR este Log
                console.log(response);
                if (response) {

                  $('#success-message').text(response.success);

                  $("#contact-form")[0].reset();
                    document.getElementById("btnContact").style.display = "block";
                    document.getElementById("loaderContact").style.display = "none";
                    document.getElementById("contactMessageSuccess").style.display = "block";
                    setTimeout(function() {
                        $('#contactMessageSuccess').fadeOut('slow');
                        }, 10000); // <-- time in milliseconds
                }
              },
              error: function(response) {
                  $('#name-error').text(response.responseJSON.errors.name);
                  $('#email-error').text(response.responseJSON.errors.email);
                  $('#phone-number-error').text(response.responseJSON.errors.phone_number);
                  $('#subject-error').text(response.responseJSON.errors.subject);
                  $('#message-error').text(response.responseJSON.errors.message);
                  document.getElementById("btnContact").style.display = "block";
                document.getElementById("loaderContact").style.display = "none";
                document.getElementById("contactMessageFail").style.display = "block";
                    setTimeout(function() {
                        $('#contactMessageFail').fadeOut('slow');
                        }, 1000); // <-- time in milliseconds
              }
             });
            });


    </script>


</body>

</html>
