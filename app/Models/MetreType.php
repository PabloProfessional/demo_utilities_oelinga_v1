<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetreType extends Model
{
    use HasFactory;

    public function metre() {
        return $this->hasMany('\App\Models\Metre','metre_type_id');
    }
}
