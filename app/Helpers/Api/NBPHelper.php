<?php

namespace App\Helpers\Api;

use Illuminate\Support\Facades\Http;

class NBPHelper
{
    public static function data()
    {
        return Http::get(config('api.nbp.endpoint'))[0]['rates'];
    }
}
