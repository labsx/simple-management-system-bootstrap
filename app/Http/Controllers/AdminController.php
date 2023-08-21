<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;


class AdminController extends Controller
{
    public function index(){
        return view ('index');
    }

    public function process(Request $request){

        $validated = $request->validate([
        
            "email" =>['required','email'] ,
            "password" => ['required'],
        ]);

        if(auth()->attempt($validated)){
        $request->session()->regenerate();
        return redirect('/dashboard') ->with('message', 'Welcome Back!');
        }else{
            return view ('index') ->with('message', 'username and password not match!');
        }
        
        // $attributes = request()->validate([
        //     'email' => 'required|email',
        //     'password' => 'required'
        // ]);
       

        // if (! auth()->attempt($attributes)) {
        //     throw ValidationException::withMessages([
        //         'email' => 'Your provided credentials could not be verified.'
        //     ]);
        // }

        // session()->regenerate();

        // return redirect('dashboard')->with('success', 'Welcome Back!');
    }

    public function store(Request $request){
       
        $validated = $request->validate([
            "first_name" => ['required', 'min:3'],
            "last_name" => ['required', 'min:3'],
            "middle_name" => ['required', 'min:3'],
            "email" => ['required','email', Rule::unique('users', 'email')] ,
            "password" => ['required', 'min:4', 'max: 50'], 
        ]);
       
        $valdiate['password']=bcrypt($validated['password']);
        auth()->login(User::create($validated));  
         return back()->with('message', 'Registration Success');
    }

    public function destroy(){
        auth()->logout();

        return redirect('/');
        
    }

    public function display(){
        $data = array("students" => DB::table('students')->orderBy('created_at', 'desc')->simplePaginate(10));
        return view ('dashboard', $data);
    }
}
