<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    public function property_group() {
        return $this->belongsTo('\App\Models\PropertyGroup','property_group_id');
    }

    public function property_type() {
        return $this->belongsTo('\App\Models\PropertyType','property_type_id');
    }

    public function metre() {
        return $this->hasMany('\App\Models\Metre');
    }

    public function unit() {
        return $this->hasMany('\App\Models\PropertyUnit');
    }
}
