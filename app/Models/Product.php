<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $table = 'products';
    public $timestamps = true;

    protected $casts = [
    ];

    protected $fillable = [
        'name',
        'prix',
        'created_at',
        'description',
    ];

}
