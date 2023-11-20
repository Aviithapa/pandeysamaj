<?php

namespace App\Models;

use App\Infrastructure\Traits\HasFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CommunityMember extends Model
{
    use HasFactory, HasFilter, SoftDeletes;

    protected $fillable = [
        'citizenship',
        'name',
        'occupation',
        'parent_id',
        'email',
        'phone_number',
        'mother_id',
        'marital_status',
        'spouse_id'
    ];

    public function mother()
    {
        return $this->belongsTo(CommunityMember::class, 'mother_id');
    }

    public function father()
    {
        return $this->belongsTo(CommunityMember::class, 'parent_id');
    }

    public function spouse()
    {
        return $this->belongsTo(CommunityMember::class, 'spouse_id');
    }

    public function children()
    {
        return $this->hasMany(CommunityMember::class, 'parent_id');
    }
}
