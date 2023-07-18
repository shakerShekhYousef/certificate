<?php

namespace App\Models;

use App\Models\Traits\CertificateTraits\CertificateRelationship;
use App\Models\Traits\CertificateTraits\CertificateScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory,CertificateRelationship,CertificateScope;

    protected $guarded = [];
}
