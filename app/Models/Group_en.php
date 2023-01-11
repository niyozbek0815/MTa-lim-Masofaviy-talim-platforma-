<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group_en extends Model
{
    public function kafedra(){
        return $this->belongsTo(Kafedra_en::class, 'caf_id', 'id');
    }

    public function group(){
        return $this->hasMany(User::class, 'id', 'group_id');
    }
    use HasFactory;
}
