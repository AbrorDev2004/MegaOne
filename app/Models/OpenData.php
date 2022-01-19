<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpenData extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'description',
        'body',
        'image',
    ];
}
