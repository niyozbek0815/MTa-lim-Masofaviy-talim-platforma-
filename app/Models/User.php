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
    public function group_uz(){
        return $this->belongsTo(Group_uz::class, 'group_id', 'id');
    }
    public function group_ru(){
        return $this->belongsTo(Group_ru::class, 'group_id', 'id');
    }
    public function group_en(){
        return $this->belongsTo(Group_en::class, 'group_id', 'id');
    }
    public function kafedra_uz(){
        return $this->belongsTo(Kafedra_uz::class, 'kafedra_id', 'id');
    }
    public function kafedra_ru(){
        return $this->belongsTo(Kafedra_ru::class, 'kafedra_id', 'id');
    }
    public function kafedra_en(){
        return $this->belongsTo(Kafedra_en::class, 'kafedra_id', 'id');
    }
    public function cource_response(){
        return $this->belongsTo(Cource_responce::class, 'user_id', 'id');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'group_id',
        'parol',
        "roll_id",
        'password',
        'login'
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
    ];
    protected $attributes = [
        'roll_id' => '1',
        'image'=>"user-logo.png",
    ];
}
