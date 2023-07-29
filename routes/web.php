<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController ;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return view('user.home');
// });

Route::get("/", [NavbarController::class, "home"]);




//frontend route
Route::get("/noticesearch", [HomeController::class, "noticesearch"]);
Route::get("/notice_download/{filename}", [HomeController::class, "notice_download"]);
Route::get("/notice_view/{id}", [HomeController::class, "notice_view"]);
Route::post("/uploadcontact", [HomeController::class, "uploadcontact"]);
Route::get("/job_details/{id}", [HomeController::class, "job_details"]);
Route::get("/routinesearch", [HomeController::class, "routinesearch"]);
Route::get("/routine_download/{image}", [HomeController::class, "routine_download"]);
Route::get("/routine_view/{id}", [HomeController::class, "routine_view"]);
Route::get("/syllabussearch", [HomeController::class, "syllabussearch"]);
Route::get("/syllabus_download/{image}", [HomeController::class, "syllabus_download"]);
Route::get("/syllabus_view/{id}", [HomeController::class, "syllabus_view"]);
Route::get("/examsearch", [HomeController::class, "examsearch"]);
Route::get("/exam_download/{image}", [HomeController::class, "exam_download"]);
Route::get("/exam_view/{id}", [HomeController::class, "exam_view"]);
Route::get("/governingsearch", [HomeController::class, "governingsearch"]);
Route::get("/governing_download/{image}", [HomeController::class, "governing_download"]);
Route::get("/governing_view/{id}", [HomeController::class, "governing_view"]);
Route::get("/schoolsearch", [HomeController::class, "schoolsearch"]);
Route::get("/school_download/{image}", [HomeController::class, "school_download"]);
Route::get("/school_view/{id}", [HomeController::class, "school_view"]);
Route::get("/staffssearch", [HomeController::class, "staffssearch"]);
Route::get("/staffs_download/{image}", [HomeController::class, "staffs_download"]);
Route::get("/staffs_view/{id}", [HomeController::class, "staffs_view"]);
Route::get("/resultsearch", [HomeController::class, "resultsearch"]);
Route::get("/result_download/{image}", [HomeController::class, "result_download"]);
Route::get("/result_view/{id}", [HomeController::class, "result_view"]);




// navbar route
Route::get("/notice1", [NavbarController::class, "notice1"]);
Route::get("/home", [NavbarController::class, "home"]);
Route::get("/about", [NavbarController::class, "about"]);
Route::get("/gallery", [NavbarController::class, "gallery"]);
Route::get("/results", [NavbarController::class, "results"]);
Route::get("/payment", [NavbarController::class, "payment"]);
Route::get("/contact", [NavbarController::class, "contact"]);
Route::get("/admission", [NavbarController::class, "admission"]);
Route::get("/rules", [NavbarController::class, "rules"]);
Route::get("/routine_doc", [NavbarController::class, "routine_doc"]);
Route::get("/syllabus_doc", [NavbarController::class, "syllabus_doc"]);
Route::get("/exam_doc", [NavbarController::class, "exam_doc"]);
Route::get("/calender1", [NavbarController::class, "calender1"]);
Route::get("/governing_doc", [NavbarController::class, "governing_doc"]);
Route::get("/staff_doc", [NavbarController::class, "staff_doc"]);
Route::get("/school_doc", [NavbarController::class, "school_doc"]);
Route::get("/job", [NavbarController::class, "job"]);
Route::get("/about", [NavbarController::class, "about"]);
// navbar route




