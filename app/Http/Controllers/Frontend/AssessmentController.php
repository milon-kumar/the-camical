<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\UserAssessment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssessmentController extends Controller
{
    public function singleAssisment($slug)
    {
        $category =  Category::with(['subCategories','subCategories.answers','subCategories.questions'])->where('slug',$slug)->first();
        return view('frontend.pages.assessment.single_assessment',compact('category'));
    }

    public function submitAssessment(Request $request)
    {
        if (Auth::check()){
            if (Auth::user()->type == 'user'){
                $sum = 0;
                $data = $request->except('_token','categories_id');
                foreach ($data as $key => $value) {
                    $sum = $sum + $value;
                }
                UserAssessment::create([
                    'users_id'=>Auth::id(),
                    'categories_id'=>$request->input('categories_id'),
                    'total_mark'=>$sum,
                ]);
                toast('Your Assessment Submitted...... :)','success');
                return redirect()->back();
            }else{
                toast('Admin Dont Submit Any Assessment','warning');
                return redirect()->back();
            }
        }else{
            toast('Please Login First For Submit The Assessment','warning');
            return redirect()->route('login');
        }
    }
}
