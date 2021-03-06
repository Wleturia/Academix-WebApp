<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCourseStatus extends Model
{
    protected $fillable = [
        'id', 'status',
    ];
    protected $hidden = [
        'description',
    ];
    
    public function UserCourse() 
    {
        return $this->belongsToMany('UserCourse')->withTimestamps();
    }
}
