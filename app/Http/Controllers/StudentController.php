<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    public function student(){
        return view ('sturegistration');
    }

    public function store(Request $request){
    
        $validated = $request->validate([
            "name" => ['required', 'min:3'],
            "address" => ['required', 'min:4'],
            "contact" => ['required', 'min:3'],
            "email" => ['required','email', Rule::unique('students', 'email')] ,
            "guardian" => ['required', 'min:4'], 
        ]);
       
        Student::create($validated);
         return back()->with('message', 'Student Added succesfully');
    }
}
