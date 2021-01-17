<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded;


    // relation between course and student(user) M-N
    public function student()
    {
        return $this->belongsToMany(User::class,"student_courses");
    }

    // relation between course and video 
    function video(){
        return  $this->hasMany(CourseVideo::class);
    }

    // relation between course and Category M-N
    public function Category()
    {
        return $this->belongsToMany(Category::class,"category_courses");
    }

    // relation between course and instructor(user) M-1
    public function instructor(){
       
        return  $this->belongsTo(User::class);
    }
}
