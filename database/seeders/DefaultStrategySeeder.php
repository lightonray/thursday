<?php

namespace Database\Seeders;

use App\Models\Strategy;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DefaultStrategySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $defaultOptions = [
            'buy_threshold' => 0.05, // Example: Buy when price drops by 5%
            'sell_threshold' => 0.05, // Example: Sell when price rises by 5%
            'stop_loss' => 0.1, // Example: Stop loss at 10%
            'take_profit' => 0.2, // Example: Take profit at 20%
            // Add more options as needed
        ];

        // Convert options array to JSON
        $jsonOptions = json_encode($defaultOptions);

        // Create a new strategy for BTC-PERPETUAL with default options
        Strategy::create([
            'name' => 'BTC-PERPETUAL Default Strategy',
            'options' => $jsonOptions,
        ]);

    }
}
