<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Diseases;
use App\Models\DiseasesCategory;
use App\Models\DiseasesSubCategory;
use Illuminate\Http\Request;

class DiseasesController extends Controller
{
    public function diseasesSubcategory($slug)
    {
        $p_category = DiseasesCategory::where('slug',$slug)->first(['id','en_name','bn_name','slug']);
        $categories = DiseasesCategory::where('status',1)->get(['id','en_name','bn_name','slug']);
        $s_category =  DiseasesSubCategory::where('diseases_categories_id',$p_category->id)->get(['id','en_name','bn_name','image','slug','en_description','bn_description']);
        return view('frontend.pages.diseases.subcategories',compact('s_category','p_category','categories'));
    }

    public function subcategoryDiseases($slug)
    {
        $subCategory = DiseasesSubCategory::where('slug',$slug)->first(['id','slug','en_name','bn_name','diseases_categories_id']);
        $categories = DiseasesCategory::where('status',1)->get(['id','en_name','bn_name','slug']);
        $diseases = Diseases::where('diseases_sub_categories_id',$subCategory->id)->get();
        return view('frontend.pages.diseases.diseases',compact('diseases','subCategory','categories'));
    }

    public function diseases($slug)
    {
        $disease = Diseases::with(['diseasesCategory','diseasesSubCategory'])->where('slug',$slug)->first();
        $othersDiseases = Diseases::where('diseases_sub_categories_id',$disease->diseases_sub_categories_id)->get();
        return view('frontend.pages.diseases.diseases_details',compact('disease','othersDiseases'));
    }
}
