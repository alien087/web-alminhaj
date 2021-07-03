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

                                    </ul>
                                </li>

                                <li>
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

                                    </ul>
                                </li>
                                <li class="active">
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
                        <h2>Mendengar Murrotal <strong>Bersama Al Minhaj</strong></h2>
                        <span>Mengaji Bersama oleh Al Minhaj </span>
                    </div>
                </div>

            </div>

            <div id="fh5co-blog-section" class="fh5co-section-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                            <h3>Motto Murrotal</h3>
                            <p>Penjelasan Singkat Tentang Murrotal Online</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    @foreach($post as $key=>$value)

                    <h2>{{$value->judul}}</h2>
                    <audio controls style="width:100%; margin-bottom: 2em;">

                        <source src="{{asset('audio/'.$value->file)}}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                    @if(Auth::user()->type_user == '1')
                    <div class="container" style="margin-bottom: 2em">
                        <div class="row">
                            <div class="col-md-4">

                                <a href="{{route('edit_murrotal', ['id' => $value->id])}}" class="btn btn-primary btn-lg">Edit</a>

                                <a href="{{ route('hapus_murrotal', ['id' => $value->id]) }}" class="btn btn-secondary btn-lg" style="margin-left: 2em;">Hapus</a>

                            </div>

                        </div>
                    </div>
                    @endif
                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda Yakin ingin menghapusnya?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Jika iya, pilih tombol "Iya"</div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <a class="btn btn-primary" href="">Iya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                        <p>Copyright Majelis Taklim Al Minhaj</p>/div>
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