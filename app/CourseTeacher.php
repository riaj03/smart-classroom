<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseTeacher extends Model
{
    protected $fillable = ['course_id', 'teacher_id'];
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
