<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    // protected: agar nama table sesuai dengan yang di inginkan
    protected $table = 'products';
 
    protected $fillable = [
        'title',
        'price',
        'product_code',
        'description',
        'category'
    ];
}