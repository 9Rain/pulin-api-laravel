<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessCategory extends Model
{
    use HasFactory;

    public function businesses()
    {
        return $this->belongsToMany(Business::class);
    }

    public function subcategories()
    {
        return $this->hasMany(BusinessSubcategory::class);
    }
}
