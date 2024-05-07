<?php

namespace App\Services;

use GuzzleHttp\Client;
use App\Models\User;
use App\Models\Strategy;

class DeribitService
{
    /**
     * The HTTP client instance.
     *
     * @var \GuzzleHttp\Client
     */
    protected $client;
    /**
     * The authenticated user instance.
     *
     * @var \App\Models\User
     */
    protected $user;

    /**
     * Create a new DeribitService instance.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
        $this->client = new Client([
            'base_uri' => 'https://test.deribit.com/api/v2/',
            'timeout'  => 2.0,
            'verify' => false
        ]);
    }

    /**
     * Start a bot for the given strategy and symbol.
     *
     * @param  \App\Models\Strategy  $strategy
     * @param  string  $symbol
     * @return array
     */
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

        $request_json = json_encode([
            'jsonrpc' => '2.0',
            'id' => 5275,
            'method' => 'private/' . ($options['position_type'] === 'long' ? 'buy' : 'sell'),
            'params' => $params
        ]);

        $timestamp = round(microtime(true) * 1000);
        $nonce = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789"), 0, 8);

        $request_data = strtoupper('POST') . "\n/api/v2/private/" . ($options['position_type'] === 'long' ? 'buy' : 'sell') . "\n" . $request_json . "\n";
        $string_to_sign = $timestamp . "\n" . $nonce . "\n" . $request_data;

        $signature = hash_hmac('sha256', $string_to_sign, $apiSecret);

        $response = $this->client->request('POST', "private/" . ($options['position_type'] === 'long' ? 'buy' : 'sell'), [
            'body' => $request_json,
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => "deri-hmac-sha256 id=$apiKey,ts=$timestamp,nonce=$nonce,sig=$signature"
            ]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

     /**
     * Stop a bot for the given strategy and symbol.
     *
     * @param  \App\Models\Strategy  $strategy
     * @param  string  $symbol
     * @return array
     */
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
            'amount' => $options['position_size'], 
            'type' => 'market',  
        ];
    
        // Prepare the request
        $request_json = json_encode([
            'jsonrpc' => '2.0',
            'id' => 5275,
            'method' => 'private/sell', 
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


    /**
     * Fetch the account summary of the user from Deribit.
     *
     * @param  string  $currency
     * @return array
     */
    public function getAccountSummary($currency = 'BTC')
    {
        $user = auth()->user();
        $exchangeConnector = $user->exchangeConnector()->first();

        $apiKey = $exchangeConnector->public_key;
        $apiSecret = $exchangeConnector->private_key;

        $params = [
            'currency' => $currency
        ];

        $request_json = json_encode([
            'jsonrpc' => '2.0',
            'id' => 5276, 
            'method' => 'private/get_account_summary',
            'params' => $params
        ]);

        // Generate a timestamp and nonce
        $timestamp = round(microtime(true) * 1000);
        $nonce = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789"), 0, 8);

        // Create the data to sign
        $request_data = strtoupper('POST') . "\n/api/v2/private/get_account_summary\n" . $request_json . "\n";
        $string_to_sign = $timestamp . "\n" . $nonce . "\n" . $request_data;

        // Generate the HMAC signature
        $signature = hash_hmac('sha256', $string_to_sign, $apiSecret);

        // Send request to Deribit API to get the account summary
        $response = $this->client->request('POST', 'private/get_account_summary', [
            'body' => $request_json,
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => "deri-hmac-sha256 id=$apiKey,ts=$timestamp,nonce=$nonce,sig=$signature"
            ]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

}

