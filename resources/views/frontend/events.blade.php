@extends('layouts.frontend')
@section('body')
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

@endsection