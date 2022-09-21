<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyUnit extends Model
{
    use HasFactory;

    public function property() {
        return $this->belongsTo('\App\Models\Property');
    }

    public function tenant() {
        return $this->hasOne('\App\Models\PropertyUnitTenant');
    }

    public function metre() {
        return $this->hasMany('\App\Models\PropertyUnitMetre');
    }


}
