<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    protected $fillable = [
        'poli_code',
        'name',
        'description',
        'is_active',
    ];

    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
}