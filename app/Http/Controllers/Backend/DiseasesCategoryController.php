<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\DiseasesCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DiseasesCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $d_categories = DiseasesCategory::latest()->get();
        return view('backend.admin.pages.diseases_category.index',compact('d_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.pages.diseases_category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'en_name'=>'required|unique:diseases_categories',
            'bn_name'=>'required|unique:diseases_categories',
        ]);

        DiseasesCategory::create([
           'users_id'=>auth()->id(),
           'en_name'=>$request->input('en_name'),
           'bn_name'=>$request->input('bn_name'),
           'slug'=>Str::slug($request->input('en_name')),
           'order'=>$request->input('order') ?? 0,
        ]);
        toast('Diseases Category Created ... :)','success');
        return redirect()->route('admin.diseases-category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(DiseasesCategory $diseasesCategory)
    {
        return $diseasesCategory;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DiseasesCategory $diseasesCategory)
    {
        return view('backend.admin.pages.diseases_category.edit',compact('diseasesCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DiseasesCategory $diseasesCategory)
    {
        $this->validate($request,[
            'en_name'=>'required',
            'bn_name'=>'required',
        ]);

        $diseasesCategory->update([
            'users_id'=>auth()->id(),
            'en_name'=>$request->input('en_name'),
            'bn_name'=>$request->input('bn_name'),
            'slug'=>Str::slug($request->input('en_name')),
            'order'=>$request->input('order') ?? 0,
        ]);
        toast('Diseases Category Updated .... :)','success');
        return redirect()->route('admin.diseases-category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DiseasesCategory $diseasesCategory)
    {
        $diseasesCategory->delete();
        toast('Diseases Category Deleted .... :)','success');
        return redirect()->route('admin.diseases-category.index');
    }
}
