<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Rasta;
class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'rasta_id',
        'name',
        'description',
        'body',
        'price',
        'status',
        'muhim',
        'image',
    ];
    public function Rasta(){
        return $this->belongsTo(Rasta::class, 'rasta_id');
    }
}
