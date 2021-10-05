<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospitals extends Model
{
    use HasFactory;

    public function user() {
        return $this->morphOne(User::class, 'userable');
    }

    public function doctors() {
        return $this->hasMany(Doctors::class, 'hospital_id');
    }
}
