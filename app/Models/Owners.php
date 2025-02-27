<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owners extends Model
{
    use HasFactory;
    protected $table = 'owners';
    public function animals()
    {
        return $this->hasMany(Animals::class, 'owner_id');
    }
}
