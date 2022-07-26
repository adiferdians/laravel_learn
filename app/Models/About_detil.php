<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About_detil extends Model
{
    use HasFactory;

    protected $table = 'about_detils';
    protected $fillable = [
        'title',
        'desc'
    ];

    protected $hidden = [];
}
