<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group_ru extends Model
{
    public function kafedra(){
        return $this->belongsTo(Kafedra_ru::class, 'caf_id', 'id');
    }

    public function group(){
        return $this->hasMany(User::class, 'id', 'group_id');
    }
    public function level(){
        return $this->hasOne(Group_level_ru::class, 'id', );
    }
    use HasFactory;
}
