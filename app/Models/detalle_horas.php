<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalle_horas extends Model
{
    use HasFactory;
    public function Horas(){
        return $this->belongsTo(horas::class);
    }
    public function Dias(){
        return $this->belongsTo(dias::class);
    }
}
