<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyUnitMetreReading extends Model
{
    use HasFactory;

    public function metre() {
        return $this->belongsTo('\App\Models\PropertyUnitMetre');
    }
}
