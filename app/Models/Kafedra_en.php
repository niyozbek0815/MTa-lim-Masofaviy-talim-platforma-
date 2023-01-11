<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kafedra_en extends Model
{
    public function group_uz(){
        return $this->hasMany(Group_uz::class, 'id', 'caf_id');
    }

    public function group_ru(){
        return $this->hasMany(Group_ru::class, 'id', 'caf_id');
    }

    public function group_en(){
        return $this->hasMany(Group_en::class, 'id', 'caf_id');
    }
    public function kafedra(){
        return $this->hasMany(User::class, 'id', 'kafedra_id');
    }
    use HasFactory;
}
