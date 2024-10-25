<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
    use HasFactory;
    protected $table = 'animals';
    public function owner()
    {
        return $this->belongsTo(Owners::class);
    }
    public function photo()
    {
        return $this->hasOne(Images::class, 'id');
    }
}
