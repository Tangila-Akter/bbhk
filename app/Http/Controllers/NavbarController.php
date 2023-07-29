<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\Contact;
use App\Models\Calender;
use App\Models\Job;
use App\Models\Routine;
use App\Models\Syllabus;
use App\Models\Exam;
use App\Models\Governing;
use App\Models\School;
use App\Models\Staffs_Doc;
use App\Models\Result;
use App\Models\page;
use App\Models\Carousel;
use App\Models\Footer;
use Illuminate\Support\Facades\DB;

class NavbarController extends Controller
{

    public function home()
    {
       
        $data = page::orderBy('created_at', 'desc')->limit(1)->get();
        $data1 = Carousel::all();
        $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();
        return view('user.home', compact("data", "data1", "data2"));
    }
    public function about()
    {
       
        $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();
        return view('user.about', compact("data2"));
    }
    public function notice1()
    {
        // $data = notice::orderBy('created_at', 'desc')->limit(1)->get();
        $data = DB::table('notices')
            ->orderBy('created_at', 'desc')->get();
        $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();
        return view('user.notice1', compact("data", "data2"));
    }
    public function calender1()
    {
        $data = calender::all();
        $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();
        return view('user.calender1', compact("data", "data2"));
    }
    public function gallery()
    {
        $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();
        return view('user.gallery', compact("data2"));
    }
    public function results()
    {
        $data = result::all();
        $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();
        return view('user.results', compact("data", "data2"));
    }
    public function payment()
    {
        $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();
        return view('user.payment', compact("data2"));
    }
    public function contact()
    {
        $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();
        return view('user.contact', compact("data2"));
    }
    public function admission()
    {
        $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();
        return view('user.admission', compact("data2"));
    }
    public function rules()
    {
        $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();
        return view('user.rules', compact("data2"));
    }
    public function routine_doc()
    {
        $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();
        $data = routine::all();
        return view('user.routine', compact("data", "data2"));
    }
    public function syllabus_doc()
    {
        $data = syllabus::all();
        $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();
        return view('user.syllabus', compact("data", "data2"));
    }
    public function exam_doc()
    {
        $data = exam::all();
        $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();
        return view('user.exam_doc', compact("data", "data2"));
    }
    public function calender()
    {
        $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();
        return view('user.calender', compact("data2"));
    }
    public function governing_doc()
    {
        $data = governing::all();
        $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();
        return view('user.governing', compact("data", "data2"));
    }
    public function school_doc()
    {
        $data = school::all();
        $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();
        return view('user.school_doc', compact("data", "data2"));
    }
    public function staff_doc()
    {
        $data = staffs_doc::all();
        $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();
        return view('user.staff_doc', compact("data", "data2"));
    }
    public function job()
    {
        $data = job::all();
        $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();
        return view('user.job', compact("data", "data2"));
    }
}
