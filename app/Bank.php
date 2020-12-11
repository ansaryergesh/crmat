<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $fillable = ['bank_name'];

    public function banks() {
        return $this->belongsTo(BankcreditInfo::class);
    }

}

