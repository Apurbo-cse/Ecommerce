<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Category;
use App\Models\sub_Category;
use App\Models\item;
use App\Models\Brand;
use App\Models\Review;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use App\Models\Orderitem;

//use Request;



class GroupController extends Controller
{

    // Brand portion


    //Brand Show view page
    public function brand()
    {
        $data = Brand::all();
        return view('backend.brand.index')->with('category',$data);
    }


     public function add_brand()
    {
        return view('backend.brand.add');
    }

    public function adding_brand(Request $req)
    {
        $category = new Brand();
        $category->name = $req->input('name');
        $url = $req->input('name');
        $category->slug = str::slug($url,'-');

        if($req->hasfile('file'))
        {
            $destination = 'uploads/brand/'.$category->photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;

            Image::make($file)->resize(200,200)
            ->save('uploads/brand/'.$filename, 100);

            $category->photo = $filename;
        }


        $category->save();

        return redirect()->back()->with('status','New Brand Added Successfully!');
    }

    // editing Category
    public function edit_brand($id)
    {
        $data = Brand::find($id);

        return view('backend.brand.edit')->with('category',$data);
    }


    // updating group
    public function update_brand(Request $req,$id)
    {
        $data = Brand::find($id);
        $data->name = $req->input('name');
        $url = $req->input('name');
        $data->slug = str::slug($url,'-');
        if($req->hasfile('file'))
        {
            $destination = 'uploads/brand/'.$data->photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;

            Image::make($file)->resize(200,200)
            ->save('uploads/brand/'.$filename, 100);

            $data->photo = $filename;
        }

        $data->update();

        return redirect()->back()->with('status','Brand data has updated Successfully!');
    }

    function delete_brand($id){
        Brand::destroy($id);
        return redirect()->back()->with('status','Brand has Deleted Successfully!');
    }


    // Category Portion //

    //Category Show view page
    public function category()
    {
        $data = Category::all();
        return view('backend.category.index')->with('category',$data);

    }

     public function add_category()
    {
        $data = Group::all();
        return view('backend.category.add')->with('data',$data);
    }

    public function adding_category(Request $req)
    {
        $category = new Category();
        $category->group_id = $req->input('group_id');
        $category->name = $req->input('name');
        $url = $req->input('name');
        $category->slug = str::slug($url,'-');
        $category->description = $req->input('description');

        if($req->hasfile('file'))
        {
            $destination = 'uploads/category/'.$category->photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;

            Image::make($file)->resize(600,600)
            ->save('uploads/category/'.$filename, 100);

            $category->photo = $filename;
        }

        if($req->hasfile('file1'))
        {
            $destination = 'uploads/category/banner/'.$category->photo1;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('file1');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;

            Image::make($file)->resize(1300,300)
            ->save('uploads/category/banner/'.$filename, 100);

            $category->photo1 = $filename;
        }

        if($req->input('cod') == true)
        {
            $category->cod = '1';
        }
        else{
            $category->cod = '0';
        }

        if($req->input('status') == true)
        {
            $category->status = '1';
        }
        else{
            $category->status = '0';
        }
        $category->save();

        return redirect()->back()->with('status','New category Added Successfully!');
    }

    // editing Category
    public function edit_category($id)
    {
        $data = Category::find($id);

        return view('backend.category.edit')->with('category',$data);
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

            Image::make($file)->resize(600,600)
            ->save('uploads/category/'.$filename, 100);

            $data->photo = $filename;
        }

        if($req->hasfile('file1'))
        {
            $destination = 'uploads/category/banner/'.$data->photo1;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('file1');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;

            Image::make($file)->resize(1300,300)
            ->save('uploads/category/banner/'.$filename, 100);

            $data->photo1 = $filename;
        }

