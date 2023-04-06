<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function categoryProduct($slug)
    {
        $category = Category::with(['products','subCategories'])->where('slug',$slug)->first();
        return view('frontend.pages.product.category',compact('category'));
    }

    public function subcategoryProduct($slug)
    {
        $sub_category = SubCategory::with(['products','category'])->where('slug',$slug)->first();
        return view('frontend.pages.product.sub_category',compact('sub_category'));
    }

    public function product($slug)
    {
         $product = Product::with(['category','subCategory'])->where('slug',$slug)->first();
         return view('frontend.pages.product.single_product',compact('product'));
    }

    public function listProduct()
    {
        $products =  Product::where('status',1)->get();
        return view('frontend.pages.product.product_list',compact('products'));
    }
}
