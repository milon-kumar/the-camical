<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiseasesCategory extends Model
{
    use HasFactory;

    protected $table = "diseases_categories";

    protected $guarded =['id'];

    public function diseasesSubCategories()
    {
        return $this->hasMany(DiseasesSubCategory::class,'diseases_categories_id');
    }
}
