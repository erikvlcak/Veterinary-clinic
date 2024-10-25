<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnerModel extends Model
{
    use HasFactory;
    public function animal()
    {
        return $this->hasMany(AnimalModel::class);
    }
}
