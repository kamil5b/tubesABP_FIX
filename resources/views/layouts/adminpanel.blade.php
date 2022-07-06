<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- CSS  -->
    <link href="{{ asset('../css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('../css/admin/header.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('../css/home/home.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('../css/home/destination.css') }}" rel="stylesheet" type="text/css">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- JS  -->
    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>



</head>


<style>
.container {

    padding: 30px;
    background-color: white;
    border-radius: 2rem;
    position: absolute;

}

body {
    background: #128159;
    overflow-x: hidden;
}



h1 {
    color: white;
    font-size: 4rem;
}
</style>


<body>


    <div>
        <!-- HEADER  -->
        <header class="header">

            <div id="menu-btn" class="fas fa-bars"></div>

            <a data-aos="zoom-in-left" data-aos-delay="150" href="/" class="logo">

                <!-- LOGO -->
                <img src="../images/logo_tourinc_white.PNG" width="30" height="30" align="center">
                TOUR.INC
            </a>

            <!-- LOGIN BUTTON -->
            @if(Auth::check())
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            <a data-aos="zoom-in-right" data-aos-delay="1300" href="{{ route('logout') }}"
                action="{{ route('logout') }}" method="POST" class="btn" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            @else

            <a data-aos="zoom-in-left" data-aos-delay="1300" href="/" class="btn">
                Logout
            </a>

            @endif

        </header>
        <!-- HEADER END -->
    </div>



    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    @yield('container_admin')



    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
    AOS.init({
        duration: 800,
        offset: 150,
    });
    </script>

</body>

</html>