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
use App\Models\Footer;
use Illuminate\Support\Facades\Stroage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    // public function index()
    // {
    //     return view('home');
    // }
    public function noticesearch(Request $request)
    {
        $search = $request->search;
        if ($search == '') {
            $data = notice::paginate(10);
            $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();
            return view('user.notice1', compact("data", "data2"));
        }
        $data = notice::where('title', 'Like', '%' . $search . '%')->get();
        $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();
        return view('user.notice1', compact("data", "data2"));
    }
    public function notice_download(Request $request, $filename)
    {
        $path = public_path() . '/notice/' . $filename;
        return response()->download($path);
    }
    public function notice_view($id)
    {
        $data = notice::find($id);
        return view('user.noticeview', compact('data'));
    }
    public function uploadcontact(Request $request)
    {
        $data = new contact;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->msg = $request->msg;
        $data->save();

        return redirect()->back();
    }
    public function job_details($id)
    {
        $data = job::find($id);
        $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();
        return view("user.job_details", compact("data", "data2"));
    }
    public function routinesearch(Request $request)
    {
        $search = $request->search;
        if ($search == '') {
            $data = routine::paginate(10);
            $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();
            return view('user.routine', compact("data", "data2"));
        }
        $data = routine::where('title', 'Like', '%' . $search . '%')->get();
        $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();

        return view('user.routine', compact("data", "data2"));
    }
    public function routine_download(Request $request, $image)
    {
        $path = public_path() . '/routine/' . $image;
        return response()->download($path);
    }
    public function routine_view($id)
    {
        $data = routine::find($id);
        return view('user.routineview', compact('data'));
    }


    public function syllabussearch(Request $request)
    {
        $search = $request->search;
        if ($search == '') {
            $data = syllabus::paginate(10);
            $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();
            return view('user.syllabus', compact("data", "data2"));
        }
        $data = syllabus::where('title', 'Like', '%' . $search . '%')->get();
        $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();

        return view('user.syllabus', compact("data", "data2"));
    }
    public function syllabus_download(Request $request, $image)
    {
        $path = public_path() . '/syllabus/' . $image;
        return response()->download($path);
    }
    public function syllabus_view($id)
    {
        $data = syllabus::find($id);
        return view('user.syllabusview', compact('data'));
    }

    public function examsearch(Request $request)
    {
        $search = $request->search;
        if ($search == '') {
            $data = exam::paginate(10);
            $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();
            return view('user.exam_doc', compact("data", "data2"));
        }
        $data = exam::where('title', 'Like', '%' . $search . '%')->get();
        $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();

        return view('user.exam_doc', compact("data", "data2"));
    }
    public function exam_download(Request $request, $image)
    {
        $path = public_path() . '/exam/' . $image;
        return response()->download($path);
    }
    public function exam_view($id)
    {
        $data = exam::find($id);
        return view('user.examview', compact('data'));
    }

    public function governingsearch(Request $request)
    {
        $search = $request->search;
        if ($search == '') {
            $data = governing::paginate(10);
            $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();
            return view('user.governing', compact("data", "data2"));
        }
        $data = governing::where('title', 'Like', '%' . $search . '%')->get();
        $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();

        return view('user.governing', compact("data", "data2"));
    }
    public function governing_download(Request $request, $image)
    {
        $path = public_path() . '/governing/' . $image;
        return response()->download($path);
    }
    public function governing_view($id)
    {
        $data = governing::find($id);
        return view('user.governingview', compact('data'));
    }

    public function schoolsearch(Request $request)
    {
        $search = $request->search;
        if ($search == '') {
            $data = school::paginate(10);
            $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();
            return view('user.school_doc', compact("data", "data2"));
        }
        $data = school::where('title', 'Like', '%' . $search . '%')->get();
        $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();

        return view('user.school_doc', compact("data", "data2"));
    }
    public function school_download(Request $request, $image)
    {
        $path = public_path() . '/school/' . $image;
        return response()->download($path);
    }
    public function school_view($id)
    {
        $data = school::find($id);
        return view('user.schoolview', compact('data'));
    }

    public function staffssearch(Request $request)
    {
        $search = $request->search;
        if ($search == '') {
            $data = staffs_doc::paginate(10);
            $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();
            return view('user.staffs_doc', compact("data", "data2"));
        }
        $data = staffs_doc::where('title', 'Like', '%' . $search . '%')->get();
        $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();

        return view('user.staffs_doc', compact("data", "data2"));
    }
    public function staffs_download(Request $request, $image)
    {
        $path = public_path() . '/staffs/' . $image;
        return response()->download($path);
    }
    public function staffs_view($id)
    {
        $data = staffs::find($id);
        return view('user.staffsview', compact('data'));
    }

    public function resultsearch(Request $request)
    {
        $search = $request->search;
        if ($search == '') {
            $data = result::paginate(10);
            $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();
            return view('user.results', compact("data", "data2"));
        }
        $data = result::where('title', 'Like', '%' . $search . '%')->get();
        $data2 = Footer::orderBy('created_at', 'desc')->limit(1)->get();

        return view('user.results', compact("data", "data2"));
    }
    public function result_download(Request $request, $image)
    {
        $path = public_path() . '/result/' . $image;
        return response()->download($path);
    }
    public function result_view($id)
    {
        $data = result::find($id);
        return view('user.resultview', compact('data'));
    }
}
