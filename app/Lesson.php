<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = "lessons";
    protected $guarded = [];

    public function offlineapplys()
    {
        return $this->belongsTo(Offlineapplys::class);
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }

    public function offlinecourse()
    {
        return $this->belongsTo(Offlinecourses::class);
    }

    public function course()
    {
        return $this->hasMany(Offlinecourses::class);
    }
}
