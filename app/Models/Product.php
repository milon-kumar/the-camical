<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table ="products";
    protected $guarded =['id'];

    public function category()
    {
        return $this->belongsTo(Category::class,'categories_id');
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class,'sub_categories_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'users_id');
    }
}
