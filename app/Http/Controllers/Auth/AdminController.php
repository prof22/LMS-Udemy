<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Offlineapplys;
use App\Alluser;
use App\Instructor;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {

        $offline = Offlineapplys::all();
        $users = Alluser::all();
        return view('admin.Dashboard',  compact('offline', 'users'));
    }
    public function addinstructor()
    {
        $instructor = Instructor::all();
        return view('admin.addInstructor',compact('instructor'));
    }
    public function submitinstructor(Request $request)
    {

        $this->validate($request, [

        ]);
        $instructor = new Instructor();
        $instructor->first_name = $request->input('first_name');
        $instructor->last_name = $request->input('last_name');
        $instructor->position = $request->input('position');
        $instructor->address = $request->input('address');
        $instructor->phone = $request->input('phone');
        $instructor->course = $request->input('course');
        $instructor->email = $request->input('email');
        $password = $request->input('password');
        $instructor->password = bcrypt($password);
        $res = $instructor->save();
        session()->flash('message', 'Added Successfully!');
        if ($res) {
            return back()->with('success', 'Added Successfully!');
        } else {
            return back()->with('error', 'Problem Adding Category');
        }
    }
}
