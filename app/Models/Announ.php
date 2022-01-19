<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announ extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'description',
        'body',
        'image',
    ];
}
