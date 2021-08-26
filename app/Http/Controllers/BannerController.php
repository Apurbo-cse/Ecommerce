<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;
use App\Models\Banner;
use Intervention\Image\Facades\Image;

class BannerController extends Controller
{
    //

    public function banner()
    {
        $data = Banner::all();
        return view('backend.banner.index')->with('data',$data);

    }


    public function front_banner(Request $req)
    {
        return view('backend.banner.add');
    }


    public function adding_banner(Request $req)
    {
        $sub_category = new Banner();
        $sub_category->name = $req->input('name');
        $sub_category->offer = $req->input('offer');
        $sub_category->description = $req->input('description');

        if($req->hasfile('file'))
        {
            $destination = 'uploads/banner/'.$sub_category->photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            Image::make($file)->resize(851,315)
            ->save('uploads/banner/'.$filename, 100);

            $sub_category->photo = $filename;
        }

        if($req->input('status') == true)
        {
            $sub_category->status = '1';
        }
        else{
            $sub_category->status = '0';
        }
        $sub_category->save();

        return redirect()->back()->with('status','New Banner Added Successfully!');
    }

    // editing Category
    public function edit_banner($id)
    {
        $data = Banner::find($id);

        return view('backend.banner.edit')->with('category',$data);
    }

    // updating group
    public function update_banner(Request $req,$id)
    {
        $data = Banner::find($id);
        $data->name = $req->input('name');
        $data->offer = $req->input('offer');
        $data->description = $req->input('description');
        if($req->hasfile('file'))
        {
            $destination = 'uploads/banner/'.$data->photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            Image::make($file)->resize(851,315)
            ->save('uploads/banner/'.$filename, 100);
            $data->photo = $filename;
        }
        if($req->input('status') == true)
        {
            $data->status = "1";
        }
        else{
            $data->status = '0';
        }
        $data->update();

        return redirect()->back()->with('status','Banner has updated Successfully!');
    }

    function delete_banner($id){
        Banner::destroy($id);
        return redirect()->back()->with('status','Banner has Deleted Successfully!');
    }
}
