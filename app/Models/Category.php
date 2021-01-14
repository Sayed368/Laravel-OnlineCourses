<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded;

    //relation between course and category M-N
    public function course()
    {
        return $this->belongsToMany(Course::class,"category_courses");
    }
}
