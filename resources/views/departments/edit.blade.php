@extends('layouts.base')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">EDIT</div>
                <div class="card-body">
                  <form action="/department/update" method="POST">
                  @csrf 
                    <input type="hidden" name="department_id" value="{{$department->department_id}}">
                    <div class="form-group row">
                      <label for="department_name" class="col-md-4 col-form-label text-md-right">Input department Name:</label>
                      <div class="col-md-6">
                        <input type="text" class="form-control" id="department_name" name="department_name" value="{{$department-> department_name}}">
                      </div>
                    </div>
                    <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Submit</button>                       
                            </div>
                    </div>
                  </form>
                </div>
                     <a class="add btn btn-primary btn-sm" href="/department">Back</a>                       
            </div>
        </div>
    </div>
</div>
@endsection