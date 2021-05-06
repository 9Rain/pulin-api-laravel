<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessSubcategory extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(BusinessCategory::class);
    }

    public function businesses()
    {
        return $this->belongsToMany(Business::class);
    }
}
