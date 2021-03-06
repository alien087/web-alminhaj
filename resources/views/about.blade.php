<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Al Minhaj</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

    <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- Superfish -->
    <link rel="stylesheet" href="{{asset('css/superfish.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">


    <!-- Modernizr JS -->
    <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 text-left fh5co-link">
                            <a href="#"> <b> WA: +62 813-1745-4322</b></a>


                        </div>
                        <div class="col-md-6 col-sm-6 text-right fh5co-social">
                            <a href="#"> <b>Email: Taklimalminhaj@gmail.com</b> </a>

                        </div>
                    </div>
                </div>
            </div>
            <header id="fh5co-header-section" class="sticky-banner">
                <div class="container">
                    <div class="nav-header">
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
                        <h1 id="fh5co-logo"><a href="index.html">Al Minhaj</a></h1>
                        <!-- START #fh5co-menu-wrap -->
                        <nav id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu" id="fh5co-primary-menu">
                                @guest
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <a href="#" class="fh5co-sub-ddown">Kegiatan Organisasi</a>
                                    <ul class="fh5co-sub-menu">
                                        <li><a href="{{route('safari')}}">Safari taklim</a></li>
                                        <li><a href="{{route('khotmil')}}">Khotmil Al Qur'an</a></li>
                                        <li><a href="{{route('berbagi')}}">Al minhaj berbagi</a></li>
                                        <li><a href="{{route('pengajian')}}">Pengajian Rutin</a></li>
                                    </ul>
                                </li>

                                <li class="active">
                                    <a href="{{route('about')}}">Tentang Kami</a>
                                </li>
                                @else
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <a href="#" class="fh5co-sub-ddown">Kegiatan Organisasi</a>
                                    <ul class="fh5co-sub-menu">
                                        <li><a href="{{route('safari')}}">Safari taklim</a></li>
                                        <li><a href="{{route('khotmil')}}">Khotmil Al Qur'an</a></li>
                                        <li><a href="{{route('berbagi')}}">Al minhaj berbagi</a></li>
                                        <li><a href="{{route('pengajian')}}">Pengajian Rutin</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="fh5co-sub-ddown">Edukasi</a>
                                    <ul class="fh5co-sub-menu">
                                        <li><a href="{{route('mengaji')}}">Mengaji Online</a></li>
                                        <li><a href="{{route('audios')}}">Murrotal</a></li>
                                    </ul>
                                </li>
                                <li class="active">
                                    <a href="{{route('about')}}">Tentang Kami</a>
                                </li>
                                @endguest
                                @guest
                                <li><a href="/login" class="btn btn-primary" style="margin-left: 1em">Login</a></li>
                                @elseif(Auth::user()->type_user == '1')
                                <li>
                                    <a id="navbarDropdown" class="fh5co-sub-ddown">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <ul class="fh5co-sub-menu">
                                        <li><a href="/dashboard">Dashboard</a></li>
                                        <li><a href="{{route('edit_user', ['id' => Auth::user()->id])}}">Edit Profile</a></li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>

                                    </ul>

                                </li>
                                @else
                                <li>
                                    <a id="navbarDropdown" class="fh5co-sub-ddown">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <ul class="fh5co-sub-menu">
                                        <li><a href="/inbox">Pesan</a></li>
                                        <li><a href="{{route('edit_user', ['id' => Auth::user()->id])}}">Edit Profile</a></li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>

                                    </ul>

                                </li>
                                @endguest
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>


            <div class="fh5co-hero">
                <div class="fh5co-overlay"></div>
                <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_2.jpg);">
                    <div class="desc animate-box">
                        <h2><strong>MAJELIS TAKLIM AL MINHAJ</strong></h2>
                        <span>WA: +62 813-1745-4322 <br> Email: taklimalminhaj@gmail.com</span>


                    </div>
                </div>

            </div>

            <div id="fh5co-feature-product" class="fh5co-section-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center heading-section">
                            <h3>Struktur Organisasi</h3>
                            <p>Berikut Adalah Struktur Organisasi Dari Al Minhaj</p>
                        </div>
                    </div>

                    <div class="row row-bottom-padded-md">
                        <div class="col-md-12 text-center animate-box">
                            <img src="{{asset('images/SO.png')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive" style="display: inline;">
                        </div>


                    </div>
                </div>


                <div id="fh5co-portfolio">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 text-center heading-section animate-box">
                                <h3>Sejarah Kami</h3>
                                <p>Sejarah singkat Al Minhaj</p>
                            </div>
                        </div>


                        <div class="row row-bottom-padded-md">
                            <div class="col-md-12">
                                <ul id="fh5co-portfolio-list">

                                    <li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/about_1.jpeg); ">
                                        
                                    </li>

                                    <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/about_2.jpeg); ">
                                        
                                    </li>

                                    <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/about_3.jpeg); ">
                                       
                                    </li>
                                    <li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/about_4.png); ">
                                        
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>



                <div id="fh5co-content-section" class="fh5co-section-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                                <h3>Lokasi</h3>
                                <p>Jl. H. Joko RT 01 RW 03 no. 45 <br> Kelurahan Lenteng Agung, Kecamatan Jagakarsa <br> Jakarta Selatan 12610</p>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="container_iframe">

                            <iframe class="responsive-iframe " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15888.56188786327!2d105.32482725!3d-5.39555665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69edc67a3fc1d1%3A0x1765be8317573b07!2s45%2C%20Gg.%20H.%20Joko%20No.1%2C%20RT.7%2FRW.4%2C%20Lenteng%20Agung%2C%20Kec.%20Jagakarsa%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012630!5e0!3m2!1sen!2sid!4v1625661816428!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <!-- fh5co-content-section -->




            </div>
            <footer>
                <div id="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 text-center">
                                <p>Copyright Majelis Taklim Al Minhaj</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- END fh5co-page -->

        </div>
        <!-- END fh5co-wrapper -->

        <!-- jQuery -->


        <script src="{{asset('js/jquery.min.js')}}"></script>
        <!-- jQuery Easing -->
        <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- Waypoints -->
        <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('js/sticky.js')}}"></script>

        <!-- Stellar -->
        <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
        <!-- Superfish -->
        <script src="{{asset('js/hoverIntent.js')}}"></script>
        <script src="{{asset('js/superfish.js')}}"></script>

        <!-- Main JS -->
        <script src="{{asset('js/main.js')}}"></script>
    </div>
</body>

</html>