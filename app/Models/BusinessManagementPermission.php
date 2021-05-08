<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessManagementPermission extends Model
{
    use HasFactory;

    public function businessesManagementRoles()
    {
        return $this->belongsToMany(BusinessManagementRole::class);
    }
}
