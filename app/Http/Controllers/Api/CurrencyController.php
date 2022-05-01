<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Api\NBPHelper;
use App\Http\Controllers\Controller;
use App\Models\Currency;
use Illuminate\Support\Str;

class CurrencyController extends Controller
{
    /**
     * Create or update data in database from NBP API response.
     *
     * @return array
     */
    public function store()
    {
        try {
            $rates = NBPHelper::data()[0]['rates'];

            foreach($rates as $rate)
            {
                Currency::updateOrCreate(
                    ['name' => $rate['currency'], 'currency_code' => $rate['code']],
                    [
                        'id' => Str::uuid()->toString(),
                        'name' => $rate['currency'],
                        'currency_code' => $rate['code'],
                        'exchange_rate' => round($rate['mid'], 2)
                    ]
                );
            }

            return ['status' => 200, 'message' => __('alerts.success')];
        } catch (\Exception $e) {
            return ['status' => 500, 'message' => $e->getMessage()];
        }

    }
}
