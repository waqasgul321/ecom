<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{
    public function veiw_category()
    {
    
    
        $data=Category::all();
        
        return view('admin.category',compact('data'));

    }


    public function add_category(Request $request)
    {
    
        $category = new Category;

        $category->category_name=$request->add_category;
        

        $category->save();
        toastr()->addsuccess('Added Category successfully.');

        return redirect()->back();

     

    }


}
