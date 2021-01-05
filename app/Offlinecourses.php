<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offlinecourses extends Model
{
    protected $table = "offlinecourse";
    protected $guarded = [];

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }

    public function lessons()
    {
        return $this->belongsTo(Lesson::class);
    }


    public function lesson()
    {
        return $this->hasMany(Lesson::class);
    }

    public function review()
    {
        return $this->reviews()->whereUserId(auth()->user()->id)->whereCourseId($this->id)->first();
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function getAverageAttribute()
    {
        return (int)$this->reviews()->where('user_id', auth()->user()->id)->avg('rating');
    }
}
