<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;
use App\Models\Companies;
class CompaniesController extends Controller
{
    //view html
    public function index(){
        // select * from companies
        //$companies = Companies::all();
        $companies = Companies::orderBy('id', 'desc')->paginate(8);
        return view('companies.inicio', compact('companies'));
    }
    //formulario view html
    public function create()
    {
        return view('companies.create');

    }
    //true, false
    public function store(Request $request)
    {
        // INSERT INTO compañias () VALUES()
        $companies = Companies::create($request->all());
        //whith = session ()
        return redirect('companies')->with('status','Se a creado correctamente.');
    }
        //vista html
    public function show($id){
        //SELECT * FORM Companies WHERE id = ?

        $companies = Companies::find($id);
        return view('companies.show',compact('companies'));

    }

    public function destroy($id)
    {
        //DELETE FROM companies WHERE id = ?
        $companies = Companies::find($id)->delete();
        return redirect('companies')->with('status', 'Se a borrado correctamente');
    }

    public function edit($id){
        //SELECT FROM companies WHERE id = ?
        $companies = Companies::find($id);
    return view('companies.edit', compact('companies'));
    }

    //id -> quien va a hacer actualizado
    //data = data actualizada (combre,description,nit,phone)
    public function update(Request $request, $id){

    $companies = Companies::find($id)->update($request->all());
    return redirect('companies')->with('status', 'Se a actualizado correctamente.');
    }

    //view html
    public function view(){
        // select * from empleados
        //$companies = Employees::all();
        $employees = Employees::orderBy('id', 'desc')->paginate(8);
        return view('employes.inicio', compact('employees'));
    }




}
