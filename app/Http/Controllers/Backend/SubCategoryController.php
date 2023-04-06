<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sub_categories = SubCategory::with(['category'])->latest()->get();
        return view('backend.admin.pages.sub_category.index',compact('sub_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('status',1)->get(['id','en_name']);
        return view('backend.admin.pages.sub_category.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'categories_id'=>'required|integer',
            'en_name'=>'required|unique:sub_categories',
            'bn_name'=>'required|unique:sub_categories',
        ]);
        SubCategory::create([
            'users_id'=>auth()->id(),
            'categories_id'=>$request->input('categories_id'),
            'en_name'=>$request->input('en_name'),
            'bn_name'=>$request->input('bn_name'),
            'slug'=>Str::slug($request->input('en_name')),
            'order'=>$request->input('order'),
        ]);
        toast('Sub Category Created ......  :)','success');
        return redirect()->route('admin.sub-category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(SubCategory $subCategory)
    {
        return $subCategory;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategory $subCategory)
    {
        $categories = Category::where('status',1)->get(['id','en_name']);
        return view('backend.admin.pages.sub_category.edit',compact('categories','subCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubCategory $subCategory)
    {

        $this->validate($request,[
            'categories_id'=>'required|integer',
            'en_name'=>'required',
            'bn_name'=>'required',
        ]);
        $subCategory->update([
            'users_id'=>auth()->id(),
            'categories_id'=>$request->input('categories_id'),
            'en_name'=>$request->input('en_name'),
            'bn_name'=>$request->input('bn_name'),
            'slug'=>Str::slug($request->input('en_name')),
            'order'=>$request->input('order'),
        ]);
        toast('Sub Category Updated ......  :)','success');
        return redirect()->route('admin.sub-category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        toast('Sub Category Deleted ......  :)','success');
        return redirect()->route('admin.sub-category.index');
    }
}
