<?php

namespace App\Models;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExchangeConnector extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'exchange_name', 'public_key', 'private_key'];

    public function getPublicKeyAttribute($value)
    {
        return $value ? Crypt::decryptString($value) : null;
    }

    public function setPublicKeyAttribute($value)
    {
        $this->attributes['public_key'] = Crypt::encryptString($value);
    }

    public function getPrivateKeyAttribute($value)
    {
        return $value ? Crypt::decryptString($value) : null;
    }

    public function setPrivateKeyAttribute($value)
    {
        $this->attributes['private_key'] = Crypt::encryptString($value);
    }

    public function bots()
    {
        return $this->hasMany(Bot::class, 'exchange_connector_id');
    }
}
