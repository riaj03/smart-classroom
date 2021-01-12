<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['coures_title', 'course_code', 'type', 'batch_id'];
    public function batch()
    {
        return $this->belongsTo(Batch::class, 'batch_id');
    }
}
