<!DOCTYPE html>

<html lang="en">
<head>
<title>Thirumangalam</title>
<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description" content="Church - HTML Template" />
<meta name="keywords" content="Church HTML Template, church, html template, html theme, church theme,bible, charity, christ, christian, church, churches, events, mosque, non profit, religion, religious, sermon">
<meta name="author" content="wp-organic" />
<meta name="MobileOptimized" content="320" />
<!-- favicon-icon -->
<link rel="icon" type="image/icon" href="{{asset('frontend/images/')}}"> 
<!-- theme style -->
<!-- bootstrap css -->
<link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/> 
<!-- fontawesome css -->
<link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/> 
<!-- flat icons css -->
<link href="{{asset('frontend/css/flaticon.css')}}" rel="stylesheet" type="text/css"/> 
<!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,900|Source+Sans+Pro:300,400,600,700" rel="stylesheet">
<!-- menu css -->
<link href="{{asset('frontend/css/menumaker.css')}}" rel="stylesheet" type="text/css"/> 
<!-- owl carousel css -->
<link href="{{asset('frontend/css/owl.carousel.css')}}" rel="stylesheet" type="text/css"/> 
<!-- magnify popup css -->
<link href="{{asset('frontend/css/magnific-popup.css')}}" rel="stylesheet" type="text/css"/> 
<!-- datepicker css -->
<link href="{{asset('frontend/css/datepicker.css')}}" rel="stylesheet" type="text/css"/> 
<!-- custom css -->
<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css"/> 
<!-- end theme style -->
</head>
<!-- end head -->
<!--body start-->
<body>
<!-- preloader --> 
  <div class="preloader">
    <div class="status">
      <div class="status-message">
      </div>
    </div>
  </div>
<!-- end preloader --> 
<!--  navigation -->
  <div class="nav-bar navbar-fixed-top">
    <div class="container">
      <div class="row" style="width: 100%">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="logo">
            {{-- <a href="index.html"><img src="{{asset('frontend/images/logo.png')}}" alt="logo"></a> --}}
          </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" style="margin-bottom: 30px;">
          <div class="navigation-menu">
            <div id="cssmenu">
              <ul>
                <li><a href="/">Home</a></li>                                  
                <li><a href="#">Temple</a></li>
                <li><a href="#">Offerings</a></li>
                <li><a href="#">Pooja time</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">News & Events</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Administration</a></li>
                <li><a href="#">Festivals</a></li>


              </ul>
            </div>
          </div>
        </div>        
      </div>
    </div>
  </div> 
<!--  end navigation -->
<!-- search -->
  <div class="search">
    <div class="container clearfix">
      <input type="search" class="search-box" placeholder="Type anything here...."/>
      <a href="#" class="fa fa-times search-close"></a>
    </div>
  </div>
<!--end search -->










@yield('body')















