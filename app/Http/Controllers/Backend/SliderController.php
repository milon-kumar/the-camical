<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::latest()->get();
        return view('backend.admin.pages.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.pages.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'image'=>'required|image',
        ]);

        Slider::create([
            'users_id'=>auth()->id(),
            'en_title'=>$request->input('en_title'),
            'bn_title'=>$request->input('bn_title'),
            'slug'=>Str::slug($request->input('en_title')),
            'en_short_description'=>$request->input('en_short_description'),
            'bn_short_description'=>$request->input('bn_short_description'),
            'image'=>uploadImage($request),
            'order'=>$request->input('order') ?? 0,
            'en_btn_name'=>$request->input('en_btn_name') ?? 'Read More...',
            'bn_btn_name'=>$request->input('bn_btn_name') ?? 'আরো পড়ুন...',
            'url'=>$request->input('url') ?? '#',
        ]);
        toast('Slider Created ...... :)','success');
        return redirect()->route('admin.slider.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        return $slider;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('backend.admin.pages.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {

        $slider->update([
            'users_id'=>auth()->id(),
            'en_title'=>$request->input('en_title'),
            'bn_title'=>$request->input('bn_title'),
            'slug'=>Str::slug($request->input('en_title')),
            'en_short_description'=>$request->input('en_short_description'),
            'bn_short_description'=>$request->input('bn_short_description'),
            'image'=>uploadImage($request,$slider),
            'order'=>$request->input('order') ?? 0,
            'en_btn_name'=>$request->input('en_btn_name') ?? 'Read More...',
            'bn_btn_name'=>$request->input('bn_btn_name') ?? 'আরো পড়ুন...',
            'url'=>$request->input('url') ?? '#',
        ]);

        toast('Slider Updated ...... :)','success');
        return redirect()->route('admin.slider.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        @unlink($slider->image);
        $slider->delete();
        toast('Slider Deleted Success......... :)','success');
        return redirect()->route('admin.slider.index');
    }
}
