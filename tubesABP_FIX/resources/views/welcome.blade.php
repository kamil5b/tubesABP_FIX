<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOUR.INC | INC</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- CSS  -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/home/header.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/home/home.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/home/destination.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/home/service.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/home/footer.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/home/credits.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/home/book.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/home/about.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/home/banner.css') }}" rel="stylesheet" type="text/css">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- JS  -->
    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>

</head>







<body>

    <!-- HEADER  -->

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo">

            <!-- LOGO -->
            <img src="images/logo_tourinc.PNG" width="30" height="30" align="center">
            TOUR.INC
        </a>

        <nav class="navbar">
            <a data-aos="zoom-in-left" data-aos-delay="300" href="#home">home</a>
            <a data-aos="zoom-in-left" data-aos-delay="450" href="#about">about</a>
            <a data-aos="zoom-in-left" data-aos-delay="600" href="#destination">destination</a>
            <a data-aos="zoom-in-left" data-aos-delay="750" href="#services">services</a>


        </nav>


        <!-- LOGIN BUTTON -->
        @if(Auth::check())
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        <a data-aos="zoom-in-right" data-aos-delay="1300" href="{{ route('logout') }}" action="{{ route('logout') }}"
            method="POST" class="btn" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        @else

        <a data-aos="zoom-in-left" data-aos-delay="1300" href="/login" class="btn">
            Login
        </a>

        @endif

    </header>

    <!-- HEADER END -->












    <!-- HOME  -->

    <section class="home" id="home" style="background-image: url('images/ships.jpg');">

        <div class="content">
            <span data-aos="fade-up" data-aos-delay="150">Sail Away</span>
            <h3 data-aos="fade-up" data-aos-delay="300">Through The Wind And Sea</h3>

            <p data-aos="fade-up" data-aos-delay="450">
                Tour.Inc offers you a wonderful experience
            </p>

            <p data-aos="fade-up" data-aos-delay="450">
                in sailing through all of Indonesia
            </p>

            <p data-aos="fade-up" data-aos-delay="450">
                with many activities include
            </p>

        </div>

    </section>

    <!-- HOME END -->















    <!-- BOOKING  -->

    <section class="book-form" id="book-form">

        <form action="">
            <div data-aos="zoom-in" data-aos-delay="150" class="inputBox">
                <span>where to?</span>
                <input type="text" placeholder="place name" value="">
            </div>
            <div data-aos="zoom-in" data-aos-delay="300" class="inputBox">
                <span>when?</span>
                <input type="date" value="">
            </div>
            <div data-aos="zoom-in" data-aos-delay="450" class="inputBox">
                <span>how many?</span>
                <input type="number" placeholder="number of travelers" value="">
            </div>
            <input data-aos="zoom-in" data-aos-delay="600" type="submit" value="find now" class="btn">
        </form>

    </section>

    <!-- BOOKING END -->














    <!-- ABOUT  -->

    <section class="about" id="about">

        <div class="video-container" data-aos="fade-right" data-aos-delay="300">
            <video src="../images/about-vid-1.mp4" muted autoplay loop class="video"></video>
            <div class="controls">
                <span class="control-btn" data-src="images/about-vid-1.mp4"></span>
                <span class="control-btn" data-src="images/about-vid-1.mp4"></span>
                <span class="control-btn" data-src="images/about-vid-1.mp4"></span>
            </div>
        </div>

        <div class="content" data-aos="fade-left" data-aos-delay="600">
            <span>
                why choose us?
            </span>
            <h3>
                Nature's Majesty Awaits You
            </h3>

            <p>
                Tour.Inc is a tour agency established in 2022. Tour.Inc will give you lots of new adventure ahead
                through the sea of Indonesia. Not only cruising, we also have various activities awaits for you to
                enjoy.
            </p>

            <a href="#" class="btn">read more</a>
        </div>

    </section>

    <!-- ABOUT END -->


















    <!-- DESTINATION  -->

    <section class="destination" id="destination" style="background-color: white;">

        <div class="heading">
            <h1>our destination</h1>
        </div>

        <div class="box-container">

            <div class="box" data-aos="fade-up" data-aos-delay="150">
                <div class="image">
                    <img src="images/bali.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Bali</h3>

                    <a href="#">find tour <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="300">
                <div class="image">
                    <img src="images/lombok.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Lombok</h3>

                    <a href="#">find tour <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="450">
                <div class="image">
                    <img src="images/rajaampat.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Raja Ampat</h3>

                    <a href="#">find tour <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="600">
                <div class="image">
                    <img src="images/pseribu.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Pulau Seribu</h3>

                    <a href="#">find tour <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="750">
                <div class="image">
                    <img src="images/lbj3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Labuan Bajo</h3>

                    <a href="/price">find tour <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="900">
                <div class="image">
                    <img src="images/nongsa.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Nongsa</h3>

                    <a href="#">find tour <i class="fas fa-angle-right"></i></a>
                </div>
            </div>


        </div>

    </section>

    <!-- DESTINATION END -->




















    <!-- SERVICE  -->

    <section class="services" id="services">
        <br>
        <br>
        <br>
        <div class="heading">
            <span>our services</span>
            <h1>countless expericences</h1>
        </div>

        <div class="box-container">

            <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                <i class="fas fa-globe"></i>
                <h3>Diving Kit</h3>
                <p>don't worry about diving kits, we supply every part of the diving kits and include diving lessons
                </p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
                <i class="fas fa-hiking"></i>
                <h3>adventures</h3>
                <p>lots of adventures await for you to explore the wonderful nature of indonesia. all activities are
                    being well-prepared by our agency</p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
                <i class="fas fa-utensils"></i>
                <h3>food & drinks</h3>
                <p>all meals are under controls. include breakfast, lunch, and dinner</p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="600">
                <i class="fas fa-hotel"></i>
                <h3>Rooms on Board</h3>
                <p>room facilities on board are ready for all guests and being sterilized daily</p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="750">
                <i class="fas fa-wallet"></i>
                <h3>Assurance</h3>
                <p>life assurance are giving to all visitors if anything goes wrong in our tours</p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="900">
                <i class="fas fa-headset"></i>
                <h3>COVID-19 Support</h3>
                <p>all visitors health informations are integrated with PEDULI LINDUNGI application by kemenkes</p>
            </div>

        </div>

    </section>

    <!-- SERVICE END -->





















    <!-- BANNER  -->

    <div class="banner">

        <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
            <span>start your adventures</span>
            <h3>Explore Indonesian Islands</h3>
            <p>"Cruising is fixing your boat in exotic locations." — Unknown</p>

        </div>

    </div>

    <!-- BANNER END -->

















    <!-- FOOTER  -->


    <section class="footer">

        <div class="box-container">

            <div class="box" data-aos="fade-up" data-aos-delay="150">
                <a href="#" class="logo">
                    <img src="images/logo_tourinc.PNG" width="30" height="30" align="center">

                    TOUR.INC
                </a>
                <p>provides happiness through</p>
                <p>the wind and sea</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="300">
                <h3>quick links</h3>
                <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#about" class="links"> <i class="fas fa-arrow-right"></i> about </a>
                <a href="#destination" class="links"> <i class="fas fa-arrow-right"></i> destination </a>
                <a href="#services" class="links"> <i class="fas fa-arrow-right"></i> services </a>

            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="450">
                <h3>contact info</h3>
                <p> <i class="fas fa-map"></i> Jakarta, Indonesia </p>
                <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
                <p> <i class="fas fa-envelope"></i> tourinc@gmail.com </p>
                <p> <i class="fas fa-clock"></i> 9:00am - 10:00pm </p>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="600">
                <h3>newsletter</h3>
                <p>subscribe for latest updates</p>
                <form action="">
                    <input type="email" name="" placeholder="enter your email" class="email" id="">
                    <input type="submit" value="subscribe" class="btn">
                </form>
            </div>

        </div>

    </section>

    <div class="credit">created by <span>Paketan</span> | Tour.Inc</div>

    <!-- FOOTER END -->

















    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
    AOS.init({
        duration: 800,
        offset: 150,
    });
    </script>

</body>

</html>