<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Task;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $companies = Company::all();
        $contacts = Contact::all();
        $tasks = Task::all();

        return view('dashboard', compact('companies', 'contacts', 'tasks'));

    }

    
}
