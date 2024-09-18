<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fasilitas extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'nama',
        'photo',
    ];

    protected $casts = [
        'uuid' => 'string',
        'nama' => 'string',
        'photo' => 'string',
    ];
}