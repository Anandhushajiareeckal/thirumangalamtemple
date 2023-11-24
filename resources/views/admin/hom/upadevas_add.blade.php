@extends('layouts.admin')

@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">			
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body card-main-three">
                    <h5 class="m-4">Add home banner </h5>
                    <form class="form-floating" action="{{ route('upadevas_store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="text" class="form-control" id="TextInput" placeholder="Name" name="heading" required>
                                <label class="" for="TextInput">Name</label>
                            </span>
                        </div>
                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="text" class="form-control" id="TextInput" placeholder="Name" name="description" required>
                                <label class="" for="TextInput">Description</label>
                            </span>
                        </div>
                        <div class="mb-4">
                            <span class="form-floating">
                                 <input type="file" class="form-control" id="imageInput" name="image" accept="image/*"  required>
                                 <small class="text-muted">Max file size: 300KB</small>
                            </span>
                        </div>
                        <div class="row">      
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header border-bottom">
                                    </div>
                                    <div class="card-body">
                                        <textarea name="content" id="summernote" ></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">Add</button>
                            <a href="{{ route('banner_list') }}" class="btn btn-outline-secondary">Cancel</a>

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