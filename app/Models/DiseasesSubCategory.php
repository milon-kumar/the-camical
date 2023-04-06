<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiseasesSubCategory extends Model
{
    use HasFactory;

    protected $table = "diseases_sub_categories";
    protected $guarded = ['id'];

    public function diseasesCategory()
    {
        return $this->belongsTo(DiseasesCategory::class,'diseases_categories_id');
    }

    public function disease()
    {
        return $this->belongsTo(Diseases::class,'diseases_sub_categories_id');
    }
}
