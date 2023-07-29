<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\page;
use App\Models\Carousel;
use App\Models\Footer;

class PageController extends Controller
{
    public function admin_carousel()
    {
        $data = Carousel::all();
        return view('admin.admin_carousel', compact("data"));
    }
    public function uploadCarousel(Request $request)
    {
        $data = new Carousel;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('Carousel', $imagename);
        $data->image = $imagename;

        $data->save();

        return redirect()->back();
    }
    public function deleteCarousel($id)
    {
        $data = Carousel::find($id);
        if (file_exists('Carousel/' . $data->image)) {
            unlink('Carousel/' . $data->image);
        }
        $data->delete();
        return redirect()->back();
    }
    public function admin_home_paragraph()
    {
        $data = page::all();
        return view('admin.admin_home_paragraph', compact("data"));
    }
    public function uploadhome_paragraph(Request $request)
    {
        $data = new page;
        $data->title = $request->title;
        $data->name = $request->name;
        $data->position = $request->position;
        $data->before = $request->before;
        $data->after = $request->after;

        $data->save();

        return redirect()->back();
    }
    public function deletehome_paragraph($id)
    {
        $data = page::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function admin_footer_paragraph()
    {
        $data = Footer::all();
        return view('admin.admin_footer_paragraph', compact("data"));
    }
    public function uploadfooter_paragraph(Request $request)
    {
        $data = new Footer;
        $data->paragraph = $request->paragraph;

        $data->save();

        return redirect()->back();
    }
    public function deletefooter_paragraph($id)
    {
        $data = Footer::find($id);
        $data->delete();
        return redirect()->back();
    }
}
