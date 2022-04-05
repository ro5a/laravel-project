@extends('admin.layout.master')
@section('content')

  <!-- Bootstrap Validation -->
  <div class="col-md">
    <div class="card">
      <h5 class="card-header">Users create</h5>
      <div class="card-body">
        <form class="needs-validation" novalidate>
          <div class="mb-3">
            <label class="form-label" for="bs-validation-name">Name</label>
            <input type="text" class="form-control" id="bs-validation-name" placeholder="user name" required />
            <div class="valid-feedback"> Looks good! </div>
            <div class="invalid-feedback"> Please enter job name. </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="bs-validation-salary">email</label>
            <input type="email" id="bs-validation-email" class="form-control" placeholder="example@gmail.com" aria-label="$" required />
            <div class="valid-feedback"> Looks good! </div>
            <div class="invalid-feedback"> Please enter a salary </div>
          </div>
           
         
          <div class="mb-3">
            <label class="form-label" for="bs-validation-upload-file">Image</label>
            <input type="file" class="form-control" id="bs-validation-upload-file" required />
          </div>
         
          <div class="mb-3">
            <label class="form-label" for="bs-validation-bio">bio</label>
            <textarea class="form-control" id="bs-validation-bio" name="bs-validation-bio" rows="3" required></textarea>
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