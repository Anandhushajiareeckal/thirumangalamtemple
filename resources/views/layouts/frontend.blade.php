@php
namespace App\Models;
use App\Models\social;
use App\Models\logo;
use App\Models\contact;
use App\Models\event;
$social = social::all();
$logo = logo::find($id=1); 
$contact = contact::find($id=1);
$event = event::latest()->take(3)->get();
@endphp
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thirumangalam temple</title>
    <link rel="shortcut icon" href="{{$logo->fav}}" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/lightcase.css')}}">

    <!-- main css for template -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.min.css')}}">
</head>

<body>

    <!-- ================> preloader start here <================ -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ================> preloader ending here <================ -->

    <!-- ================> Header Search <================ -->
    <div class="header-form">
        <div class="bg-lay">
            <div class="cross">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <form class="form-container">
            <input type="text" placeholder="Input Your Search" name="name">
            <button type="submit">Search</button>
        </form>
    </div>
    <!-- ================> Header Search <================ -->


    <!-- ================> header section start here <================== -->
    <header class="header">
        <div class="navbar-expand-xl">
            <div class="collapse navbar-collapse" id="menubar2">
                <div class="header__top w-100">
                    <div class="container">
                        <div class="header__top-area">
                            <div class="header__top-left">
                                <ul>
                                    <li>
                                        <i class="fas fa-phone-alt"></i>
                                        {{$contact->number}}
                                    </li>
                                    <li>
                                        <i class="fas fa-envelope"></i>
                                        {{$contact->email}}
                                    </li>
                                </ul>
                            </div>
                            <div class="header__top-center">
                                <div class="header__top-logo d-none d-md-block" >
                                    <a href="/"><img style="width:170px; height:155px;" src="{{$logo->logo}}" alt="logo"></a>
                                </div>
                            </div>
                            <div class="header__top-right">
                                <div class="header__top-socialsearch">
                                    <div class="header__top-social">
                                        <ul>
                                            @foreach ($social as $item)
                                                @if ($item->status == 1)
                                                    <li><a href="{{$item->link}}"><i class="{{$item->icon}}"></i></a></li>
                                                @endif
                                            @endforeach 
                                        </ul>
                                    </div>
                                    <a href="https://kattumadam.com/">Kattumadam temple</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="header__bottom" >
            <div class="container " >
                <div class="header__mainmenu navbar navbar-expand-xl navbar-light" >
                    <div class="header__logo" >
                        <a href="index.html" style="width: 100px; height:100px;" class="d-none d-xl-block"><img src="{{$logo->logo}}" alt="logo"></a>
                        <a href="index.html" class="d-xl-none"><img src="{{$logo->logo}}" alt="logo"></a>
                    </div>
                    <div class="header__bar">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menubar" aria-controls="menubar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <button class="navbar-toggler header__bar-info" type="button" data-bs-toggle="collapse" data-bs-target="#menubar2" aria-controls="menubar2" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fas fa-info"></span>
                        </button>
                    </div>
                    <div class="header__menu navbar-expand-xl">
                        <div class="collapse navbar-collapse" id="menubar">
                            <ul>
                                <li class="active">
                                    <a href="/">Home</a>
                                </li>
                                <li class="active">
                                    <a href="/temple">Temple</a>
                                </li >
                                <li class="active">
                                    <a href="/offerings">Offerings</a>
                                </li>
                                <li class="active">
                                  <a href="/poojas">Poojas</a>
                              </li>
                                <li class="active">
                                    <a href="/gallery">Gallery</a>
                                </li>
                                <li class="active">
                                    <a href="/events-news">news & events</a>
                                </li >
                                <li class="active">
                                    <a href="/contact">Contact </a>
                                </li >
                                <li class="active">
                                    <a href="/administration">Administration</a>
                                </li>
                                <li class="active"><a href="/festival"> Festivals</a></li>
                            </ul>
                            <a href="cause-single.html" class="default-btn"><span>Donate Now <i class="fas fa-heart"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ================> header section end here <================== -->
    <div class="donaterange__content "style="display: none" >
    
        <div class="donaterange__bars" >
            <div class="donaterange__bar"></div>
        </div>
       
    </div>

    


