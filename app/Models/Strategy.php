<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Strategy extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'options'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_strategies');
    }
}
