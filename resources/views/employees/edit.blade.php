@extends('layouts.base')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Employee</div>
                <div class="card-body">
                <h5 class="card-title">Employee</h5>
                  <form action="/employee/update" method="POST">
                  @csrf 
                  <div class="form-group row">
                      <div class="col-md-3">
                      <input type="hidden" name="employee_id" value="{{$employee->employee_id}}">
                        <label for="employee_lastname" class="col-form-label">Last Name:</label>
                        <input type="text" class="form-control" id="employee_lastname" name="employee_lastname" value="{{$employee->employee_lastname}}">
                      </div>
                      <div class="col-md-3">
                         <label for="employee_firstname" class="col-form-label">First Name:</label>
                        <input type="text" class="form-control" id="employee_firstname" name="employee_firstname" value="{{$employee->employee_firstname}}">
                      </div>
                      <div class="col-md-3">
                         <label for="employee_middlename" class="col-form-label">Middle Name:</label>
                        <input type="text" class="form-control" id="employee_middlename" name="employee_middlename" value="{{$employee->employee_middlename}}">
                      </div>
                      <div class="col-md-3">
                         <label for="employee_extname" class="col-form-label">Extension Name:</label>
                        <input type="text" class="form-control" id="employee_extname" name="employee_extname" value="{{$employee->employee_extname}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-6">
                        <label for="employee_name" class="col-form-label">Department:</label>
                        <select class="custom-select" id="department_id" name="department_id" >
                            <option value="0" disabled="true" >Select Department</option>
                            @foreach($departments as $department)
                                @if($department->department_id == $employee->fk_department_id)         
                                    <option  value="{{$department->department_id}}" selected="true">{{$department->department_name}}</option>
                                @else
                                    <option  value="{{$department->department_id}}">{{$department->department_name}}</option>
                                @endif
                            @endforeach
                        </select>
                      </div>
                      <div class="col-md-6">
                         <label for="employee_name" class="col-form-label">Position:</label>
                         <select class="custom-select" id="position_id" name="position_id">
                            <option value="0" disabled="true">Select Position</option>
                            @foreach($positions as $position)
                                @if($position->position_id == $employee->fk_position_id)         
                                    <option  value="{{$position->position_id}}" selected="true">{{$position->position_name}}</option>
                                @else
                                    <option value="{{$position->position_id}}">{{$position->position_name}}</option>
                                @endif
                            @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Submit</button>                       
                            </div>
                    </div>
                  </form>
                </div>
                     <a class="add btn btn-primary btn-sm" href="/employee">Back</a>                       
            </div>
        </div>
    </div>
</div>
@endsection