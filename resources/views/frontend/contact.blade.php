@extends('layouts.frontend')
@section('body')
 <!-- ================> PageHeader section start here <================== -->
 <div class="pageheader">
    <div class="container">
        <div class="pageheader__area">
            <div class="pageheader__left">
                <h3>Contact</h3>
            </div>
        </div>
    </div>
</div>
<!-- ================> PageHeader section end here <================== -->



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
                    <input type="email" placeholder="Your Email" id="email" name="email" required>
                    <input class="w-100" type="text" placeholder="Subject" id="subject" name="subject" required>
                    <textarea placeholder="Your Message" rows="8" name="message" id="message" required></textarea>
                    <div class="text-center w-100">
                        <button type="submit" class="default-btn move-right"><span>SEND NOW</span></button>
                    </div>
                </form>
                
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
                   {!!$contact->map!!}                 

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
                                    <img src="{{$contact->image}}" alt="location thumb" width="100px" height="100px">
                                </div>
                                <div class="location__info-content">
                                    <h6>{{$contact->name}}</h6>
                                    <span>{{$contact->post}}</span>
                                    <ul>
                                        <li><b>Tel:</b>{{$contact->number}}</li>
                                        <li><b>Email:</b>{{$contact->email}}</li>
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
                                                <p>{{$contact->location}}</p>
                                            </div> 
                                        </li>
                                        <li>
                                            <div class="location__info-left">
                                                <i class="far fa-clock"></i>
                                            </div> 
                                            <div class="location__info-right">
                                                <ul>
                                                    {!!$contact->content!!}
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