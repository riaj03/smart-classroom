<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\FilterByUser;
class StudentCourse extends Model
{
    protected $fillable = ['course_id', 'student_id', 'status'];
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
