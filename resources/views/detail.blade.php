<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>
        Al Minhaj
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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
    <link rel="shortcut icon" href="favicon.ico" />

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
                                        <li><a href="/inbox">Inbox</a></li>
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

            <div id="fh5co-feature-product" class="fh5co-section-gray">
                @foreach($post as $key=>$value)
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center heading-section">
                            <h3>{{$value->judul}}</h3>
                        </div>
                    </div>
                    <div class="slideshow-container">
                        <div class="mySlides">
                            <img src="{{asset('images/'.$value->gambar1)}}" style="width: 100%" />
                            <div class="text">Gambar Kegiatan 1</div>
                        </div>
                        @if(!empty($value->gambar2))
                        <div class="mySlides">
                            <img src="{{asset('images/'.$value->gambar2)}}" style="width: 100%" />
                            <div class="text">Gambar Kegiatan 2</div>
                        </div>
                        @endif
                        @if(!empty($value->gambar3))
                        <div class="mySlides">
                            <img src="{{asset('images/'. $value->gambar3)}}" style="width: 100%" />
                            <div class="text">Gambar Kegiatan 3</div>
                        </div>
                        @endif
                        @if(!empty($value->gambar4))
                        <div class="mySlides">
                            <img src="{{asset('images/'.$value->gambar4)}}" style="width: 100%" />
                            <div class="text">Gambar Kegiatan 4</div>
                        </div>
                        @endif
                        @if(!empty($value->gambar5))
                        <div class="mySlides">
                            <img src="{{asset('images/'.$value->gambar5)}}" style="width: 100%" />
                            <div class="text">Gambar Kegiatan 5</div>
                        </div>
                        @endif
                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <div style="text-align:center; margin: 1em">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        @if(!empty($value->gambar2))
                        <span class="dot" onclick="currentSlide(2)"></span>
                        @endif
                        @if(!empty($value->gambar3))
                        <span class="dot" onclick="currentSlide(3)"></span>
                        @endif
                        @if(!empty($value->gambar4))
                        <span class="dot" onclick="currentSlide(4)"></span>
                        @endif
                        @if(!empty($value->gambar5))
                        <span class="dot" onclick="currentSlide(5)"></span>
                        @endif
                    </div>
                    <div class="col-md-12">
                        <p style="font-size: 15pt">
                            {!!$value->isi!!}
                        </p>
                    </div>
                </div>
                @guest
                <div></div>
                @elseif(Auth::user()->type_user == '1')
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">

                            <a href="{{route('edit_post', ['id' => $value->id])}}" class="btn btn-primary btn-lg">Edit</a>
                            <a href="#" class="btn btn-secondary btn-lg" style="margin-left: 2em;" data-toggle="modal" data-target="#deleteModal">Hapus</a>
                            @if($value->is_terbaru!='1')
                            <a href="{{route('terbaru', ['id' => $value->id])}}" class="btn btn-primary btn-lg" style="margin-top: 2em;">Jadikan Berita Terbaru</a>
                            @endif
                        </div>

                    </div>
                </div>
                @endguest

            </div>


            <!-- fh5co-content-section -->



        </div>
        <!-- END fh5co-page -->
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
    </div>
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
                    <a class="btn btn-primary" href="{{ route('hapus_post', ['id' => $value->id]) }}">Iya</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
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
    <script src="{{asset('js/carouseljs.js')}}"></script>
</body>

</html>