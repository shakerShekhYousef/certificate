<?php

namespace App\Models\Traits\UserTraits;

use App\Models\Role;

trait UserRelationship
{
    public function role(){
        return $this->belongsTo(Role::class);
    }
}
