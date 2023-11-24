@extends('layouts.admin')

@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">			
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body card-main-three">
                    <h5 class="m-4">Poojas </h5>
                    <form class="form-floating" action="{{ route('poojas_update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                        <div class="mb-4 col-4">
                            <h5 class="text-center">Morning</h5>
                            <span class="form-floating">
                                <input type="text" class="form-control" id="TextInput" style="text-align:center" value="{{$pooja->morning_open}}"  name="morning_open" required>
                                <label class="" for="TextInput">Open </label>
                            </span>
                        </div>
                        <div class="mb-4 col-4">
                            <h5 class="text-center">Evening</h5>

                            <span class="form-floating">
                                <input type="text" class="form-control " id="TextInput" style="text-align:center" value="{{$pooja->evening_open}}"  name="evening_open"  required>
                                <label class="" for="TextInput">Open </label>
                            </span>
                        </div>
                        </div>
                        <div class="row">
                        <div class="mb-4 col-4">
                            <span class="form-floating">
                                <input type="text" class="form-control" id="TextInput" style="text-align:center" value="{{$pooja->morning_close}}" name="morning_close" required>
                                <label class="" for="TextInput">Close </label>
                            </span>
                        </div>
                        <div class="mb-4 col-4">
                            <span class="form-floating">
                                <input type="text" class="form-control" id="TextInput" style="text-align:center" value="{{$pooja->evening_close}}" name="evening_close" required>
                                <label class="" for="TextInput">Close </label>
                            </span>
                        </div>
                        <div class="mb-4 col-8 text-center">
                            <button type="submit" class="btn btn-primary  "> Update</button>
                        </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
	// document.querySelector('form').addEventListener('submit', function (e) {
	//   const fileInput = document.querySelector('#imageInput');
	//   const maxSize = 300 * 1024; // 300KB in bytes
  
	//   if (fileInput.files.length > 0) {
	// 	const fileSize = fileInput.files[0].size;
  
	// 	if (fileSize > maxSize) {
	// 	  e.preventDefault(); // Prevent form submission
	// 	  alert('Image size exceeds the maximum allowed (300KB). Please choose a smaller image.');
	// 	}
	//   }
	// });
  </script>
@endsection