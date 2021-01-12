<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Folder
 *
 * @package App
 * @property string $name
 * @property string $created_by
*/
class Folder extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','course_id', 'created_by_id'];
    
    

    /**
     * Set to null if empty
     * @param $input
     */
    public function setCreatedByIdAttribute($input)
    {
        $this->attributes['created_by_id'] = $input ? $input : null;
    }
    
    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
    
}
