<?php

namespace App\Http\Controllers;
use App\Models\Group;
use App\Models\item;
use App\Models\Brand;
use App\Models\sub_Category;
use App\Models\Category;
use App\Models\Banner;
use App\Models\Flash;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        $data = item::all();
        $brand = Brand::all();
        $banner = Banner::where('status','=','1')->get();
        $flash = item::where('flash','=','1')->get();
        

        $cat = Category::all();

        $banner_category = Category::where('group_id','=','0')->get();

        $f_category = Category::where('status','=','1')->get();

        $date = Flash::where('id','=',1)->first();

        $root = Category::select('name','slug','photo')->where('group_id','0')->get();


        return view('frontend.new.index')
        ->with('category',$cat)
        ->with('flash',$flash)
        ->with('data',$data)
        ->with('banner',$banner)
        ->with('brand',$brand)
        
        ->with('f_category',$f_category)
        ->with('b_category',$banner_category)
        ->with('date',$date)
        ->with('root',$root);
    }


    public function search(Request $req)
    {
        $items = item::where('name','like','%'.$req->input('search').'%')->where('status','=','1')->paginate(20);

        return view('frontend.new.search')->with('item',$items);
    }

    public function search_auto_complete(Request $req)
    {
        $query = $req->get('term', '');

        $services = item::where('name','like','%'.$query.'%')->paginate(20);

        $data=[];

        foreach($services as $service){
            $data[] = [
                'value'=>$service->name,
                'id'=>$service->id
                ];
        }
        if(count($data))
        {
            return $data;
        }
        else{
            return ['value'=>'No Result Found', 'id'=>''];
        }

        return view('frontend.new.search')->with('item',$items);
    }

}
