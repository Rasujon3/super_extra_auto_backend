<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location_url'
    ];
    public function contactInfos()
    {
        return $this->hasMany(BranchContactInfo::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
