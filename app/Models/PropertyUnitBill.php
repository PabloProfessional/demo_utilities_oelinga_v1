<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyUnitBill extends Model
{
    use HasFactory;

    public function item() {
        return $this->hasMany('\App\Models\PropertyUnitBillItem','property_bill_id');
    }

    public function units_consumed() {

    }
}
