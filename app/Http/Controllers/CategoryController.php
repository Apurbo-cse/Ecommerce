<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    //

    //Category Show view page
    public function show_category()
    {
        $data = Category::all();
        return view('backend.category.index')->with('category',$data);
    }

    public function add_category()
    {
        return view('backend.category.add');
    }

    // updating group
    public function update_category(Request $req,$id)
    {
        $data = Category::find($id);
        $data->name = $req->input('name');
        $url = $req->input('name');
        $data->slug = str::slug($url,'-');
        $data->description = $req->input('description');
        if($req->hasfile('file'))
        {
            $destination = 'uploads/category/'.$data->photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move('uploads/category/', $filename);

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

        return redirect()->back()->with('status','Group data has updated Successfully!');
    }


}
