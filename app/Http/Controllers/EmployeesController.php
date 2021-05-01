<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Illuminate\Http\Request;
use App\Models\Employees;
class EmployeesController extends Controller
{
    //view html
    public function index(){
        // select * from employees
        //$employees = employees::all();
        $employees = Employees::orderBy('id', 'desc')->paginate(8);
        return view('employees.inicio', compact('employees'));
    }
    //formulario view html
    public function create()
    {
        return view('employees.create');
    }
    //true, false
    public function store(Request $request)
    {
        // INSERT INTO empleados () VALUES()
        $employees = Employees::create($request->all());

        return redirect('employees');
    }
    //vista html
    public function show($id){
        //SELECT * FORM Employees WHERE id = ?

        $employees = Employees::find($id);
        return view('employees.show',compact('employees'));

    }

    public function destroy($id)
    {
        //DELETE FROM companies WHERE id = ?
        $employees = Employees::find($id)->delete();
        return redirect('employees');
    }

    public function edit($id){
        //SELECT FROM Employees WHERE id = ?
        $employees = Employees::find($id);
        return view('employees.edit', compact('employees'));
    }

    //id -> quien va a hacer actualizado
    //data = data actualizada (combre,description,nit,phone)
    public function update(Request $request, $id){

        $employees = Employees::find($id)->update($request->all());
        return redirect('employees');
    }

    //view html
    public function view()
    {
        // select * from companies
        //$companies = Companies::all();
        $companies = Companies::orderBy('id', 'desc')->paginate(8);
        return view('companies.inicio', compact('companies'));
    }


}
