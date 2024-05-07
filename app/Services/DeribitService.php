<?php

namespace App\Services;

use GuzzleHttp\Client;
use App\Models\User;
use App\Models\ExchangeConnector;
use App\Models\Strategy;

class DeribitService
{
    protected $client;
    protected $exchangeConnector;

    public function __construct(ExchangeConnector $exchangeConnector)
    {
        $this->exchangeConnector = $exchangeConnector;
        $this->client = new Client([
            'base_uri' => 'https://test.deribit.com/api/v2/',
            'timeout'  => 2.0,
            'verify' => false
        ]);
    }

    public function startBot($strategy, $symbol)
    {
        $options = json_decode($strategy->options, true);
        
        $apiKey = $this->exchangeConnector->publicKey; 
        $apiSecret = $this->exchangeConnector->privateKey;
        dd($apiKey,$apiSecret);
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
