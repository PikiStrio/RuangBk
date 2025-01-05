<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function transaction()
    {
        return $this->hasOne(Transaksi::class);
    }
}
