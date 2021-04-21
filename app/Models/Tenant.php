<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Tenant extends Model
{
    protected $fillable = ['name', 'logo'];

    public static function boot()
    {
        parent::boot();
        self::creating(function($model){
            $model->uuid = Uuid::generate(4);
        });
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
