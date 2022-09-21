<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyGroup extends Model
{
    use HasFactory;

    public function property() {
        return $this->hasMany('\App\Models\Property','property_group_id');
    }
}
