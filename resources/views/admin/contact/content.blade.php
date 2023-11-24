@extends('layouts.admin')
@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">			
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body card-main-three">
                    <h5 class="m-4">Edit contact </h5>
                    <form class="form-floating" action="{{ route('contact_update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="mb-4">
                            <h4>Contact Person</h4>
                            <span class="form-floating">
                                <p>Image</p>
                                <img src="{{$contact->image}}" alt="image" style="height: 4em"><br><br>
                                <input type="file" class="form-control" id="emailInput"  placeholder="password" name="image" value="{{$contact->image}}">
                                <small class="">Max file size: 300KB</small>

                            </span>
                        </div>
                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="text" class="form-control" id="TextInput" required placeholder="Name" name="name" value="{{$contact->name}}">
                                <label class="" for="TextInput">Name</label>
                            </span>
                        </div>
                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="text" class="form-control" id="TextInput" required placeholder="Name" name="post" value="{{$contact->post}}">
                                <label class="" for="TextInput">Designation</label>
                            </span>
                        </div>
                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="number" class="form-control" id="TextInput" required placeholder="Name" name="number" value="{{$contact->number}}">
                                <label class="" for="TextInput">Number</label>
                            </span>
                        </div>
                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="email" class="form-control" id="TextInput" required placeholder="Name" name="email" value="{{$contact->email}}">
                                <label class="" for="TextInput">Email</label>
                            </span>
                        </div>
                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="text" class="form-control" id="TextInput" required placeholder="Name" name="location" value="{{$contact->location          }}">
                                <label class="" for="TextInput">Location</label>
                            </span>
                        </div>
                       
                        <span class="">
                            <textarea class="form-control" id="TextArea" rows="8" cols="30" required placeholder="Comment" name="content" value="">{{$contact->content}}</textarea>
                            <label class="" for="TextArea">Timng</label><br>
                        </span>
                        
                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="text" class="form-control" id="TextInput" required placeholder="Name" name="map" value="{{$contact->map}}">
                                <label class="" for="TextInput">Map</label>
                            </span>
                        </div>
                        
                        {{-- <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header border-bottom">
                                    </div>
                                    <div class="card-body">
                                        <label class="form-label" for="TextArea">Content</label><br>
                                        <textarea name="content" required id="summernote" >{!!$contact->content!!}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">Add</button>
                            <a href="/admin/dashboard" class="btn btn-outline-secondary">Cancel</a>

                        </div>
                      
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection