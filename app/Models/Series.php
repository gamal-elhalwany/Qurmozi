<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Season;

class Series extends Model
{
    use HasFactory;
    protected $gaurded = [];

    public function seasons () {
        return $this->hasMany(Season::class);
    }
}
