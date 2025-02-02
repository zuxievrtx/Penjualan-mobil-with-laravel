<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'stock',
        'price',
        'barcode',
        'category_id'
    ];

    // Relasi ke tabel categories
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relasi ke tabel transactions
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
