<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'email', 'email_2',
        'description',
        'address',
        'phone', 'phone_2',
        'logo',
        'favicon',
        'facebook',
        'twitter',
        'whatsapp',
        'instagram',
        'office_hour',
        'google_analytics',
        'seo_keywords',
        'seo_description',
        'seo_title','head_scripts',
    ];
}
