<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Employee;




class EmployeeController extends Controller
{
    public function index()
    {
        return view ('index');
    }
    


    public function login()
    {
        return view('login');
    }
    public function showlogin(Request $request)
    {
        $credentails=$request->only('email','password');
        if(Auth::attempt($credentails))
        {
            $request->session()->regenerate();
            
    
            return redirect()->route('home');
        }
        return back()->withErrors([
            'email'=>'does not match'
        ]);
    }
    public function home()
    {
        return view('home');
    }
    public function register()
    {
        return view('register');
    }
    public function registration(Request $request)
   {
     $request->validate([
     'firstname'=>'required',
     'lastname'=>'required',
     'email'=>'required',
     'company'=>'required',
     'phone'=>'required',
     
    ]);
    $data=$request->all();
    
    Employee::create($data);
    
    return redirect()->route('register')->with('success',' User registered successfully');
  }
  public function edit($id)
  {
    $data=Employee::find($id);
    return view('edit',compact('data'));

  }
  public function update(Request $request,$id)
  {
    $data = Employee::find($id);
    $request->validate([
       'email'=>'required',
    ]);
   $data->firstname=$request->input('firstname');
   $data->lastname=$request->input('lastname');
   $data->phone=$request->input('phone');
   $data->company=$request->input('company');
   $data->email=$request->input('email');
  
    $data->update();
    return redirect()->route('view');
   }
   public function delete($id)
   {
    Employee::find($id)->delete();
    return redirect()->route('view');
   }
   public function view()
   {
    $data=Employee::all();
    return view('view',compact('data'));
   }
   public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