        if($req->input('cod') == true)
        {
            $data->cod = '1';
        }
        else{
            $data->cod = '0';
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

    function delete_category($id){
        item::where('sub_category_id','=',$id)->delete();
        Category::destroy($id);
        return redirect()->back()->with('status','Category has Deleted Successfully!');
    }



                            // Category Portion //

    //Category Show view page
    public function sub_category()
    {
        $data = sub_Category::all();
        return view('backend.sub_category.index')->with('sub_category',$data);

    }

     public function add_sub_category()
    {
        $data = Category::all();
        return view('backend.sub_category.add')->with('data',$data);
    }

    public function adding_sub_category(Request $req)
    {
        $sub_category = new sub_Category();
        $sub_category->category_id = $req->input('category_id');
        $sub_category->name = $req->input('name');
        $sub_category->description = $req->input('description');

        if($req->hasfile('file'))
        {
            $destination = 'uploads/sub_category/'.$sub_category->photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move('uploads/sub_category/', $filename);

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

        return redirect()->back()->with('status','New sub_category Added Successfully!');
    }

    // editing sub_Category
    public function edit_sub_category($id)
    {
        $data = sub_Category::find($id);
        $item = Category::all();

        return view('backend.sub_category.edit')->with('sub_category',$data)->with('data',$item);
    }

    // updating group
    public function update_sub_category(Request $req,$id)
    {
        $data = sub_Category::find($id);
        $data->category_id = $req->input('category_id');
        $data->name = $req->input('name');
        $data->description = $req->input('description');
        if($req->hasfile('file'))
        {
            $destination = 'uploads/sub_category/'.$data->photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move('uploads/sub_category/', $filename);

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

    function delete_sub_category($id){
        sub_Category::destroy($id);
        return redirect()->back()->with('status','sub_Category has Deleted Successfully!');
    }


    // Item Portion //

    //sub_Category Show view page
    public function item()
    {
        $data = item::all();
        return view('backend.item.index')->with('item',$data);
    }

    public function due_item()
    {
        $data = item::where('status','0')->get();
        return view('backend.item.index')->with('item',$data);
    }

     public function add_item()
    {
        $brand = Brand::orderBy('name', 'ASC')->get();
        return view('backend.item.add')->with('brand',$brand);
    }

    public function adding_item(Request $req)
    {
        $item = new item();
        $item->sub_category_id = $req->input('category_id');
        $item->group_id = $req->input('group_id');
        $item->name = $req->input('name');
        $item->brand_id = $req->input('brand');
        $item->description = $req->input('description');
        $item->price = $req->input('price');
        $item->offer_price = $req->input('offer_price');
        $item->quantity = $req->input('quantity');
        $item->vendor_id = $req->input('vendor_id');
        $item->size = $req->input('size');
        $item->color = $req->input('color');

        $url = $req->input('vendor_id').'-'.$req->input('name');
        $item->slug = str::slug($url,'-');

        // percentage calculation
        $old = $item->price;
        $new = $item->offer_price;

        $off = ($old-$new)*100/$old;

        $item->off = $off;

        if($req->hasfile('file'))
        {
            $destination = 'uploads/item/low/'.$item->photo0;
            if(File::exists($destination))
            {
                File::delete($destination);
            }


            $file = $req->file('file');

            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;

            Image::make($file)->resize(150,150)
            
            ->save('uploads/item/low/'.$filename, 100);

            $item->photo0 = $filename;
        }

        if($req->hasfile('file'))
        {
            $destination = 'uploads/item/'.$item->photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }


            $file = $req->file('file');

            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;

            Image::make($file)->resize(600,600)
            ->insert('uploads/logo/watermark.png', 'bottom-right', 10, 10)
            ->save('uploads/item/'.$filename, 100);


            //$file->move('uploads/item/', $filename);
            /* insert watermark at bottom-right corner with 10px offset */
            //$file->insert(public_path('uploads/logo/watermark.png'), 'bottom-right', 10, 10);

            $item->photo = $filename;
        }

        if($req->hasfile('file1'))
        {
            $destination = 'uploads/item/extra1/'.$item->photo1;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('file1');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;

            Image::make($file)->resize(600,600)
            ->insert('uploads/logo/watermark.png', 'bottom-right', 10, 10)
            ->save('uploads/item/extra1/'.$filename, 100);

            $item->photo1 = $filename;
        }

        if($req->hasfile('file2'))
        {
            $destination = 'uploads/item/extra2/'.$item->photo2;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('file2');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;

            Image::make($file)->resize(600,600)
            ->insert('uploads/logo/watermark.png', 'bottom-right', 10, 10)
            ->save('uploads/item/extra2/'.$filename, 100);

            $item->photo2 = $filename;
        }



        if($req->input('status') == true)
        {
            $item->status = '1';
        }
        else{
            $item->status = '0';
        }

        if($req->input('featured') == true)
        {
            $item->featured = '1';
        }
        else{
            $item->featured = '0';
        }

        if($req->input('latest') == true)
        {
            $item->latest = '1';
        }
        else{
            $item->latest = '0';
        }

        $item->save();

        return redirect()->back()->with('status','New item Added Successfully!');

    }

    // editing item
    public function edit_item($id)
    {
        $data = item::find($id);
        $brand = Brand::orderBy('name', 'ASC')->get();
        return view('backend.item.edit')->with('product',$data)->with('brand',$brand);
    }

    // updating group
    public function update_item(Request $req,$id)
    {
        $data = item::find($id);
        $data->name = $req->input('name');
        $data->brand_id = $req->input('brand');
        $data->description = $req->input('description');
        $data->price = $req->input('price');
        $data->offer_price = $req->input('offer_price');

        // percentage calculation
        $old = $data->price;
        $new = $data->offer_price;

        $off = ($old-$new)*100/$old;

        $data->off = $off;

        $url = $req->input('vendor_id').'-'.$req->input('name');
        $data->slug = str::slug($url,'-');


        $data->quantity = $req->input('quantity');
        $data->size = $req->input('size');
        $data->color = $req->input('color');

        if($req->hasfile('file'))
        {
            $destination = 'uploads/item/low/'.$data->photo0;
            if(File::exists($destination))
            {
                File::delete($destination);
            }


            $file = $req->file('file');

            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;

            Image::make($file)->resize(150,150)
         
            ->save('uploads/item/low/'.$filename, 100);


            

            $data->photo0 = $filename;
        }

        if($req->hasfile('file'))
        {
            $destination = 'uploads/item/'.$data->photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;

            Image::make($file)->resize(600,600)
            ->insert('uploads/logo/watermark.png', 'bottom-right', 10, 10)
            ->save('uploads/item/'.$filename, 100);

            $data->photo = $filename;
        }

        if($req->hasfile('file1'))
        {
            $destination = 'uploads/item/extra1/'.$data->photo1;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('file1');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;

            Image::make($file)->resize(600,600)
            ->insert('uploads/logo/watermark.png', 'bottom-right', 10, 10)
            ->save('uploads/item/extra1/'.$filename, 100);

            $data->photo1 = $filename;
        }

        if($req->hasfile('file2'))
        {
            $destination = 'uploads/item/extra2/'.$data->photo2;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('file2');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;

            Image::make($file)->resize(600,600)
            ->insert('uploads/logo/watermark.png', 'bottom-right', 10, 10)
            ->save('uploads/item/extra2/'.$filename, 100);

            $data->photo2 = $filename;
        }

        if($req->input('latest') == true)
        {
            $data->latest = "1";
        }
        else{
            $data->latest = '0';
        }


        if($req->input('featured') == true)
        {
            $data->featured = "1";
        }
        else{
            $data->featured = '0';
        }


        if($req->input('status') == true)
        {
            $data->status = "1";
        }
        else{
            $data->status = '0';
        }
        $data->update();

        return redirect()->back()->with('status','Item has updated Successfully!');
    }

    function delete_item($id){
        Orderitem::where('item_id','=',$id)->delete();
        item::destroy($id);
        return redirect()->back()->with('status','Item has Deleted Successfully!');
    }

    public function show_sub($id)
    {
        $category = Category::find($id);
        $subcat = sub_Category::where('category_id','=',$category->id)->get();

        return view('frontend.home2')->with('subcat',$subcat);
    }

    public function show_items($id)
    {
        $sub_category = sub_Category::find($id);
        $items = item::where('sub_category_id','=',$sub_category->id)->get();

        return view('frontend.home3')->with('items',$items);

    }

    public function product_details($slug)
    {
        $product = item::where('slug','=',$slug)->first();

        $color = $product->color;
        $p_color = explode(',', $color);

        $size = $product->size;
        $p_size = explode(',', $size);


        //foreach($p_color as $myArray)
        //{
        //    echo $myArray.'<br>';
        //}


        $review = Review::where('item_id','=',$product->id)->get();

        $ratings = $review->avg('ratings');

        $related = item::where('group_id','=',$product->group_id)
        ->where('id','<>',$product->id)
        ->get();

        return view('frontend.new.product')
        ->with('data',$product)
        ->with('related',$related)
        ->with('review',$review)
        ->with('ratings',$ratings)
        ->with('color',$p_color)
        ->with('size',$p_size);
    }






}
