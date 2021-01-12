<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\FilterByUser;

class Student extends Model
{
    protected $fillable = ['user_id', 'current_batch_id', 'status', 'role'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function batch()
    {
        return $this->belongsTo(Batch::class, 'current_batch_id');
    }
    public function studentcourse()
    {
        return $this->belongsTo(Course::class);
    }
}
