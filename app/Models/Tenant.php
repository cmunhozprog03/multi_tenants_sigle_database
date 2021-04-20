<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $fillable = ['name', 'logo'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
