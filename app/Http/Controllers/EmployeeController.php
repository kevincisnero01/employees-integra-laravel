<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->get('search');

        $employees = Employee::orderBy('id','DESC')
        ->Lastname($search)
        ->Email($search)
        ->paginate(5);
        
        return view('employees.index', ['employees' => $employees, 'search' => $search]);
    }


    public function create()
    {
        return view('employees.create',[
            'employee' => new Employee
        ]);
    }


    public function store(Request $request)
    {
        Employee::create($request->all());

        return redirect()->route('employee.index')->with('status','Empleado creado con exito');
    }


        public function edit(Employee $employee)
    {
        return view('employees.edit', ['employee' => $employee]);
    }


    public function update(Employee $employee, Request $request)
    {
        $employee->update($request->all());
        return redirect()->route('employee.index')->with('status','Empleado Actualizado con exito');
    }


    public function destroy(Employee $employee)
    {

        $employee->delete($employee);
        return redirect()->route('employee.index')->with('status','Empleado eliminado con exito');
    }

    /*
    public function search($word)
    {
        $employee = DB::table('employee')->get();

        return view('employees.index', ['employee' => $employee]);
    }
    */
}

