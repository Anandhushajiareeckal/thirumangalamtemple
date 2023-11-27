@extends('layouts.admin')
@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
    <div class="row g-0">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="m-0">Administration</h6>
                    <div class="form-check form-switch table-toggle-one">
                        <a href="{{route('administration_content')}}" class="btn btn-primary">Contents</a>
                    </div>
                </div>
                <div class="card-body table-main-one">
                    <div class="table-responsive">
                        <table class="myDataTable table table-hover align-middle mb-0" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Heading</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i=0; $i < count($administration); $i++)
                                @php
                                    $item = $administration[$i];
                                @endphp
                                <tr>
                                    <form action="{{ route('administration_update',['id'=>$item->id])}} " method="POST">
                                    @csrf
                                    @method('PUT')
                                    <td>{{$i+1}}</td>
                                    <td><input type="text" name="heading" value="{{$item->heading}}" style="width:100%; height:30px; background:rgb(230, 228, 228);" required></td>
                                    <td>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </td>
                                    </form>
                                </tr>
                                @endfor
                                <tr>
                                    <form action="{{ route('administration_store')}} " method="POST">
                                        @csrf
                                        <td></td>
                                        <td><input type="text" name="heading" style="width:100%; height:30px; background:rgb(230, 228, 228);" required></td>
                                        <td><button class="btn btn-primary " type="submit" > Add</button></td>
                                        <td></td>
                                    </form>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection