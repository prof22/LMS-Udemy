<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use Auth;
use Validator;
use App\Http\Requests;

class InstructorLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:instructor');
    }

    public function ShowLoginform()
    {
        return view('auth.instructor-login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
            
    if(Auth::guard('instructor')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
            {
           
                return redirect()->intended(route('instructor.dashboard'));
            
            }
            return redirect()->back()->withInput($request->only('email', 'remember'));
            }
    }

