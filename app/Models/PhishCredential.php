<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhishCredential extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'ip_address',
    ];
}
