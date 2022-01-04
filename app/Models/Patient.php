<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cpf',
        'email',
        'zipcode',
        'address',
        'number',
    ];

    public function phones()
    {
        $this->hasMany(Phone::class);
    }
}