<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Employee;

class EmployeesController extends Controller
{
    public function index($id = null)
    {
        if($id == null){
            return Employee::orderBy('id', 'asc')->get();
        } else {
            return $this->show($id);
        }
    }

    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->contact_number = $request->input('contact_number');
        $employee->position = $request->input('position');
        $employee->save();
        return 'Employee record successfully created with id: '. $employee->_id;
    }

    public function show($id)
    {
        return Employee::find($id);
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->contact_number = $request->input('contact_number');
        $employee->position = $request->input('position');
        $employee->save();
        return "Success updating user #".$employee->_id;
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return "Employee record successfully delete #".$id;
    }
}
