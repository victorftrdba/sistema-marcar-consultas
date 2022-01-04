<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'patient_id',
    ];

    public function patient()
    {
        $this->belongsTo(Patient::class);
    }
}