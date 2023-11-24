@extends('layouts.frontend')
@section('body')
    <!-- ================> PageHeader section start here <================== -->
    <div class="pageheader">
        <div class="container">
            <div class="pageheader__area">
                <div class="pageheader__left">
                    <h3>Gallery</h3>
                </div>
                <div class="pageheader__right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> PageHeader section end here <================== -->


    <!-- ================> gallery section start here <================== -->
    <div class="gallery padding--top padding--bottom bg-light">
        <div class="container-fluid">
            <div class="section__header text-center">
                <h2>Our Gallery </h2>
                <p>Enthusiastically underwhelm quality benefits rather than professional outside the box thinking. Distinctively network highly efficient leadership skills</p>
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
                
                <div class="row g-3 grid">
                    @foreach ($image as $item)
                    <div class="col-lg-3 col-sm-6 col-12 {{$item->category_id}}">
                        <div class="gallery__item">
                            <div class="gallery__inner" style="width: 350px; height:250px">
                                <div class="gallery__thumb ">
                                    <img src="{{$item->image}}" alt="gallery-thumb" class="w-100"  style="; width:450px; height:250px">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="{{$item->image}}" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- ================> gallery section end here <================== -->
@endsection