<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'phone_1',
        'phone_2',
        'email',
        'address',
        'fb_link',
        'twitter_link',
        'google_link',
        'insta_link',
        'logo',
    ];
}
