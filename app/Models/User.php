<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // create a relationship with the model post to users
    // public function posts()
    // {
    //     return $this->hasMany(Post::class); 
    // }   

    // public function getRouteKeyName()
    // {
    //     return 'name';      

    // }
    // public function getRouteKey()
    // {
    //     return $this->name;
    // }   

    // public function getAvatarAttribute($value)
    // {
    //     return $value ?? asset('images/avatar.png');        
    // }   

    // public function getNameAttribute($value)
    // {
    //     return ucfirst($value); 
    // }

    // public function getJWTIdentifier()
    // {
    //     return $this->getKey();
    // }   

    // public function getJWTCustomClaims()
    // {
    //     return [];  
    // }   

    // public function getAuthPassword()
    // {
    //     return $this->password;
    // }

    // public function setPasswordAttribute($value)
    // {
    //     $this->attributes['password'] = bcrypt($value);     
    // }

    // public function getCreatedAtAttribute($value)
    // {
    //     return Carbon::parse($value)->format('d-m-Y');
    // }   

    // // create a relationship with the model  post to comment to user 
    // public function comments()
    // {
    //     return $this->hasMany(Comment::class);
    // }

}
