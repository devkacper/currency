<?php

namespace Tests\Unit;

use App\Helpers\Api\NBPHelper;
use Tests\TestCase;

class CurrencyTest extends TestCase
{
    /**
     * Test of storing/update received NBP API data in database.
     *
     * @return void
     */
    public function testCurrencyStore()
    {
        $currencies = NBPHelper::data()[0]['rates'];

        $randomCurrency = $currencies[rand(0, 33)];

        $response = $this->post('/api/currencies/store');

        $this->assertDatabaseHas('currencies', [
            'name'          => $randomCurrency['currency'],
            'currency_code' => $randomCurrency['code'],
            'exchange_rate' => round($randomCurrency['mid'], 2),
        ]);

        $response->assertStatus(200);
    }
}
