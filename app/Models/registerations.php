<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registerations extends Model
{

    protected $guarded = [];

    public function user() {
        return $this->hasOne(User::class);
    }

    public function eventsRegistered() {
        $this->hasMany(events::class);
    }
}
