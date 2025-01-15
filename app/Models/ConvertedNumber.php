<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ConvertedNumber extends Model
{
    protected $table = 'converted_numbers';

    protected $fillable = [
        'number',
        'roman_numerals'
    ];

    public function scopeTopTen(Builder $query): Builder
    {
        return $query->select('roman_numerals', 'number')
            ->orderBy('number', 'desc')
            ->groupBy('number', 'roman_numerals')
            ->take(10);
    }
}

