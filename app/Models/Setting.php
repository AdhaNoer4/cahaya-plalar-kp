<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'whatsapp',
        'whatsapp_formatted',
        'address',
        'jam_operasional_weekday',
        'jam_operasional_weekend'
    ];
}
