<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Position;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $data = employee::join('departments','departments.department_id', '=', 'employees.fk_department_id')
        //                 ->join('positions','positions.position_id', '=', 'employees.fk_position_id')
        //                 ->get();

        $data = employee::all();

        return view('employees.index', ['employees' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datadepartment = department::all();
        $dataposition = position::all();
        return view('employees.create', [
            'departments' => $datadepartment,
            'positions' => $dataposition
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new Employee();
       
        $data->employee_lastname = request('employee_lastname');
        $data->employee_firstname = request('employee_firstname');
        $data->employee_middlename = request('employee_middlename');
        $data->employee_extname = request('employee_extname');
        $data->fk_department_id = request('department_id');
        $data->fk_position_id = request('position_id');
  
        $data->save();
        return redirect('/employee')->with('mssg','Successfully Saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Employee::find($id);
        $datadepartment = department::all();
        $dataposition = position::all();

        return view('employees.edit',[
            'employee' => $data,
            'departments' => $datadepartment,
            'positions' => $dataposition
        ]);
    }   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $data = employee::find($request->employee_id);
      
        $data->employee_lastname = $request->employee_lastname;
        $data->employee_firstname = $request->employee_firstname;
        $data->employee_middlename = $request->employee_middlename;
        $data->employee_extname = $request->employee_extname;
        $data->fk_department_id = $request->department_id;
        $data->fk_position_id = $request->position_id;

   
        $data->save();
   
        return redirect('/employee')->with('mssg','Successfully Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = employee::find($id);
        $data->delete();
   
        return redirect('/employee')->with('mssg','Deleted.');
    }
}
