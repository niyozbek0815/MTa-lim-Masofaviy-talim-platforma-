<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group_level_en extends Model
{
    use HasFactory;

    public function group(){
        return $this->belongsTo(Group_en::class, 'id', 'level_id');
    }

}
