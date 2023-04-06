<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Diseases;
use App\Models\DiseasesCategory;
use App\Models\DiseasesSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DiseasesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diseases = Diseases::with(['diseasesCategory:id,en_name','diseasesSubCategory:id,en_name'])->latest()->get();
        return view('backend.admin.pages.diseases.index',compact('diseases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = DiseasesCategory::where('status',1)->get();
        return view('backend.admin.pages.diseases.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'diseases_categories_id'=>'required|integer',
            'diseases_sub_categories_id'=>'required|integer',
            'en_short_name'=>'required',
            'bn_short_name'=>'required',
            'en_full_name'=>'required',
            'bn_full_name'=>'required',
        ]);

        Diseases::create([
            'users_id'=>auth()->id(),
            'diseases_categories_id'=>$request->input('diseases_categories_id'),
            'diseases_sub_categories_id'=>$request->input('diseases_sub_categories_id') ?? 0,
            'en_short_name'=>$request->input('en_short_name'),
            'bn_short_name'=>$request->input('bn_short_name'),
            'en_full_name'=>$request->input('en_full_name'),
            'bn_full_name'=>$request->input('bn_full_name'),
            'slug'=>Str::slug($request->input('en_short_name')),
            'en_symptoms'=>$request->input('en_symptoms') ?? null,
            'bn_symptoms'=>$request->input('bn_symptoms') ?? null,
            'image'=>uploadImage($request),
            'status'=>1,
        ]);
        toast('Disease Created','success');
        return redirect()->route('admin.diseases.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Diseases $diseases)
    {
        return $diseases;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Diseases $diseases,$id)
    {
        $diseases = Diseases::findOrFail($id);
        $categories = DiseasesCategory::where('status',1)->get();
        $s_categories = DiseasesSubCategory::where('status',1)->get();
        return view('backend.admin.pages.diseases.edit',compact('categories','s_categories','diseases'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Diseases $diseases)
    {


        $this->validate($request,[
            'diseases_categories_id'=>'required|integer',
            'en_short_name'=>'required',
            'bn_short_name'=>'required',
            'en_full_name'=>'required',
            'bn_full_name'=>'required',
        ]);

        Diseases::create([
            'users_id'=>auth()->id(),
            'diseases_categories_id'=>$request->input('diseases_categories_id'),
            'diseases_sub_categories_id'=>$request->input('diseases_sub_categories_id') ?? 0,
            'en_short_name'=>$request->input('en_short_name'),
            'bn_short_name'=>$request->input('bn_short_name'),
            'en_full_name'=>$request->input('en_full_name'),
            'bn_full_name'=>$request->input('bn_full_name'),
            'slug'=>Str::slug($request->input('en_short_name')),
            'en_symptoms'=>$request->input('en_symptoms') ?? null,
            'bn_symptoms'=>$request->input('bn_symptoms') ?? null,
            'image'=>uploadImage($request),
            'status'=>1,
        ]);
        toast('Disease Updated..... :)','success');
        return redirect()->route('admin.diseases.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diseases $diseases)
    {
        @unlink($diseases->image);
        $diseases->delete();
        toast('Diseases Deleted successfully....... :)','success');
        return redirect()->route('admin.diseases.index');
    }

    public function getSubCategory(Request $request)
    {
        return $categories = DiseasesSubCategory::where('diseases_categories_id',$request->input('_id'))->where('status',1)->get(['id','en_name']);
    }
}
