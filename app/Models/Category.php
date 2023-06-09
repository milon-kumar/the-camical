<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table ='categories';
    protected $guarded =['id'];


    public function subCategories()
    {
        return $this->hasMany(SubCategory::class,'categories_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class,'categories_id');
    }
}
