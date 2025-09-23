<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupContent extends Model
{
    use HasFactory;
    protected $fillable = [
        'group_id',
        'title',
        'description',
        'image',
        'website',
        'reverse'
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
