<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    public function location()
    {
        return $this->morphOne(Location::class, 'owner');
    }

    public function contacts()
    {
        return $this->morphMany(Contact::class, 'owner');
    }
}
