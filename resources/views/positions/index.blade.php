
@extends('layouts.base')

@section('content')
<div class="container"><br />
        <h4>Positions</h4>
        <a class="add btn btn-primary btn-sm" href="/position/create">Add New Position</a>
        <a class="add btn btn-primary btn-sm" href="/">Back</a><br/><br />
        <div>
            <p style="color:green;">{{ session('mssg') }}</p>
        </div>
        <div class="table-response">
            <table class="table table-bordered table-striped" id="positions_list">
                <thead>
                    <tr>
                        <th width="25%">id</th>
                        <th width="25%">Position_name</th>
                        <th width="25%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($positions as $position)
                    <tr>
                        <td>{{$position->id}}</td>
                        <td>{{$position->position_name}}</td>
                        <td>
                            <a href="/position/{{$position->id}}" class="edit btn btn-primary btn-sm">Edit</a>
                            &nbsp;&nbsp;
                            <a href="/position/delete/{{$position->id}}" class="delete btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr >
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
</div>

@endsection