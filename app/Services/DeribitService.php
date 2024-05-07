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
            'base_uri' => 'https://test.deribit.com/api/v2/',
            'timeout'  => 2.0,
            'verify' => false
        ]);
    }

    public function startBot(Strategy $strategy, $symbol)
    {
        $options = json_decode($strategy->options, true);
        
        $user = auth()->user();
        $exchangeConnector = $user->exchangeConnector()->first();

        // Get user's API keys
        $apiKey = $exchangeConnector->public_key;
        $apiSecret = $exchangeConnector->private_key;

        $params = [
            'instrument_name' => $symbol,
            'amount' => $options['position_size'],
            'type' => $options['entry_strategy']['order_type'],
            'price' => $options['entry_strategy']['entry_price'] ?? null,
            'label' => 'market0000234'
        ];

        // Prepare the request
        $request_json = json_encode([
            'jsonrpc' => '2.0',
            'id' => 5275,
            'method' => 'private/' . ($options['position_type'] === 'long' ? 'buy' : 'sell'),
            'params' => $params
        ]);

        // Generate a timestamp and nonce
        $timestamp = round(microtime(true) * 1000);
        $nonce = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789"), 0, 8);

        // Create the data to sign
        $request_data = strtoupper('POST') . "\n/api/v2/private/" . ($options['position_type'] === 'long' ? 'buy' : 'sell') . "\n" . $request_json . "\n";
        $string_to_sign = $timestamp . "\n" . $nonce . "\n" . $request_data;

        // Generate the HMAC signature
        $signature = hash_hmac('sha256', $string_to_sign, $apiSecret);

        // Send request to Deribit API to open a position
        $response = $this->client->request('POST', "private/" . ($options['position_type'] === 'long' ? 'buy' : 'sell'), [
            'body' => $request_json,
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => "deri-hmac-sha256 id=$apiKey,ts=$timestamp,nonce=$nonce,sig=$signature"
            ]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    public function stopBot(Strategy $strategy, $symbol)
    {
        $options = json_decode($strategy->options, true);
        
        $user = auth()->user();
        $exchangeConnector = $user->exchangeConnector()->first();
    
        // Get user's API keys
        $apiKey = $exchangeConnector->public_key;
        $apiSecret = $exchangeConnector->private_key;
    
        $params = [
            'instrument_name' => $symbol,
            'amount' => $options['position_size'],  // Assuming you might want to specify how much of the position to close
            'type' => 'market',  // Typically, stopping a bot might involve a market order to close the position immediately
        ];
    
        // Prepare the request
        $request_json = json_encode([
            'jsonrpc' => '2.0',
            'id' => 5275,
            'method' => 'private/sell',  // Assuming a 'sell' to close a long position. Adjust according to actual needs.
            'params' => $params
        ]);
    
        // Generate a timestamp and nonce
        $timestamp = round(microtime(true) * 1000);
        $nonce = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789"), 0, 8);
    
        // Create the data to sign
        $request_data = strtoupper('POST') . "\n/api/v2/private/sell\n" . $request_json . "\n";
        $string_to_sign = $timestamp . "\n" . $nonce . "\n" . $request_data;
    
        // Generate the HMAC signature
        $signature = hash_hmac('sha256', $string_to_sign, $apiSecret);
    
        // Send request to Deribit API to close the position
        $response = $this->client->request('POST', 'private/sell', [
            'body' => $request_json,
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => "deri-hmac-sha256 id=$apiKey,ts=$timestamp,nonce=$nonce,sig=$signature"
            ]
        ]);
    
        return json_decode($response->getBody()->getContents(), true);
    }
}

