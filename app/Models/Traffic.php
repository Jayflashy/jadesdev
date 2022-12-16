<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traffic extends Model
{
    use HasFactory;

    protected $fillable = [
        'country','ip_address','url','referrer','user_agent','visit','date','browser','device','platform','device_type'
    ];

    public $timestamps = true;
}