@yield('body')






    <!-- ================> Social section start here <================== -->
    <div class="social">
        <div class="container">
            <div class="social__area">
                <ul class="social__list">
                    @foreach ($social as $item)
                        @if ($item->status == 1)
                            <li class="social__list-linkedin">
                                <a href="{{$item->link}}">
                                    <i class="{{$item->icon}}"></i>
                                    <span>linkedin</span>
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!-- ================> Social section end here <================== -->
    <!-- ================> Footer section start here <================== -->
    <footer class="footer">
        <div class="footer__top padding--top padding--bottom">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-4 col-sm-6 col-12">
                        <div class="footer__about">
                            <div class="section__header">
                                <h2>About Temple</h2>
                            </div>
                            <div class="section__wrapper">
                                <div class="footer__about-thumb">
                                    <img src="{{asset('frontend/images/2020-11-23.jpg')}}" alt="footer thumb" class="w-100" style="height:200px;">
                                </div>
                                <div class="footer__about-contet">
                                    <p>Dramatically strategize economically sound action items for e-business niches. Quickly re-engineer 24/365 potentialities before.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-xl-3 col-sm-6 col-12">
                        <div class="footer__tags">
                            <div class="section__header">
                                <h2>Post Tag</h2>
                            </div>
                            <div class="section__wrapper">
                                <ul>
                                    <li><a href="#">Christian</a></li>
                                    <li><a href="#">Hindu</a></li>
                                    <li><a href="#">Magazine</a></li>
                                    <li><a href="#">Muslims</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">SEO</a></li>
                                    <li><a href="#">Themes</a></li>
                                    <li><a href="#">WordPress</a></li>
                                    <li><a href="#">Web Development</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Photography</a></li>
                                    <li><a href="#">Media</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-xl-4 col-sm-6 col-12">
                        <div class="footer__post">
                            <div class="section__header">
                                <h2>Recent Post</h2>
                            </div>
                            <div class="section__wrapper">

                                @foreach ($event as $item)
                                
                                <div class="footer__post-item">
                                    <div class="footer__post-inner">
                                        <div class="footer__post-thumb">
                                            <a href="/details/{{$item->id}}"><img src="{{$item->image}}" alt="footer post"></a>
                                        </div>
                                        <div class="footer__post-content">
                                            <a href="/details/{{$item->id}}"><h6>{{$item->heading}}</h6></a>
                                            <p><i class="far fa-calendar-alt"></i> {{ $item->updated_at->format('d F Y') }}</p>
                                        </div>
                                    </div>
                                </div>
                                    
                                @endforeach
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 col-12">
                        <div class="footer__links">
                            <div class="section__header">
                                <h2>Useful Links</h2>
                            </div>
                            <div class="section__wrapper">
                                <ul>
                                    <li><a href="/temple">Temple</a></li>
                                    <li><a href="/offerings">Offerings</a></li>
                                    <li><a href="/poojas">Poojas</a></li>
                                    <li><a href="/gallery">Gallery</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                    <li><a href="/administration">Administration</a></li>
                                    <li><a href="/festival">Festivals</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="footer__bottom-area text-center">
                   
                    <div class="footer__bottom-content">
                        <p> Designed by <a href="https://cyenosure.com/">Cyenosure</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ================> Footer section end here <================== -->

    

    

    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="fas fa-arrow-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
    <!-- scrollToTop ending here -->



    

    <!-- vendor plugins -->
    <script src="{{asset('frontend/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
    {{-- <script src="{{asset('frontend/js/all.min.js')}}"></script>  --}}
    <script src="{{asset('frontend/js/swiper.min.js')}}"></script>
    <script src="{{asset('frontend/js/lightcase.js')}}"></script>
    <script src="{{asset('frontend/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/js/donate-range.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('frontend/js/wow.js')}}"></script>
    <script src="{{asset('frontend/js/custom.js')}}"></script>
</body>

</html>