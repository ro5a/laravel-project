@extends('admin.layout.master')
@section('content')

  <!-- Bootstrap Validation -->
  <div class="col-md">
    <div class="card">
      <h5 class="card-header">Careers create</h5>
      <div class="card-body">
        @if ($errors->any())
        @foreach ($errors->all() as $err )
       <p class="alert alert-danger">{{ $err }}</p>
          
        @endforeach
          
        @endif
        <form class="needs-validation" action="{{ route('save_career') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label class="form-label" for="bs-validation-name">Name</label>
            <input type="text" class="form-control"value="{{ old('name') }}" name="name" id="bs-validation-name" placeholder="job name" required />
            <div class="valid-feedback"> Looks good! </div>
            <div class="invalid-feedback"> Please enter job name. </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="bs-validation-salary">Salary</label>
            <input type="number" id="bs-validation-email"value="{{ old('salary') }}" name="salary" class="form-control" placeholder="$" aria-label="$" required />
            <div class="valid-feedback"> Looks good! </div>
            <div class="invalid-feedback"> Please enter a salary </div>
          </div>
           
         
          <div class="mb-3">
            <label class="form-label" for="bs-validation-upload-file">Image</label>
            <input type="file" class="form-control" name="image" id="bs-validation-upload-file" required />
          </div>
         
          <div class="mb-3">
            <label class="form-label" for="bs-validation-bio">bio</label>
            <textarea class="form-control" id="bs-validation-bio" name="description" rows="3" required></textarea>
          </div>
        
          </div>
          <div class="mb-3">
            <label class="switch switch-primary">
              <input type="checkbox" class="switch-input" required />
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">Is_active</span>
            </label>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /Bootstrap Validation -->
  @endsection