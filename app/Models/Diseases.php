<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diseases extends Model
{
    use HasFactory;

    protected $table = "diseases";
    protected $guarded =['id'];

    public function diseasesCategory()
    {
        return $this->belongsTo(DiseasesCategory::class,'diseases_categories_id');
    }

    public function diseasesSubCategory()
    {
        return $this->belongsTo(DiseasesSubCategory::class,'diseases_sub_categories_id');
    }
}
