<!DOCTYPE html>
<html lang="en">

  <head>

    <base href="/public">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Sepet</title>
<!--

-->
    <!--  -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <style>


    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    </head>

    <body>


    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>



    <!-- ***** Header Area Start ***** -->
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
                            <li class="scroll-to-section"><a href="{{url('/redirects')}}" class="active">Ana Sayfa</a></li>
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

    <div id="top">

    <table align="center">
        <tr>
            <th style="padding: 50px;">Yemek Adı</th>
            <th style="padding: 50px;">Fiyat</th>
            <th style="padding: 50px;">Miktar</th>
            <th style="padding: 50px;">Eylem</th>
        </tr>
        <form action="{{url('orderconfirm')}}" method="POST">
            @csrf
        @foreach ($data as $data)
        <tr align="center">
            <td>
                <input type="text" name="foodname[]" value="{{$data->title}}" hidden="">
                {{$data->title}}
            </td>
            <td>
                <input type="text" name="price[]" value="{{$data->price}}" hidden="">
                {{$data->price}}
            </td>
            <td>
                <input type="text" name="quantity[]" value="{{$data->quantity}}" hidden="">
                {{$data->quantity}}
            </td>

        </tr>
        @endforeach
        @foreach ($data2 as $data2)
        <tr style="position: relative; top: -60px; right: -517px;">
        <td><a href="{{url('/remove',$data2->id)}}" class="btn btn-warning">Sil</a></td>
        </tr>
        @endforeach


    </table>

    <div align="center" style="padding: 10px;">
        <button type="button" id="order">Sipariş ver</button>
    </div>


    <div id="appear" align="center" style="padding: 10px; display: none;">
            <div style="padding: 10px;">
                <label>Ad: </label>
                <input type="text" name="name" placeholder="Name">
            </div>
            <div style="padding: 10px;">
                <label>Telefon: </label>
                <input type="number" name="phone" placeholder="Phone Number">
            </div>
            <div style="padding: 10px;">
                <label>Address: </label>
                <input type="text" name="address" placeholder="Address">
            </div>
            <div style="padding: 10px;">

                <input type="submit"value="Sipariş Tamamla">
                <button id="close" type="button">|  Kapat</button>
            </div>
    </div>
        </form>
    <script type="text/javascript">
        $("#order").click(
            function()
            {
                $("#appear").show();
            }
        );

        $("#close").click(
            function()
            {
                $("#appear").hide();
            }
        );
    </script>

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
