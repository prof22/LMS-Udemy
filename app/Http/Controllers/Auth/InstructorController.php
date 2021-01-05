<?php

namespace App\Http\Controllers\Auth;
Use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Offlinecourses;
use App\Instructor;
use Validator;
use App\Contacts;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;
use App\Offlineapplys;
use App\Course;
use App\Alluser;
use App\Lesson;

class InstructorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:instructor');
    }

    public function index()
    {
        $offline = Offlineapplys::all();
        $users = Alluser::all();
        return view('instructor.instructor', compact('offline', 'users'));
    }
    public function category()
    {
        $cat = Category::all();
        return view('instructor.category',compact('cat'));
    }
    public function addcategory(Request $request)
    {
        $this->validate($request, [
            'category' => 'required'
        ]);
        $cat = new Category();
        $cat->title = $request->input('category');
        $cat->slug = $request->input('category');
        $res = $cat->save();
        session()->flash('message', 'Added Successfully!');
        if ($res) {
            return back()->with('success', 'Added Successfully!');
        } else {
            return back()->with('error', 'Problem Adding Category');
        }

    }


    public function managecategory($id, Request $request)
    {
        $cat = Category::findOrFail($id);
        $this->validate($request, [
            'category' => 'required'
        ]);
        $cat->title = $request->get('category');
        $cat->slug = $request->get('category');
        $cat->save();
        return back()->with('success', 'Updated Successfully!');
    }
    public function deletecategory($id)
    {
        $cat = Category::findorFail($id);
        $cat->delete();
        return back()->with('error', 'Deleted Successfully!');
    }

    public function offlinecourse()
    {
        $course = Offlinecourses::all()->where('instructor_id', Auth::guard('instructor')->user()->id);
        $cat = Category::all();
        return view('instructor.offlinecourse',compact('course','cat'));
    }



    public function addofflinecourse(Request $request)
    {
        $this->validate($request, [
            'short_desc' => 'required'
        ]);
        $Course= new Offlinecourses();
           $originalImage = $request->file('thumbnail');
            $imageName = time() . $originalImage->getClientOriginalName();
            $originalImage = Image::make($originalImage)->resize(50, 50);
            $originalPath = public_path() . '/images/';
            //dd($originalPath);
            $originalImage->save($originalPath . $imageName);
        $Course->title = $request->title;
        $Course->short_description= $request->short_desc;
        $Course->description = $request->description;
        $Course->outcomes = $request->outcome;
        $Course->section= $request->section;
        $Course->requirements = $request->requirements;
        $Course->language = $request->language;
        $Course->lesson = $request->lesson;
        $Course->amount = $request->amount;
        $Course->category_id= $request->category_id;
        $Course->instructor_id=$request->instructors_id;
        $Course->thumbnail = $imageName;

        $res = $Course->save();
        if ($res) {
            return back()->with('success', 'Added Successfully!');
        } else {
            return back()->with('error', 'Problem Adding Course');
        }
    }

    public function updateofflinecourse($id, Request $request)
    {
        $Course = Offlinecourses::findOrFail($id);
        $this->validate($request, [
            'short_desc' => 'required'
        ]);
        if($request->file('thumbnail')){
        $originalImage = $request->file('thumbnail');
        $imageName = time() . $originalImage->getClientOriginalName();
        $imagetype = time() . '.' . $image->getClientOriginalExtension();
        $originalImage = Image::make($originalImage)->resize(50, 50);
        $originalPath = public_path() . '/images/';
        $originalImage->save($originalPath . $imageName);
        }else{
            $imageName = null;
        }
        $Course->title = $request->title;
        $Course->short_description= $request->short_desc;
        $Course->description = $request->description;
        $Course->outcomes = $request->outcome;
        $Course->section= $request->section;
        $Course->requirements = $request->requirements;
        $Course->language = $request->language;
        $Course->amount = $request->amount;
        $Course->lesson = $request->lesson;
        $Course->category_id= $request->category_id;
        $Course->instructor_id=$request->instructors_id;
        $Course->thumbnail = $imageName;

        $res = $Course->save();
        if ($res) {
            return back()->with('success', 'updated Successfully!');
        } else {
            return back()->with('error', 'Problem Adding Course');
        }
    }
    public function deleteofflinecourse($id)
    {
        $cat = Offlinecourses::findorFail($id);
        $cat->delete();
        return back()->with('error', 'Deleted Successfully!');
    }

    public function offlinelesson()
    {
        $courses = Offlinecourses::all();
        $lessons = Lesson::all()->where('instructor_id', Auth::guard('instructor')->user()->id);
        return view('instructor.offlinelesson', compact('lessons','courses'));
    }


    public function addlesson(Request $request)
    {
        $this->validate($request, [
            'lesson' => 'required'
        ]);
        $lesson= new Lesson();
        $lesson->course_id = $request->course_id;
        $lesson->instructor_id = $request->instructors_id;
        $lesson->title= $request->lesson;
          $res = $lesson->save();
        if ($res) {
            return back()->with('success', 'Added Successfully!');
        } else {
            return back()->with('error', 'Problem Adding Course');
        }
    }








    public function onlinecourse()
    {
        $course = Course::all();
        $cat = Category::all();
        return view('instructor.onlinecourse', compact('course','cat'));
    }
    public function addonlinecourse(Request $request)
    {
         $this->validate($request, [
            'title' => 'required',
            'short_desc' => 'required',
            'description' => 'required',
            'outcome' => 'required',
            'section' => 'required',
            'requirements' => 'required',
            'language' => 'required',
            'amount' => 'required',
            'level' => 'required',
            'visibility' => 'required',
            'video_url' => 'required'
        ]);
        $Course= new Course();
           $originalImage = $request->file('thumbnail');
            $imageName = time() . $originalImage->getClientOriginalName();
            $originalImage = Image::make($originalImage)->resize(50, 50);
            $originalPath = public_path() . '/images/';
            //dd($originalPath);
            $originalImage->save($originalPath . $imageName);
        $Course->title = $request->title;
        $Course->short_description= $request->short_desc;
        $Course->description = $request->description;
        $Course->outcomes = $request->outcome;
        $Course->section= $request->section;
        $Course->requirements = $request->requirements;
        $Course->language = $request->language;
        $Course->price = $request->amount;
        $Course->level = $request->level;
        $Course->video_url = $request->video_url;
        $Course->visibility = $request->visibility;
        $Course->category_id= $request->category_id;
        $Course->thumbnail = $imageName;
        $res = $Course->save();
        if ($res) {
            return back()->with('success', 'Added Successfully!');
        } else {
            return back()->with('error', 'Problem Adding Course');
        }
    }
    // public function manageonlinecourse($id)
    // {
    //     return true;
    // }
    public function onlinelesson()
    {
        return view('instructor.onlinelesson');
    }
    // public function manageonlinelesson($id)
    // {
    //     return true;
    // }

    public function instructor_settings()
    {
        $instructor = Instructor::first();
        return view('instructor.settings', compact('instructor'));
    }
    public function contact()
    {
        $contact = Contacts::all();
        return view('instructor.contact', compact('contact'));
    }
    public function update_settings($id, Request $request)
    {
        $instructor = Instructor::findorfail($id);
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required'
        ]);
        $instructor->first_name = $request->get('first_name');
        $instructor->last_name = $request->get('last_name');
        $instructor->save();
        return back()->with('success', 'Updated Successfully!');

    }
    public function changepassword(Request $request)
    {

        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:5',
            'password_confirmation' => 'required|same:new_password',
        ]);

        $instructor = Auth::guard('instructor')->user();

        $oldPassword = $request->old_password;
        $password = $request->new_password;
        $passwordConf = $request->password_confirmation;

        if (!Hash::check($oldPassword, $instructor->password) || $password != $passwordConf) {

            return redirect()->back()->with("error", "Password Do not match !!");
        }elseif (Hash::check($oldPassword, $instructor->password) && $password == $passwordConf)
        {
            $instructor->password = bcrypt($password);
            $instructor->save();

            return redirect()->back()->with("success", "Password changed successfully");
        }

        return redirect()->back()->with("success", "Password changed successfully");
    }


}
