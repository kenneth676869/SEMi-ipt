<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{

    public function index(){

        return view('pages.index');
    }
    public function investorList(){

        return view('pages.employee_list');
    }


    public function create()
    {
        //
        return view('pages.create_employee');
    }


    public function store(Request $request)
    {
        //
        $employees = new Employee();

        $employees->lname = $request->lname;
        $employees->fname = $request->fname;
        $employees->position = $request->position;
        $employees->salary = $request->salary;

        $employees->save();

        return redirect('create-employee')->with(['success' => 'New Employees created successfully']);
    }


    public function show()
    {
        $employees = Employee::all();

        return view('pages.employee_list',['employees'=>$employees]);

    }
}
