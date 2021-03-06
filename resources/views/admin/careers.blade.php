@extends('admin.layout.master')
@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Tables /</span> Careers
</h4>

<!-- Basic Bootstrap Table -->
<div class="card">
  <h5 class="card-header">Table Career</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Job Name</th>
          <th>Summary</th>
          <th>Salary</th>
          <th>Image</th>
          <th>Company name</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
      @foreach ($allCareers as $career )
      <tr>
        <td>{{ $career->name}}</td>
        <td>{{ $career->description }}</td>
        <td>{{ $career->salary }}</td>
        <td>
          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
           
           
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
              <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
            </li>
          </ul>
        </td>
        <td></td>
        <td><span class="badge bg-label-primary me-1">Active</span></td>
        <td>
          <div class="dropdown">
            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
              <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
            </div>
          </div>
        </td>
      </tr>
      @endforeach
        
        
       
      </tbody>
    </table>
  </div>
</div>
@endsection