@extends('layouts.frontend')
@section('body')
  <!-- ================> Banner section start here <================== -->
  <div class="banner__slider banner-style3 overflow-hidden">
    <div class="swiper-wrapper">
      @foreach ($banner as $item)
        <div class="swiper-slide">
            <div class="banner" style="background-image: url({{$item->image}});">
                <div class="container">
                    <div class="banner__content ms-lg-auto">
                        <h2 class="text-light">{{$item->heading}}</h2>
                        <p class="text-light" >{{$item->description  }}</p>
                        <a href="#" class="default-btn move-right"><span>GET HELP NOW</span></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        {{-- <div class="swiper-slide">
            <div class="banner" style="background-image: url({{asset('frontend/images/banner/08.jpg')}});">
                <div class="container">
                    <div class="banner__content ms-lg-auto">
                        <h2>Love To Human Is Biggest Peace</h2>
                        <p>Enthusiastically underwhelm quality benefits rather than professional "outside the box" thinking. Distinctively network highly efficient leadership skills</p>
                        <a href="#" class="default-btn move-right"><span>GET HELP NOW</span></a>
                    </div>
                </div>
            </div>
        </div> --}}
       
    </div>
</div>
<!-- ================> Banner section end here <================== -->

<!-- ================> Service section start here <================== -->
<div class="service padding--top padding--bottom">
    <div class="container">
        <div class="section__header text-center">
            <h2>Our Services</h2>
            <p>Enthusiastically underwhelm quality benefits rather than professional outside the box thinking. Distinctively network highly efficient leadership skills</p>
        </div>
        <div class="section__wrapper">
            <div class="row g-4 align-items-center">
                <div class="col-lg-3 col-12">
                    <div class="service__left">
                        <div class="service__item">
                            <div class="service__inner">
                                <div class="service__icon">
                                    <i class="{{$service[0]->icon}}"></i>
                                </div>
                                <div class="service__content">
                                    <h5>{{$service[0]->heading}}</h5>
                                    <p>{{$service[0]->description}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="service__item">
                            <div class="service__inner">
                                <div class="service__icon">
                                    <i class="{{$service[1]->icon}}"></i>
                                </div>
                                <div class="service__content">
                                    <h5>{{$service[1]->heading}}</h5>
                                    <p>{{$service[1]->description}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="service__item">
                            <div class="service__inner">
                                <div class="service__icon">
                                    <i class="{{$service[2]->icon}}"></i>
                                </div>
                                <div class="service__content">
                                    <h5>{{$service[2]->heading}}</h5>
                                    <p>{{$service[2]->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="service__center">
                        <div class="service__text">
                            <p>WHAT</p>
                            <h3>Services</h3>
                            <h6>WE PROVID</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="service__right">
                        <div class="service__item">
                            <div class="service__inner">
                                <div class="service__icon">
                                    <i class="{{$service[3]->icon}}"></i>
                                </div>
                                <div class="service__content">
                                    <h5>{{$service[3]->heading}}</h5>
                                    <p>{{$service[3]->description}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="service__item">
                            <div class="service__inner">
                                <div class="service__icon">
                                    <i class="{{$service[4]->icon}}"></i>
                                </div>
                                <div class="service__content">
                                    <h5>{{$service[4]->heading}}</h5>
                                    <p>{{$service[4]->description}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="service__item">
                            <div class="service__inner">
                                <div class="service__icon">
                                    <i class="{{$service[5]->icon}}"></i>
                                </div>
                                <div class="service__content">
                                    <h5>{{$service[5]->heading}}</h5>
                                    <p>{{$service[5]->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ================> Service section end here <================== -->


<!-- ================> gallery section start here <================== -->
<div class="gallery padding--top padding--bottom bg-light">
    <div class="container-fluid">
        <div class="section__header text-center">
            <h2>Gallery</h2>
        </div>
        <div class="section__wrapper">
            <div class="gallery__filter">
                <ul>    
                    <li data-filter="*" class="active">All</li>
                        @foreach ($image_category as $item)
                            <li data-filter=".{{$item->id}}">{{$item->category}}</li>
                        @endforeach
                </ul>
            </div>
            <div class="row g-0 grid">
                @foreach ($image as $item)
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12 {{$item->category_id}}">
                    <div class="gallery__item">
                        <div class="gallery__inner" style="width: 240px; height:200px">
                            <div class="gallery__thumb">
                                <img src="{{$item->image}}" alt="gallery-thumb" class="w-100" style=" height:200px;">
                            </div>
                            <div class="gallery__content text-center">
                                <a href="{{$item->image}}" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="text-center mt-5">
                <a href="#" class="default-btn move-right"><span>View All</span></a>
            </div>
        </div>
    </div>
</div>
<!-- ================> gallery section end here <================== -->


<!-- ================> Event section start here <================== -->
<div class="event padding--top padding--bottom">
    <div class="container">
        <div class="section__header text-center">
            <h2>Recent Event</h2>
            <p>Enthusiastically underwhelm quality benefits rather than professional outside the box thinking. Distinctively network highly efficient leadership skills</p>
        </div>
        <div class="section__wrapper">
            <div class="row g-4 justify-content-center">
                @foreach ($event as $item)
                
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="event__item">
                        <div class="event__inner">
                            <div class="event__thumb">
                                <a href="/details/{{$item->id}}"><img src="{{$item->image}}" alt="event thumb" style="height:200px"></a>
                               
                            </div>
                            <div class="event__content">
                                <a href="/details/{{$item->id}}"><h5>{{$item->heading}}</h5></a>
                                <div class="event__metapost">
                                    <ul class="event__metapost-info">
                                        <li><i class="far fa-clock"></i> {{$item->time}}</li>
                                        <li><i class="fas fa-map-marker-alt"></i>{{$item->location}}</li>
                                    </ul>
                                </div>
                                <p>{{ substr($item->description, 0, 180) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                    
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- ================> Event section end here <================== -->


<!-- ================> Shedule section start here <================== -->
<div class="shedule padding--top padding--bottom bg-img" style="background: url({{asset('frontend/images/bg-img/07.jpg')}}) rgba(0,0,0,.4);">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-4 col-12">
                <div class="section__header mb-xl-0 text-white">
                    <h2 class="text-white">Festival Schedule</h2>
                    <p>Dramatically strategize economically sound action items for e-business niches. Quickly re-engineer 24/365 potentialities before.</p>
                    <p class="mb-0">Holisticly extend sticky partnerships and cross functional markets. Monotonectally.</p>
                </div>
            </div>
            <div class="col-xl-8 col-12">
                <div class="section__wrapper">
                    <div class="shedule__top">



                        @foreach ($event as $item)
                            <div class="shedule__item">
                                <div class="shedule__inner">
                                    <div class="shedule__content">
                                        <div class="shedule__left">
                                            <div class="shedule__title">
                                                <h6>{{$item->heading}}</h6>
                                                <p>{{$item->time}}</p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        @endforeach


                         
                       
                        
                       
                        
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ================> Shedule section end here <================== -->


<!-- ================> Sermon section start here <================== -->
<div class="sermon padding--top padding--bottom bg-light">
    <div class="container">
        <div class="section__header text-center">
            <h2>Upadevas</h2>
            <p>Proin Eget Tortor Risus. Cras ultricies ligula sed magna dictum porta. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
        </div>
        <div class="section__wrapper">
            <div class="row g-4">
                @foreach ($upadeva as $item)
                
                <div class="col-lg-6 col-12">
                    <div class="sermon__item">
                        <div class="sermon__inner">
                            <div class=" " style="width:150px; ">
                                <img src="{{$item->image}}" alt="sermon thumb" style="height:140px;">
                            </div>
                            <div class="sermon__content">
                                <a href="upadevas/{{$item->id}}"><h6>{{$item->heading}}</h6></a>
                                <ul class="sermon__content-metapost">
                                    <li></i> {{ substr($item->description, 0,80) }}...</li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
    
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- ================> Sermon section end here <================== -->



  <!-- ================> Cause section start here <================== -->
  {{-- <div class="cause padding--top padding--bottom bg-img" style="background: url(assets/images/bg-img/08.jpg) rgba(0,0,0,.4); display:none">
    <div class="container">
        <div class="section__header text-center">
            <h2 class="text-white">Urgent Causes</h2>
        </div>
        <div class="section__wrapper">
            <div class="cause__top row justify-content-center g-4 row-cols-xl-5 row-cols-md-3 row-cols-sm-2 row-cols-1">
                <div class="cause__item">
                    <div class="cause__inner">
                        <div class="cause__content">
                            <h3>82.5%</h3>
                            <h6>Founded</h6>
                        </div>
                    </div>
                </div>
                <div class="cause__item">
                    <div class="cause__inner">
                        <div class="cause__content">
                            <h3>$ 1650</h3>
                            <h6>Donate</h6>
                        </div>
                    </div>
                </div>
                <div class="cause__item">
                    <div class="cause__inner">
                        <div class="cause__content">
                            <h3>$ 2000</h3>
                            <h6>Goal</h6>
                        </div>
                    </div>
                </div>
                <div class="cause__item">
                    <div class="cause__inner">
                        <div class="cause__content">
                            <h3>10</h3>
                            <h6>Donator</h6>
                        </div>
                    </div>
                </div>
                <div class="cause__item">
                    <div class="cause__inner">
                        <div class="cause__content">
                            <h3>60</h3>
                            <h6>Day to go</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cause__bottom">
                <div class="cause__bars">
                  
                </div>
            </div>
        </div>
    </div>
</div> --}}




<!-- ================> Contact section start here <================== -->
<div class="contact padding--top padding--bottom bg-light">
    <div class="container">
        <div class="section__header text-center">
            <h2>Contact Us</h2>
            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
        </div>
        <div class="section__wrapper">
            <div class="contact__form">
                <form class="d-flex flex-wrap justify-content-between" action="/enquiry" id="contact-form" method="POST">
                    @csrf
                    <input type="text" placeholder="Your Name" id="name" name="name" required="required">
                    <input type="text" placeholder="Your Email" id="email" name="email" required>
                    <input class="w-100" type="text" placeholder="Subject" id="subject" name="subject" required>
                    <textarea placeholder="Your Message" rows="8" name="message" id="message" required></textarea>
                    <div class="text-center w-100">
                        <button type="submit" class="default-btn move-right"><span>SEND NOW</span></button>
                    </div>
                </form>
                <p class="form-message"></p> 
            </div> 
        </div>
    </div>
</div>
<!-- ================> Contact section end here <================== -->


<!-- ================> Location section start here <================== -->
<div class="location">
    <div class="container-fluid">
        <div class="row g-0">
            <div class="col-lg-6 col-12">
                <div class="location__left">
                    <div class="location__map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423283.4355669374!2d-118.69192993092697!3d34.02073049448939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1633958856057!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="location__right padding--top padding--bottom">
                    <div class="location__info">
                        <div class="location__info-top">
                            <div class="section__header">
                                <h2>Contact Person</h2>
                            </div>
                            <div class="section__wrapper">
                                <div class="location__info-thumb">
                                    <img src="{{asset('frontend/images/location/01.jpg')}}" alt="location thumb">
                                </div>
                                <div class="location__info-content">
                                    <h6>Deniyel Murchi</h6>
                                    <span>Church Pastor</span>
                                    <ul>
                                        <li><b>Tel:</b>+002145698</li>
                                        <li><b>Email:</b>info@yourmail.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="location__info-bottom">
                            <div class="section__header">
                                <h2>Contact Info</h2>
                            </div>
                            <div class="section__wrapper">
                                <div class="location__info-list">
                                    <ul>
                                        <li>
                                            <div class="location__info-left">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div> 
                                            <div class="location__info-right">
                                                <p>Inner Circular Road, New Fabada Streed Barmuda, USA.</p>
                                            </div> 
                                        </li>
                                        <li>
                                            <div class="location__info-left">
                                                <i class="far fa-clock"></i>
                                            </div> 
                                            <div class="location__info-right">
                                                <ul>
                                                    <li><b>Monday-Thursday :</b> 06:00 am - 09:00 pm</li>
                                                    <li><b>Friday :</b> 10:30 am - 05:30 pm</li>
                                                    <li><b>Saturday :</b> 10:30 am - 05:30 pm</li>
                                                    <li><b>Sunday :</b> Closed</li>
                                                </ul>
                                            </div> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ================> Location section end here <================== -->







@endsection