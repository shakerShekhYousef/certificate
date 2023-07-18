<?php

namespace App\Models;

use App\Models\Traits\CommentTraits\CommentRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory,CommentRelationship;
}
