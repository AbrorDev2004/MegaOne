<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rasta extends Model
{
    use HasFactory;
    protected $fillable=
    [
        'title',
        'description',
        'image',
    ];
    
    public function products(){
        return $this->hasMany(Product::class, 'rasta_id');
    }
}
