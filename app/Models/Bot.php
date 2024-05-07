<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bot extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'user_id', 'exchange_connector_id', 'strategy_id', 'symbol'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function exchangeConnector()
    {
        return $this->belongsTo(ExchangeConnector::class);
    }

    public function strategy()
    {
        return $this->belongsTo(Strategy::class);
    }

    public function bots()
    {
        return $this->hasMany(Bot::class);
    }
}
