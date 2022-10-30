<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Alhasan-Restaurant </title>




    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>

    <body>

    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>




    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a  class="logo">
                            <img src="assets/images/logo2.png">

                            <a class="menu-trigger">
                                <span>Menu</span>
                            </a>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Ana Sayfa</a></li>
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Şefler</a></li>
                            <li class="scroll-to-section"><a href="#about">Hakkımızda</a></li>
                            <li class="scroll-to-section"><a href="#reservation">İletişim</a></li>
                            <li class="scroll-to-section">
                                @auth
                                <a href="{{url('/showcart',Auth::user()->id)}}">
                                    Sepet[{{$count}}]
                                </a>
                                @endauth
                            </li>
                            <li>
                                @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                        <li>
                                                <x-app-layout>

                                                </x-app-layout>
                                        </li>
                                @else
                                        <li> <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                                        @if (Route::has('register'))
                                        <li>  <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                                        @endif
                                        @endauth
                                    </div>
                                @endif
                            </li>
                        </ul>
                        <a class='menu-trigger'>

                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>ALHASAN RESTAURANT</h4>
                            <h6>EN İYİ DENEYİM</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">Rezervasyon yap</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-01.jpg" alt="">
                            </div>
                          </div>
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-02.jpg" alt="">
                            </div>
                          </div>
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-03.jpg" alt="">
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Hakkımızda</h6>
                            <h2>Size Lezzetli Bir Hatıra Bırakıyoruz</h2>
                        </div>
                        <p>Al-Hassan Restaurant, Salam Al-Hassan öğrencisinin mezuniyet projesidir. <a href="" target="_blank" rel="sponsored"></a> </p>
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/images/about-thumb-01.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-02.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-03.jpg" alt="">
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    @include("food")

    @include("foodchef")

    @include("reservation")


    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/profile.php?id=100078019322442"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/Salam_Al_Hasan"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/selam-alhasan-a74208230/"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://www.instagram.com/selam.alhasan/"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href=""><img src="" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright selam alhasan.

                        <br>Design: selam alhasan</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);

            });
        });

    </script>
  </body>
</html>
