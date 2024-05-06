<?php

namespace App\Services;

use GuzzleHttp\Client;
use App\Models\User;
use App\Models\Strategy;

class DeribitService
{
    protected $client;
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
        $this->client = new Client([
            'base_uri' => 'https://www.deribit.com/api/v2/',
            'timeout'  => 2.0,
        ]);
    }

    public function startBot(Strategy $strategy, $symbol)
    {
        $options = json_decode($strategy->options, true);

        // Get user's API keys
        $apiKey = $this->user->publicKey; 
        $apiSecret = $this->user->privateKey;

        $params = [
            'instrument_name' => $symbol,
            'amount' => $options['position_size'],
            'type' => $options['entry_strategy']['order_type'],
            'price' => $options['entry_strategy']['entry_price'] ?? null
        ];

        $action = $options['position_type'] === 'long' ? 'buy' : 'sell';

        // Send request to Deribit API to open a position
        $response = $this->client->request('POST', "private/$action", [
            'json' => $params,
            'headers' => [
                'Authorization' => "Bearer {$apiKey}"
            ]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    public function stopBot($positionId)
    {
        $apiKey = $this->user->publicKey;

        $response = $this->client->request('POST', 'private/sell', [
            'json' => [
                'instrument_name' => $positionId,
                'type' => 'market',
            ],
            'headers' => [
                'Authorization' => "Bearer {$apiKey}"
            ]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}

