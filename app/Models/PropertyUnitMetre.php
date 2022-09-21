<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyUnitMetre extends Model
{
    use HasFactory;

    public function property_unit() {
        return $this->belongsTo('\App\Models\PropertyUnit');
    }

    public function metre_type() {
        return $this->belongsTo('\App\Models\MetreType');
    }

    public function electricity() {
        return $this->hasMany('\App\Models\PropertyUnitElectricityMetreReading','metre_id')->orderBy('created_at','desc');
    }

    public function water() {
        return $this->hasMany('\App\Models\PropertyUnitWaterMetreReading','metre_id')->orderBy('created_at','desc');
    }

    public function bill() {
        return $this->hasMany('\App\Models\PropertyUnitBill','property_unit_metre_id')->orderBy('created_at','desc');
    }

}
