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
        'age',
        'zipcode',
        'address',
        'number',
    ];

    public function phones()
    {
        return $this->hasMany(Phone::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}