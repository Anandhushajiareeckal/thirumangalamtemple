@extends('layouts.frontend')
@section('body')

<!-- ================> PageHeader section start here <================== -->
<div class="pageheader">
    <div class="container">
        <div class="pageheader__area">
            <div class="pageheader__left">      
                <h3>Temple</h3>
            </div>
        </div>
    </div>
</div>
<!-- ================> PageHeader section end here <================== -->


<!-- ================> Sermon section start here <================== -->
<div class="sermon sermon-single padding--top padding--bottom bg-light">
    <div class="container">
        <div class="section__wrapper">
            <div class="row g-4">
                <div class="col-lg-9 col-12">
                    <div class="sermon__item">
                        <div class="sermon__inner">
                            
                            <p>{!!$festival->content!!}</p>
                        </div>
                    </div>

                </div>
                
                <div class="col-lg-3 col-12">
                    <div class="sidebar">
                        
                        <div class="sidebar__tab">
                            <div class="section__header">
                                <h2>Upadevas</h2>
                            </div>
                            <div class="section__wrapper">
                               
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="post" role="tabpanel" aria-labelledby="post-tab">
                                        <div class="footer__post">
                                            <div class="section__wrapper">


                                                @foreach ($upadeva as $item)
                                                    <div class="footer__post-item">
                                                        <div class="footer__post-inner">
                                                            <div class="footer__post-thumb">
                                                                <a href="/upadevas/{{$item->id}}"><img style="height: 80px;" src="{{$item->image}}" alt="footer post"></a>
                                                            </div>
                                                            <div class="footer__post-content">
                                                                <a href="/upadevas/{{$item->id}}"><h6>{{$item->heading}}</h6></a>
                                                                <p> {{ substr($item->description, 0,50) }}</p>
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



                        <div class="sidebar__tab">
                            <div class="section__header">
                                <h2>Events</h2>
                            </div>
                            <div class="section__wrapper">
                               
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="post" role="tabpanel" aria-labelledby="post-tab">
                                        <div class="footer__post">
                                            <div class="section__wrapper">


                                                @foreach ($upadeva as $item)
                                                    <div class="footer__post-item">
                                                        <div class="footer__post-inner">
                                                            <div class="footer__post-thumb">
                                                                <a href="/upadevas/{{$item->id}}"><img style="height: 80px;" src="{{$item->image}}" alt="footer post"></a>
                                                            </div>
                                                            <div class="footer__post-content">
                                                                <a href="/upadevas/{{$item->id}}"><h6>{{$item->heading}}</h6></a>
                                                                <p> {{ substr($item->description, 0,50) }}</p>
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
                    </div>
                </div>
              
                

            </div>
        </div>
    </div>
</div>
<!-- ================> Sermon section end here <================== -->




@endsection