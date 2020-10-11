<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Models\Contact;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        $companies = Company::all();
        return view('company.index', compact('companies'));
    }

    public function create(){

        $company = new Company();
        return view('company.create', compact('company'));
    }

    public function store(){

          $company = Company::create($this->validatedData());  
           return redirect('/companies/'. $company->id);
    }

    public function show(Company $company){
     
        $contacts = Contact::all();
        return view('company.show', compact('company', 'contacts'));
    }

    public function edit(Company $company){
 
        return view('company.edit', compact('company'));
    }

    public function update(Company $company){

         $company->update($this->validatedData());  
        return redirect('/companies');
    }

    public function destroy(Company $company){

            $company->delete();  
            return redirect('/companies');
    }

    protected function validatedData(){
        return request()->validate([
            'name'=>'required',
            'address' => 'required',
            'notes' => '',
            
        ]);
    }
}
