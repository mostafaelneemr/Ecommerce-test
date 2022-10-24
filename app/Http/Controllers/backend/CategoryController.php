<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function CategoryView()
    {
        $category = Category::latest()->get();
        return view('backend.category.category_view', compact('category'));
    }

    public function CategoryStore(Request $request)
    {
        $request->validate([
            'category_name_en' => 'required',
            'category_name_ar' => 'required',
            'category_icon' => 'required',
            ]);
        try {
            Category::insert([
               'category_name_en' => $request->category_name_en,
               'category_name_ar' => $request->category_name_ar,
               'category_slug_en' => strtolower(str_replace(' ','-', $request->category_name_en)),
               'category_slug_ar' =>  str_replace(' ','-', $request->category_name_ar),//str::slug($request->category_name_ar),
               'category_icon' => $request->category_icon,
            ]);

            $notification = array(
                'message' => 'Category Added Successfully',
                'alert-type' => 'success',
            );

            return redirect()->back()->with($notification);
        }catch (\Exception $e){
            return redirect()->back()->withErrors(['errors' => $e->getMessage()]);
        }
    }
}
