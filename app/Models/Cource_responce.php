<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cource_responce extends Model
{
    use HasFactory;
    public function teacher(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    protected $fillable = ['name','content','user_id'];

}
