<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $fillable = [
        'id', 'name', 'currency_code', 'exchange_rate'
    ];
}
