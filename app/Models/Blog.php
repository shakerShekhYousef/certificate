<?php

namespace App\Models;

use App\Models\Traits\BLogTraits\BlogRelationship;
use App\Models\Traits\BLogTraits\BlogScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory,BlogRelationship,BlogScope;

    protected $guarded = [];
}
