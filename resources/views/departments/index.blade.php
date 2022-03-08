
@extends('layouts.base')

@section('content')
<div class="container"><br />
        <h4>departments</h4>
        <a class="add btn btn-primary btn-sm" href="/department/create">Add New department</a>
        <a class="add btn btn-primary btn-sm" href="/">Back</a><br/><br />
        <div>
            <p style="color:green;">{{ session('mssg') }}</p>
        </div>
        <div class="table-response">
            <table class="table table-bordered table-striped" id="departments_list">
                <thead>
                    <tr>
                        <th width="25%">department_id</th>
                        <th width="25%">department_name</th>
                        <th width="25%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($departments as $department)
                    <tr>
                        <td>{{$department->department_id}}</td>
                        <td>{{$department->department_name}}</td>
                        <td>
                            <a href="/department/{{$department->department_id}}" class="edit btn btn-primary btn-sm">Edit</a>
                            &nbsp;&nbsp;
                            <a href="/department/delete/{{$department->department_id}}" class="delete btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr >
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
</div>

@endsection