<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enroll;
use App\Models\FormQuestion;
use App\Models\FormHelp;
use App\Models\Occupation;
use App\Models\Schedule;
use App\Models\Payment;
use App\Models\Blog;
use App\Models\Course;
use App\Models\Page;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     */
    public function index()
    {
        $courses    = json_decode(file_get_contents('https://hasanikenglish.com/api/courses'), true);
        $blogs      = json_decode(file_get_contents('https://hasanikenglish.com/api/blogs'), true);
        $teams      = json_decode(file_get_contents('https://hasanikenglish.com/api/team'), true);

        return view('welcome', compact('courses', 'blogs', 'teams'));
    }

    /**
     * courses
     */
    public function courses()
    {
        $courses    = json_decode(file_get_contents('https://hasanikenglish.com/api/courses'), true);

        return view('courses', compact('courses'));
    }

    /**
     * single_courses
     */
    public function single_courses($slug)
    {
        $course    = Course::where('slug',$slug)->first();

        return view('single_course', compact('course'));
    }

    /**
     * blogs
     */
    public function blogs()
    {
        $blogs      = json_decode(file_get_contents('https://hasanikenglish.com/api/blogs'), true);

        return view('blogs', compact('blogs'));
    }

    /**
     * blog
     */
    public function blog($id)
    {
        $single_blog = Blog::where('id',$id)->with('category')
                    ->with('user')
                    ->first();
        return view('single_blog',compact('single_blog'));
    }

    /**
     * enroll
     */
    public function enroll()
    {
        $occupations = Occupation::all();
        $schedules = Schedule::all();
        $payments = Payment::all();
        $courses = Course::all();
        $questions = FormQuestion::first();
        $tips = FormHelp::first();
        return view('enroll',compact('occupations','schedules','payments','questions','courses','tips'));
    }

    /**
     * enroll_store
     */
    public function enroll_store(Request $request)
    {
      $request->validate([
            'name' => 'required',
            'email' => 'required',
        ],
        [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
        ]);

        
        $check_exist = Enroll::where('email',$request->email)
                              ->where('phone',$request->phone)
                              ->where('course_id',$request->course_id)
                              ->first();

        if (isset($check_exist)) {
          Alert::success('Exist','You Already Enrolled This Course.');
          return back();
        }else {
          Enroll::create($request->except('_token'));

          $name = $request->name;
          $email = $request->email;
          $phone = $request->phone;
          Mail::to($email)->send(new Enrollmail($name));

          Mail::to('hasanikenglish@gmail.com')->send(new AdminNotifyMail($name, $phone));

          return back();

          Alert::success('success','DONE');
          return redirect()->route('enroll.success');
        }

    }


    /**
     * getCoursePrice
     */

     public function getCoursePrice(Request $request)
    {
        $course_price = Course::where('id', $request->course_id)->first();

        return response()->json($course_price, 200);
    }

    /**
     * ABOUT
     */

    public function about()
    {
        $about = Page::where('type','about')->first();
        return view('about_us', compact('about'));
    }

    /**
     * OUR MISSION
     */

    public function our_mission()
    {
        $our_mission = Page::where('type','mission')->first();
        return view('our_mission', compact('our_mission'));
    }

    /**
     * END
     */
}
