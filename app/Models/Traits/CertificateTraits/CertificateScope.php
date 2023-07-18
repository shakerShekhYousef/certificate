<?php

namespace App\Models\Traits\CertificateTraits;

trait CertificateScope
{
    public function scopeCla($query,$class){
        return $query->where('class','like','%'.$class.'%');
    }

    public function scopeRoll($query,$roll){
        return $query->where('roll_no','like','%'.$roll.'%');
    }
}
