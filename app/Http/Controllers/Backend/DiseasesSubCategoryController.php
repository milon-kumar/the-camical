<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\DiseasesCategory;
use App\Models\DiseasesSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DiseasesSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ds_categories = DiseasesSubCategory::latest()->get();
        return view('backend.admin.pages.diseases_sub_category.index',compact('ds_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $categories = DiseasesCategory::where('status',1)->get();

        return view('backend.admin.pages.diseases_sub_category.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $this->validate($request,[
            'diseases_categories_id'=>'required|integer',
            'en_name'=>'required|unique:diseases_sub_categories',
            'bn_name'=>'required|unique:diseases_sub_categories',
            'en_description'=>'required',
            'bn_description'=>'required',
        ]);
        DiseasesSubCategory::create([
            'users_id'=>auth()->id(),
            'diseases_categories_id'=>$request->input('diseases_categories_id'),
            'en_name'=>$request->input('en_name'),
            'bn_name'=>$request->input('bn_name'),
            'en_description'=>$request->input('en_description'),
            'bn_description'=>$request->input('bn_description'),
            'slug'=>Str::slug($request->input('en_name')),
            'order'=>$request->input('order') ?? 0,
            'image'=>uploadImage($request),
        ]);
        toast('Category Created...... :)','success');
        return redirect()->route('admin.diseases-sub-category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(DiseasesSubCategory $diseasesSubCategory)
    {
        return $diseasesSubCategory;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DiseasesSubCategory $diseasesSubCategory)
    {
        $categories = DiseasesCategory::where('status',1)->get();
        return view('backend.admin.pages.diseases_sub_category.edit',compact('diseasesSubCategory','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DiseasesSubCategory $diseasesSubCategory)
    {
        $this->validate($request,[
            'diseases_categories_id'=>'required|integer',
            'en_name'=>'required',
            'bn_name'=>'required'
        ]);

        $diseasesSubCategory->update([
            'users_id'=>auth()->id(),
            'diseases_categories_id'=>$request->input('diseases_categories_id'),
            'en_name'=>$request->input('en_name'),
            'bn_name'=>$request->input('bn_name'),
            'slug'=>Str::slug($request->input('en_name')),
            'order'=>$request->input('order') ?? 0,
            'image'=>uploadImage($request,$diseasesSubCategory),
        ]);
        toast('Category Updated...... :)','success');
        return redirect()->route('admin.diseases-sub-category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DiseasesSubCategory $diseasesSubCategory)
    {
        $diseasesSubCategory->delete();
        toast('Diseases Sub Category Deleted .. :)','success');
        return redirect()->route('admin.diseases-sub-category.index');
    }
}
