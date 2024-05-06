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
            'instrument' => 'BTC-PERPETUAL',
            'position_type' => 'long',
            'position_size' => 100, 
            'entry_strategy' => [
                'type' => 'limit',
                'entry_price' => null,
                'order_type' => 'market' 
            ],
            'exit_strategy' => [
                'take_profit' => [
                    'enabled' => true,
                    'price' => 50000
                ],
                'stop_loss' => [
                    'enabled' => true,
                    'price' => 45000 
                ]
            ],
            'risk_management' => [
                'max_drawdown_percent' => 10,
                'adjust_position_size' => true  
            ],
            'leverage' => 10 
        ];


        $jsonOptions = json_encode($defaultOptions);

        Strategy::create([
            'name' => 'BTC-PERPETUAL Default Strategy',
            'options' => $jsonOptions,
        ]);

    }
}


