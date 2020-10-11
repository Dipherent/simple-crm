<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Company;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        $companies = Company::all();

        return view('contact.index', compact('contacts', 'companies'));
    }

    public function create(){

        $contact = new Contact();
        $companies = Company::all();
        return view('contact.create', compact('contact', 'companies'));
    }

    public function store(){

          $contact = Contact::create($this->validatedData());  
           return redirect('/contacts/'. $contact->id);
    }

    public function show(Contact $contact){
        // This is another way to do it, But class binding solves the problems. But for the binding to work, $contact has to be used in 3 places: function, compact, and web route
        // $contact = Contact::findOrFail($id);
        
        return view('contact.show', compact('contact'));
    }

    public function edit(Contact $contact){
        $companies = Company::all();
        return view('contact.edit', compact('contact', 'companies'));
    }

    public function update(Contact $contact){

         $contact->update($this->validatedData());  
        return redirect('/contacts');
    }

    public function destroy(Contact $contact){

            $contact->delete();  
            return redirect('/contacts');
    }

    protected function validatedData(){
        return request()->validate([
            'name'=>'required',
            'email' => 'required|email',
            'phone' => 'required',
            'notes' => '',
            'company_id' => 'required'
            
        ]);
    }
}
