@extends('layouts.admin')
@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">			
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body card-main-three">
                    <h5 class="m-4">Edit Temple </h5>
                    <form class="form-floating" action="{{ route('temple_edit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="mb-4">
                            <span class="form-floating">
                                <p>Image</p>
                                <img src="{{$temple->image}}" alt="image" style="height: 4em"><br><br>
                                <input type="file" class="form-control" id="emailInput"  placeholder="password" name="image" value="{{$temple->image}}">
                                <small class="">Max file size: 300KB</small>

                            </span>
                        </div>
                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="text" class="form-control" id="TextInput" required placeholder="Name" name="heading" value="{{$temple->heading}}">
                                <label class="" for="TextInput">Heading</label>
                            </span>
                        </div>
                       
                        <span class="">
                            <label class="form-label" for="TextInput">Description</label>
                            <textarea class="form-control" id="TextArea" rows="8" cols="30" required placeholder="Comment" name="description" value="">{{$temple->description}}</textarea>
                            <label class="" for="TextArea">Description</label><br>
                        </span>
                   
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header border-bottom">
                                    </div>
                                    <div class="card-body">
                                        <label class="form-label" for="TextArea">Content</label><br>
                                        <textarea name="content" required id="summernote" >{!!$temple->content!!}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
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