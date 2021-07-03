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
    <title>Charity &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
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
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- Superfish -->
    <link rel="stylesheet" href="{{asset('css/superfish.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">


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
                            <a href="#">FAQ</a>
                            <a href="#">Forum</a>
                            <a href="#">Contact</a>
                        </div>
                        <div class="col-md-6 col-sm-6 text-right fh5co-social">
                            <a href="#" class="grow"><i class="icon-facebook2"></i></a>
                            <a href="#" class="grow"><i class="icon-twitter2"></i></a>
                            <a href="#" class="grow"><i class="icon-instagram2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <header id="fh5co-header-section" class="sticky-banner">
                <div class="container">
                    <div class="nav-header">
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
                        <h1 id="fh5co-logo"><a href="index.html">Charity</a></h1>
                        <!-- START #fh5co-menu-wrap -->
                        <nav id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu" id="fh5co-primary-menu">
                                @guest
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li class="active">
                                    <a href="#" class="fh5co-sub-ddown">Kegiatan Organisasi</a>
                                    <ul class="fh5co-sub-menu">
                                        <li><a href="{{route('safari')}}">Safari taklim</a></li>
                                        <li><a href="{{route('khotmil')}}">Khotmil Al Qur'an</a></li>
                                        <li><a href="{{route('berbagi')}}">Al minhaj berbagi</a></li>

                                    </ul>
                                </li>

                                <li>
                                    <a href="{{route('about')}}">Tentang Kami</a>
                                </li>
                                @else
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li class="active">
                                    <a href="#" class="fh5co-sub-ddown">Kegiatan Organisasi</a>
                                    <ul class="fh5co-sub-menu">
                                        <li><a href="{{route('safari')}}">Safari taklim</a></li>
                                        <li><a href="{{route('khotmil')}}">Khotmil Al Qur'an</a></li>
                                        <li><a href="{{route('berbagi')}}">Al minhaj berbagi</a></li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="fh5co-sub-ddown">Edukasi</a>
                                    <ul class="fh5co-sub-menu">
                                        <li><a href="{{route('mengaji')}}">Mengaji Online</a></li>
                                        <li><a href="{{route('audios')}}">Murrotal</a></li>
                                    </ul>
                                </li>
                                <li>
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
                <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
                    <div class="desc animate-box">
                        <h2>Khotmil <strong>Al-Quran</strong></h2>
                        <span>Khotmil Al-Quran oleh Al Minhaj </span>
                    </div>
                </div>

            </div>

            <div id="fh5co-blog-section" class="fh5co-section-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                            <h3>Motto Khotmil Al-Quran</h3>
                            <p>Penjelasan Singkat Tentang Khotmil Al Quran</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row row-bottom-padded-md">
                        @foreach($post as $key=>$value)
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="fh5co-blog animate-box">
                                <a href="#"><img class="img-responsive" src="{{asset('images/'. $value->gambar1)}}" alt=""></a>
                                <div class="blog-text">
                                    <div class="prod-title">
                                        <h3><a href="{{route('detail', ['id' => $value->id])}}" #>{{$value->judul}}</a></h3>
                                        <span class="posted_by">Sep. 15th</span>
                                        <p>{!!\Illuminate\Support\Str::limit($value->isi, 25, $end='...')!!}</p>
                                        <p><a href="{{route('detail', ['id' => $value->id])}}">Learn More...</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 text-center animate-box">
                                <a href="#" class="btn btn-primary btn-lg">Our Blog</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- fh5co-blog-section -->



            </div>
            <!-- END fh5co-page -->

        </div>
        <!-- END fh5co-wrapper -->

        <!-- jQuery -->

        <footer>
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <p class="fh5co-social-icons">
                                <a href="#"><i class="icon-twitter2"></i></a>
                                <a href="#"><i class="icon-facebook2"></i></a>
                                <a href="#"><i class="icon-instagram"></i></a>
                                <a href="#"><i class="icon-dribbble2"></i></a>
                                <a href="#"><i class="icon-youtube"></i></a>
                            </p>
                            <p>Copyright 2016 Free Html5 <a href="#">Charity</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
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

</body>

</html>