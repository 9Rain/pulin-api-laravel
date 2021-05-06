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

    public function category()
    {
        return $this->belongsToMany(BusinessCategory::class);
    }

    public function subcategory()
    {
        return $this->belongsToMany(BusinessSubCategory::class);
    }

    public function socialMedias() 
    {
        return $this->hasMany(SocialMedia::class);
    }

    public function staff() 
    {
        return $this->hasMany(BusinessPerson::class);
    }

    public function schedule() 
    {
        return $this->hasMany(BusinessSchedule::class);
    }
}