<!-- footer -->
  <footer id="footer" class="footer-main-block">
    <div class="bg-img" style="background-image: url('{{asset('frontend/images/footer-bg.jpg')}}')">
      <div class="overlay-bg"></div>
      <div class="container">
        <div class="row footer-block">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="footer-logo">
              {{-- <a href="index.html"><img src="{{asset('frontend/images/footer-logo.png')}}" class="img-responsive" alt="footer-logo"></a> --}}
            </div>
            <div class="row footer-content">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><p>Santa Cruz Office:</p></div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9"><p>Wporganic Themes<br>Block 145 Antela Road<br>Bredsbin Austrlia </p></div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><p>Phone:</p></div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9"><p class="contact-no"><a href="tel:012123456789">012 123 456 789</a><br><a href="tel:012123456789">012 123 456 789</a></p></div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><p>Email:</p></div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                <p class="mail-to"><a href="mailto:wporganic@example.com?Subject=Hello%20again" target="_top">wporganic@example.com</a><br>
                <a href="mailto:wporganic@example.com?Subject=Hello%20again" target="_top">wporganic@example.com</a></p>
              </div>
            </div>
          </div> 
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">  
            
                    
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="footer-section">
              <h6 class="footer-heading">Our Causes</h6>
            </div>
            <div class="accor-widget footer-cause-block">
              <div class="panel-group cause-panel" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <p class="panel-title question-heading">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span class="btn btn-default cause-btn cause-btn-minus"><i class="fa fa-minus"></i></span>
                        <span class="btn btn-default cause-btn cause-btn-plus"><i class="fa fa-plus"></i></span>
                        Do you have an installation service?
                      </a>
                    </p>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                      <p>Dramatically redefine effective users for synergistic e-business.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingTwo">
                    <p class="panel-title question-heading">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <span class="btn btn-default cause-btn cause-btn-minus"><i class="fa fa-minus"></i></span>
                        <span class="btn btn-default cause-btn cause-btn-plus"><i class="fa fa-plus"></i></span>
                        Are updates free of charge?
                      </a>
                    </p>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                      <p>Dramatically redefine effective users for synergistic e-business.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingThree">
                    <p class="panel-title question-heading">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        <span class="btn btn-default cause-btn cause-btn-minus"><i class="fa fa-minus"></i></span>
                        <span class="btn btn-default cause-btn cause-btn-plus"><i class="fa fa-plus"></i></span>
                        Can i use Semona on all projects?
                      </a>
                    </p>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                      <p>Dramatically redefine effective users for synergistic e-business.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>         
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">          
            <div class="footer-section">
              <h6 class="footer-heading">Our Gallery</h6>
            </div>
            <div class="footer-content portfolio-popup">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 portfolio-item">
                <div class="portfolio-img">
                  <img src="{{asset('frontend/images/gallery/gallery-03.jpg')}}" class="img-responsive" alt="gallery-thumb-01">
                  <div class="portfolio-overlay"><a href="images/gallery/gallery-01.jpg"><i class="fa fa-plus"></i></a></div>
                </div>           
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 portfolio-item">
                <div class="portfolio-img">
                  <img src="{{asset('frontend/images/gallery/gallery-03.jpg')}}" class="img-responsive" alt="gallery-thumb-02">
                  <div class="portfolio-overlay"><a href="images/ministry/ministry-leader.jpg"><i class="fa fa-plus"></i></a></div>
                </div>           
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 portfolio-item">
                <div class="portfolio-img">
                  <img src="{{asset('frontend/images/footer/gallery/gallery-03.jpg')}}" class="img-responsive" alt="gallery-thumb-03">
                  <div class="portfolio-overlay"><a href="images/donation/donation-04.jpg"><i class="fa fa-plus"></i></a></div>
                </div>           
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 portfolio-item">
                <div class="portfolio-img">
                  <img src="{{asset('frontend/images/footer/gallery/gallery-03.jpg')}}" class="img-responsive" alt="gallery-thumb-04">
                  <div class="portfolio-overlay"><a href="images/gallery/gallery-06.jpg"><i class="fa fa-plus"></i></a></div>
                </div>           
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 portfolio-item">
                <div class="portfolio-img">
                  <img src="{{asset('frontend/images/footer/gallery/gallery-03.jpg')}}" class="img-responsive" alt="gallery-thumb-05">
                  <div class="portfolio-overlay"><a href="images/gallery/gallery-09.jpg"><i class="fa fa-plus"></i></a></div>
                </div>           
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 portfolio-item">
                <div class="portfolio-img">
                  <img src="{{asset('frontend/images/gallery/gallery-03.jpg')}}" class="img-responsive" alt="gallery-thumb-06">
                  <div class="portfolio-overlay"><a href="images/gallery/gallery-10.jpg"><i class="fa fa-plus"></i></a></div>
                </div>           
              </div>                
            </div>
          </div>
        </div>  
        <div class="row">     
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer-dtl text-center">
            {{-- <p>Copyright &copy; 2017 <a href="index.html">Church</a> HTML Template by WP-Organic</p> --}}
          </div> 
        </div>
      </div> 
    </div>
  </footer>
<!-- end footer -->
<!-- jquery -->
<!-- jquery library js -->
<script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script> 
<!-- bootstrap js -->
<script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js')}}"></script> 
 <!-- owl carousel js -->
<script type="text/javascript" src="{{asset('frontend/js/owl.carousel.js')}}"></script>
<!-- mail chimp js -->
<script type="text/javascript" src="{{asset('frontend/js/jquery.ajaxchimp.js')}}"></script> 
<!-- smooth scroll js -->
<script type="text/javascript" src="{{asset('frontend/js/smooth-scroll.js')}}"></script>
<!-- magnify popup js-->
<script type="text/javascript" src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script> 
<!-- menu js--> 
<script type="text/javascript" src="{{asset('frontend/js/menumaker.js')}}"></script> 
<!-- price slider js -->
<script type="text/javascript" src="{{asset('frontend/js/price-slider.js')}}"></script> 
 <!-- event countdown js --> 
<script type="text/javascript" src="{{asset('frontend/js/jquery.countdown.js')}}"></script> 
<!-- custom js -->  
<script type="text/javascript" src="{{asset('frontend/js/theme.js')}}"></script> 
<!-- end jquery -->
</body>
<!--body end -->

</html>
