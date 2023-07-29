<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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

class AdminController extends Controller
{
    public function admin_notice()
    {
        $data = notice::all();
        return view('admin.notice', compact("data"));
    }

    public function uploadnotice(Request $request)
    {
        $data = new notice;
        $file = $request->filename;
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $request->filename->move('notice', $filename);
        $data->filename = $filename;
        $data->title = $request->title;
        $data->date = $request->date;

        $data->save();

        return redirect()->back();
    }
    public function noticesearch(Request $request)
    {
        $search = $request->search;
        if ($search == '') {
            $data = notice::all();
            return view('admin.notice', compact("data"));
        }
        $data = notice::where('title', 'Like', '%' . $search . '%')->get();

        return view('admin.notice', compact("data"));
    }
    public function deletenotice($id)
    {
        $data = notice::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updatenotice($id)
    {
        $data = notice::find($id);
        return view("admin.updatenotice", compact("data"));
    }



    public function update_notice(Request $request, $id)
    {
        $data = notice::find($id);

        $file = $request->filename;
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $request->filename->move('notice', $filename);
        $data->filename = $filename;

        $data->title = $request->title;
        $data->date = $request->date;
        $data->save();

        return redirect()->back();
    }

    public function admin_contact()
    {
        $data = contact::all();
        return view('admin.contact', compact("data"));
    }
    public function deletecontact($id)
    {
        $data = contact::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function admin_calender()
    {
        $data = calender::all();
        return view('admin.calender', compact("data"));
    }
    public function uploadcalender(Request $request)
    {
        $data = new calender;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('calender', $imagename);
        $data->image = $imagename;

        $data->save();

        return redirect()->back();
    }
    public function deletecalender($id)
    {
        $data = calender::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function admin_job()
    {
        $data = job::all();
        return view('admin.jobs', compact("data"));
    }

    public function uploadjob(Request $request)
    {
        $data = new job;
        $data->title = $request->title;
        $data->vacancy = $request->vacancy;
        $data->type = $request->type;
        $data->requirement = $request->requirement;
        $data->salary = $request->salary;
        $data->time = $request->time;
        $data->holiday = $request->holiday;
        $data->deadline = $request->deadline;
        $data->save();

        $data->save();

        return redirect()->back();
    }
    public function jobsearch(Request $request)
    {
        $search = $request->search;
        if ($search == '') {
            $data = job::all();
            return view('admin.jobs', compact("data"));
        }
        $data = job::where('title', 'Like', '%' . $search . '%')->get();

        return view('admin.jobs', compact("data"));
    }
    public function deletejob($id)
    {
        $data = job::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updatejob($id)
    {
        $data = job::find($id);
        return view("admin.updatejob", compact("data"));
    }



    public function update_job(Request $request, $id)
    {
        $data = job::find($id);
        $data->title = $request->title;
        $data->vacancy = $request->vacancy;
        $data->type = $request->type;
        $data->requirement = $request->requirement;
        $data->salary = $request->salary;
        $data->time = $request->time;
        $data->holiday = $request->holiday;
        $data->deadline = $request->deadline;
        $data->save();

        return redirect()->back();
    }
    public function admin_routine()
    {
        $data = routine::all();
        return view('admin.routine', compact("data"));
    }

    public function uploadroutine(Request $request)
    {
        $data = new routine;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('routine', $imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->date = $request->date;

        $data->save();

        return redirect()->back();
    }
    public function routinesearch(Request $request)
    {
        $search = $request->search;
        if ($search == '') {
            $data = routine::all();
            return view('admin.routine', compact("data"));
        }
        $data = routine::where('title', 'Like', '%' . $search . '%')->get();

        return view('admin.routine', compact("data"));
    }
    public function deleteroutine($id)
    {
        $data = routine::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updateroutine($id)
    {
        $data = routine::find($id);
        return view("admin.updateroutine", compact("data"));
    }



    public function update_routine(Request $request, $id)
    {
        $data = routine::find($id);
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('routine', $imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->date = $request->date;
        $data->save();

        return redirect()->back();
    }

    public function admin_syllabus()
    {
        $data = syllabus::all();
        return view('admin.syllabus', compact("data"));
    }

    public function uploadsyllabus(Request $request)
    {
        $data = new syllabus;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('syllabus', $imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->date = $request->date;

        $data->save();

        return redirect()->back();
    }
    public function syllabussearch(Request $request)
    {
        $search = $request->search;
        if ($search == '') {
            $data = notice::all();
            return view('admin.syllabus', compact("data"));
        }
        $data = notice::where('title', 'Like', '%' . $search . '%')->get();

        return view('admin.syllabus', compact("data"));
    }
    public function deletesyllabus($id)
    {
        $data = syllabus::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updatesyllabus($id)
    {
        $data = syllabus::find($id);
        return view("admin.updatesyllabus", compact("data"));
    }



    public function update_syllabus(Request $request, $id)
    {
        $data = syllabus::find($id);

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('syllabus', $imagename);
        $data->image = $imagename;

        $data->title = $request->title;
        $data->date = $request->date;
        $data->save();

        return redirect()->back();
    }
    public function admin_exam()
    {
        $data = exam::all();
        return view('admin.exam', compact("data"));
    }

    public function uploadexam(Request $request)
    {
        $data = new exam;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('exam', $imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->date = $request->date;

        $data->save();

        return redirect()->back();
    }
    public function examsearch(Request $request)
    {
        $search = $request->search;
        if ($search == '') {
            $data = notice::all();
            return view('admin.exam', compact("data"));
        }
        $data = notice::where('title', 'Like', '%' . $search . '%')->get();

        return view('admin.exam', compact("data"));
    }
    public function deleteexam($id)
    {
        $data = exam::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updateexam($id)
    {
        $data = exam::find($id);
        return view("admin.updateexam", compact("data"));
    }



    public function update_exam(Request $request, $id)
    {
        $data = exam::find($id);

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('exam', $imagename);
        $data->image = $imagename;

        $data->title = $request->title;
        $data->date = $request->date;
        $data->save();

        return redirect()->back();
    }
    public function admin_governing()
    {
        $data = governing::all();
        return view('admin.governing', compact("data"));
    }

    public function uploadgoverning(Request $request)
    {
        $data = new governing;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('governing', $imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->date = $request->date;

        $data->save();

        return redirect()->back();
    }
    public function governingsearch(Request $request)
    {
        $search = $request->search;
        if ($search == '') {
            $data = notice::all();
            return view('admin.governing', compact("data"));
        }
        $data = notice::where('title', 'Like', '%' . $search . '%')->get();

        return view('admin.governing', compact("data"));
    }
    public function deletegoverning($id)
    {
        $data = governing::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updategoverning($id)
    {
        $data = governing::find($id);
        return view("admin.updategoverning", compact("data"));
    }



    public function update_governing(Request $request, $id)
    {
        $data = governing::find($id);

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('governing', $imagename);
        $data->image = $imagename;

        $data->title = $request->title;
        $data->date = $request->date;
        $data->save();

        return redirect()->back();
    }
    public function admin_school()
    {
        $data = school::all();
        return view('admin.school', compact("data"));
    }

    public function uploadschool(Request $request)
    {
        $data = new school;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('school', $imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->date = $request->date;

        $data->save();

        return redirect()->back();
    }
    public function schoolsearch(Request $request)
    {
        $search = $request->search;
        if ($search == '') {
            $data = routine::all();
            return view('admin.school', compact("data"));
        }
        $data = routine::where('title', 'Like', '%' . $search . '%')->get();

        return view('admin.school', compact("data"));
    }
    public function deleteschool($id)
    {
        $data = school::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updateschool($id)
    {
        $data = school::find($id);
        return view("admin.updateschool", compact("data"));
    }



    public function update_school(Request $request, $id)
    {
        $data = school::find($id);

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('school', $imagename);
        $data->image = $imagename;

        $data->title = $request->title;
        $data->date = $request->date;
        $data->save();

        return redirect()->back();
    }
    public function admin_staffs()
    {
        $data = staffs_doc::all();
        return view('admin.staffs', compact("data"));
    }

    public function uploadstaffs(Request $request)
    {
        $data = new staffs_doc;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('staffs', $imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->date = $request->date;

        $data->save();

        return redirect()->back();
    }
    public function staffssearch(Request $request)
    {
        $search = $request->search;
        if ($search == '') {
            $data = staffs_doc::all();
            return view('admin.staffs', compact("data"));
        }
        $data = staffs_doc::where('title', 'Like', '%' . $search . '%')->get();

        return view('admin.staffs', compact("data"));
    }
    public function deletestaffs($id)
    {
        $data = staffs_doc::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updatestaffs($id)
    {
        $data = staffs_doc::find($id);
        return view("admin.updatestaffs", compact("data"));
    }



    public function update_staffs(Request $request, $id)
    {
        $data = staffs_doc::find($id);

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('staffs', $imagename);
        $data->image = $imagename;

        $data->title = $request->title;
        $data->date = $request->date;
        $data->save();

        return redirect()->back();
    }
}
