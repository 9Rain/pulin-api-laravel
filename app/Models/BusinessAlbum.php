<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessAlbum extends Model
{
    use HasFactory;

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function images()
    {
        return $this->hasMany(BusinessImage::class);
    }
}
