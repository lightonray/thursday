<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\TradingSymbol;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $symbols = [
            ['symbol' => 'BTC-PERPETUAL'],
            ['symbol' => 'ETH-PERPETUAL'],
            ['symbol' => 'XRP-PERPETUAL'],
            ['symbol' => 'LTC-PERPETUAL'],
            ['symbol' => 'ADA-PERPETUAL'],
            ['symbol' => 'LINK-PERPETUAL'],
            ['symbol' => 'BCH-PERPETUAL'],
            ['symbol' => 'DOT-PERPETUAL'],
            ['symbol' => 'UNI-PERPETUAL'],
        ];

        foreach ($symbols as $symbol) {
            TradingSymbol::create($symbol);
        }
    }
}
