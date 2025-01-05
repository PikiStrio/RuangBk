<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    public function mentor() {
        return $this->belongsTo(User::class, 'mentor_id');
    }

    public function students() {
        return $this->belongsToMany(User::class, 'kelas_user');
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }
    public function reviews() {
        return $this->hasMany(Ulasan::class);
    }
}
