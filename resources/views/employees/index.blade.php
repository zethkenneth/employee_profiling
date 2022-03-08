
@extends('layouts.base')

@section('content')
<div class="container"><br />
        <h4>Employees</h4>
        <a class="add btn btn-primary btn-sm" href="/employee/create">Add New employee</a>
        <a class="add btn btn-primary btn-sm" href="/">Back</a><br/><br />
        <div>
            <p style="color:green;">{{ session('mssg') }}</p>
        </div>
        <div class="table-response">
            <table class="table table-bordered table-striped" id="employees_list">
                <thead>
                    <tr>
                        <th width="25%">employee_id</th>
                        <th width="25%">lastname</th>
                        <th width="25%">firstname</th>
                        <th width="25%">middlename</th>
                        <th width="25%">extname</th>
                        <th width="25%">department</th>
                        <th width="25%">position</th>
                        <th width="25%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $employee)
                    <tr>
                        <td>{{$employee->employee_id}}</td>
                        <td>{{$employee->employee_lastname}}</td>
                        <td>{{$employee->employee_firstname}}</td>
                        <td>{{$employee->employee_middlename}}</td>
                        <td>{{$employee->employee_extname}}</td>
                        <td>{{$employee->departments->department_name}}</td>
                        <td>{{$employee->positions->position_name}}</td>
                        <td>
                            <a href="/employee/{{$employee->employee_id}}" class="edit btn btn-primary btn-sm">Edit</a>
                            &nbsp;&nbsp;
                            <a href="/employee/delete/{{$employee->employee_id}}" class="delete btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr >
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
</div>
@endsection