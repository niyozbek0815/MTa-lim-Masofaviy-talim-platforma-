<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group_level_ru extends Model
{
    public function group(){
        return $this->belongsTo(Group_ru::class, 'id', 'level_id');
    }
    use HasFactory;
}
