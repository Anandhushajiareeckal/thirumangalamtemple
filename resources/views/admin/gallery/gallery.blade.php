@extends('layouts.admin')
@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
    <div class="row g-0">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="m-0">Home</h6>
                    <div class="form-check form-switch table-toggle-one">
                        {{-- <a href="{{ route('service_add',['id' => 7])}}" class="btn btn-primary">Contents</a> --}}
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModalLive">Add image</button>

                    </div>
                </div>
                <div class="modal fade" id="exampleModalLive" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLiveLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('gallery_save', ['id'=>$id]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-4">
                                        <span class="form-floating">
                                            <input type="file" class="form-control" id="imageInput" name="image" accept="image/*"  required>
                                            <label class="" for="TextInput">Image</label>
                                        </span>
                                    </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                         </form>
                        </div>
                    </div>
                </div>	
                <div class="card-body table-main-one">
                    <div class="table-responsive">
                        <table class="myDataTable table table-hover align-middle mb-0" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i=0; $i < count($image); $i++)
                                @php
                                    $item = $image[$i];
                                @endphp
                                <tr>
                                    <td>{{$i+1}}</td>
                                    <td > <img src="{{$item->image}}" alt="" style="width:100px;height:100px;" ></td>
                                    <td>
                                        <a href="{{ route('gallery_delete',['id' => $item->id, 'cat_id'=>$id])}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
                                    </td>
                                </tr>
                                @endfor
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection