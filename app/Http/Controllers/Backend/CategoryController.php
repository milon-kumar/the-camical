<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->get();
        return view('backend.admin.pages.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $this->validate($request,[
            'en_name'=>'required|unique:categories',
            'bn_name'=>'required|unique:categories',
        ]);

        Category::create([
            'users_id'=>auth()->id(),
            'en_name'=>$request->input('en_name'),
            'bn_name'=>$request->input('bn_name'),
            'slug'=>Str::slug($request->input('en_name')),
            'order'=>$request->input('order') ?? 0,
            'status'=>1,
        ]);

        toast('Category Created... :)','success');
        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return $category;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('backend.admin.pages.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $data = $this->validate($request,[
            'en_name'=>'required|unique:categories',
            'bn_name'=>'required|unique:categories',
        ]);

        $category->update([
            'users_id'=>auth()->id(),
            'en_name'=>$request->input('en_name'),
            'bn_name'=>$request->input('bn_name'),
            'slug'=>Str::slug($request->input('en_name')),
            'order'=>$request->input('order') ?? 0,
            'status'=>1,
        ]);


        toast('Category Updated... :)','success');
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {

        return $category;
        $category->delete();
        toast('Category Delete... :)','success');
        return redirect()->route('admin.category.index');
    }
}