// admin route
Route::middleware(['auth'])->group(function () {
    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified'
    ])->group(function () {
        Route::get('/register', function () {
            return view('register');
        });
    });
    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified'
    ])->group(function () {
        Route::get('/dashboard', function () {
            return view('admin/home');
        })->name('dashboard');
    });
    
    Route::get("/admin_notice", [AdminController::class, "admin_notice"]);
    Route::get("/admin_contact", [AdminController::class, "admin_contact"]);
    Route::get("/admin_calender", [AdminController::class, "admin_calender"]);
    Route::get("/admin_routine", [AdminController::class, "admin_routine"]);
    Route::get("/admin_syllabus", [AdminController::class, "admin_syllabus"]);
    Route::get("/admin_governing", [AdminController::class, "admin_governing"]);
    Route::get("/admin_school", [AdminController::class, "admin_school"]);
    Route::get("/admin_staffs", [AdminController::class, "admin_staffs"]);
    Route::get("/admin_exam", [AdminController::class, "admin_exam"]);
    Route::get("/admin_job", [AdminController::class, "admin_job"]);
    Route::get("/admin_result", [AdminController::class, "admin_result"]);
    Route::get("/admin_result", [AdminController::class, "admin_result"]);
    Route::get("/admin_gallary", [AdminController::class, "admin_gallary"]);
    Route::post("/uploadgallary", [AdminController::class, "uploadgallary"]);
    Route::get("/deletegallary/{id}", [AdminController::class, "deletegallary"]);
    Route::get("/admin_carousel", [PageController::class, "admin_carousel"]);
    Route::post("/uploadCarousel", [PageController::class, "uploadCarousel"]);
    Route::get("/deleteCarousel/{id}", [PageController::class, "deleteCarousel"]);
    Route::get("/admin_home_paragraph", [PageController::class, "admin_home_paragraph"]);
    Route::post("/uploadhome_paragraph", [PageController::class, "uploadhome_paragraph"]);
    Route::get("/deletehome_paragraph/{id}", [PageController::class, "deletehome_paragraph"]);
    Route::get("/admin_footer_paragraph", [PageController::class, "admin_footer_paragraph"]);
    Route::post("/uploadfooter_paragraph", [PageController::class, "uploadfooter_paragraph"]);
    Route::get("/deletefooter_paragraph/{id}", [PageController::class, "deletefooter_paragraph"]);

        // admin route
        Route::post("/uploadnotice", [AdminController::class, "uploadnotice"]);
        Route::get("/noticesearch", [AdminController::class, "noticesearch"]);
        Route::get("/deletenotice/{id}", [AdminController::class, "deletenotice"]);
        Route::get("/updatenotice/{id}", [AdminController::class, "updatenotice"]);
        Route::post("/update_notice/{id}", [AdminController::class, "update_notice"]);
        Route::get("/deletecontact/{id}", [AdminController::class, "deletecontact"]);
        Route::post("/uploadcalender", [AdminController::class, "uploadcalender"]);
        Route::get("/deletecalender/{id}", [AdminController::class, "deletecalender"]);
        Route::post("/uploadjob", [AdminController::class, "uploadjob"]);
        Route::get("/jobsearch", [AdminController::class, "jobsearch"]);
        Route::get("/deletejob/{id}", [AdminController::class, "deletejob"]);
        Route::get("/updatejob/{id}", [AdminController::class, "updatejob"]);
        Route::post("/update_job/{id}", [AdminController::class, "update_job"]);
        Route::post("/uploadroutine", [AdminController::class, "uploadroutine"]);
        Route::get("/routinesearch", [AdminController::class, "routinesearch"]);
        Route::get("/deleteroutine/{id}", [AdminController::class, "deleteroutine"]);
        Route::get("/updateroutine/{id}", [AdminController::class, "updateroutine"]);
        Route::post("/update_routine/{id}", [AdminController::class, "update_routine"]);
        Route::post("/uploadsyllabus", [AdminController::class, "uploadsyllabus"]);
        Route::get("/syllabussearch", [AdminController::class, "syllabussearch"]);
        Route::get("/deletesyllabus/{id}", [AdminController::class, "deletesyllabus"]);
        Route::get("/updatesyllabus/{id}", [AdminController::class, "updatesyllabus"]);
        Route::post("/update_syllabus/{id}", [AdminController::class, "update_syllabus"]);
        Route::post("/uploadexam", [AdminController::class, "uploadexam"]);
        Route::get("/examsearch", [AdminController::class, "examsearch"]);
        Route::get("/deleteexam/{id}", [AdminController::class, "deleteexam"]);
        Route::get("/updateexam/{id}", [AdminController::class, "updateexam"]);
        Route::post("/update_exam/{id}", [AdminController::class, "update_exam"]);
        Route::post("/uploadgoverning", [AdminController::class, "uploadgoverning"]);
        Route::get("/governingsearch", [AdminController::class, "governingsearch"]);
        Route::get("/deletegoverning/{id}", [AdminController::class, "deletegoverning"]);
        Route::get("/updategoverning/{id}", [AdminController::class, "updategoverning"]);
        Route::post("/update_governing/{id}", [AdminController::class, "update_governing"]);
        Route::post("/uploadschool", [AdminController::class, "uploadschool"]);
        Route::get("/schoolsearch", [AdminController::class, "schoolsearch"]);
        Route::get("/deleteschool/{id}", [AdminController::class, "deleteschool"]);
        Route::get("/updateschool/{id}", [AdminController::class, "updateschool"]);
        Route::post("/update_school/{id}", [AdminController::class, "update_school"]);
        Route::post("/uploadstaffs", [AdminController::class, "uploadstaffs"]);
        Route::get("/staffssearch", [AdminController::class, "staffssearch"]);
        Route::get("/deletestaffs/{id}", [AdminController::class, "deletestaffs"]);
        Route::get("/updatestaffs/{id}", [AdminController::class, "updatestaffs"]);
        Route::post("/update_staffs/{id}", [AdminController::class, "update_staffs"]);
        Route::post("/uploadresult", [AdminController::class, "uploadresult"]);
        Route::get("/resultsearch", [AdminController::class, "resultsearch"]);
        Route::get("/deleteresult/{id}", [AdminController::class, "deleteresult"]);
        Route::get("/updateresult/{id}", [AdminController::class, "updateresult"]);
        Route::post("/update_result/{id}", [AdminController::class, "update_result"]);
        Route::get("/admin_result_back", [AdminController::class, "admin_result_back"]);

    });

