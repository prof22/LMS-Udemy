<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Instructor extends Authenticatable implements JWTSubject
{
    use Notifiable;

    protected $guard = 'instructor';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name','position','address','phone','course','email', 'password', 'photo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
    public function course()
    {
        return $this->hasMany(Offlinecourses::class);
    }

    public function lesson()
    {
        return $this->hasMany(Lesson::class);
    }

    public function enrolls()
    {
        return $this->hasMany(Enroll::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
