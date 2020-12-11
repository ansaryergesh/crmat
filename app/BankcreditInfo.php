<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankcreditInfo extends Model
{
    public function bankcreditinfos() {
        return $this->belongsTo(Bank::class);
    }
}
