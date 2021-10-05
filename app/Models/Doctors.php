<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    use HasFactory;

    public function user() {
        return $this->morphOne(User::class, 'userable');
    }

    public function hospital() {
        return $this->belongsTo(Hospitals::class);
    }
}
