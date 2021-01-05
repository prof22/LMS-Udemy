<?php

namespace App\Http\Controllers;

use App\Category;
use App\Course;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;
use App\Offlinecourses;
use App\Offlineapplys;
use App\Contacts;
use App\Lesson;


class HomeController extends Controller
{

    public function index()
    {
        $offlinecourse = Offlinecourses::all();
        $courses = Course::orderBy('created_at', 'desc')->take(10)->get();
        return view('home', compact('courses','offlinecourse'));
    }

    public function contact()
    {
      return view('contact');
    }

    public function sendcontact(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
        $contact = new Contacts();
        $contact->first_name = $request->input('first_name');
        $contact->last_name = $request->input('last_name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $res = $contact->save();
        if ($res) {
            return back()->with('success', 'Application Submitted!');
        } else {
            return back()->with('error', 'Problem Submitting Your Application');
        }
    }

    public function about()
    {
        $offlinecourse = Offlinecourses::all();
        $courses = Course::orderBy('created_at', 'desc')->take(10)->get();
      return view('about', compact('courses','offlinecourse'));
    }


    // courses by category
    public function courses_by_category(Category $category)
    {
        $offlinecourse = Offlinecourses::all();
        return view('courses_by_category')
            ->with('category', $category)
            ->with('offlinecourse',$offlinecourse)
            ->with('courses', $category->courses()->paginate(6));
    }

    // course details
    public function course_detail(Course $course)
    {
        return view('course_details', compact('course'));
    }

    //Offlinecourses
    public function offlinecourse_detail(Offlinecourses $offlinecourses)
    {
        $lessons = Lesson::all();
        return view('offlinecourse_details', compact('offlinecourses', 'lessons'));
    }

    public function Apply_offlinecourse_detail(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'fullname' => 'required',
            'address' => 'required',
            'state' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);
        $offlineapply = new Offlineapplys();
        $offlineapply->course_title = $request->input('title');
        $offlineapply->fullname = $request->input('fullname');
        $offlineapply->address = $request->input('address');
        $offlineapply->state = $request->input('state');
        $offlineapply->email = $request->input('email');
        $offlineapply->phone = $request->input('phone');
        $offlineapply->message = $request->input('message');
        $res = $offlineapply->save();
        if ($res) {
            return back()->with('success', 'Application Submitted!');
        } else {
            return back()->with('error', 'Problem Submitting Your Application');
        }
    }
}
