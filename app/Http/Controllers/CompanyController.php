<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    public function index()
    {

        $companies=Company::latest()->paginate(5);
        return view('companies.index',compact('companies'))->with('i',(request()->input('page',1) -1)*5);

    }


    public function create()
    {
        return view('companies.create');
    }


    public function store(Request $request)
    {
        request()->validate([
            'name'=>'required',
            'description'=>'required',
        ]);
        Company::create($request->all());
        return redirect()->route('companies.index')->with('success','Company was created');
    }


    public function show($id)
    {   
        $company = Company::find($id);
        return view('companies.show',compact('company'));
    }

    public function edit($id)
    {
        $company=Company::find($id);
        return view('companies.edit',compact('company'));
    }

    public function update(Request $request,$id)
    {
        request()->validate([
            'name'=>'required',
            'description'=>'required',
        ]);
        Company::find($id)->update($request->all());
        return redirect()->route('companies.index')->with('success','Company was updated');
    }
    
    public function destroy($id)
    {
        $company=Company::find($id)->delete();
        return redirect()->route('companies.index')->with('success','Company was deleted');
    }
}
