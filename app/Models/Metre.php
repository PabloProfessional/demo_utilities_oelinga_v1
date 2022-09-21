<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metre extends Model
{
    use HasFactory;

    public function property() {
        return $this->belongsTo('\App\Models\Property');
    }

    public function metre_type() {
        return $this->belongsTo('\App\Models\MetreType');
    }

    public function electricity() {
        return $this->hasMany('\App\Models\ElectricityMetreReading');
    }

    public function water() {
        return $this->hasMany('\App\Models\WaterMetreReading');
    }

    public function solar() {
        return $this->hasMany('\App\Models\SolarPanelMetreReading');
    }

    public function generator() {
        return $this->hasMany('\App\Models\GeneratorMetreReading');
    }
}
