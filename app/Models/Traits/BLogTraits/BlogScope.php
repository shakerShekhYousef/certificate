<?php

namespace App\Models\Traits\BLogTraits;

trait BlogScope
{
    public function scopeSearch($query,$search){
        return $query->where('title_en','like','%'.$search.'%');
    }
    public function scopeSearchAr($query,$search){
        return $query->where('title_ar','like','%'.$search.'%');
    }
    public function scopeDate($query,$date){
        return $query->where('created_at','like','%'.$date.'%');
    }
}
