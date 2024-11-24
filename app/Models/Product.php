<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'subcategoryId',
        'title',
        'description',
        'price',
        'size',
        'discount',
        'totalQuantity',
        'rate',
    ];

    // Relationships
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategoryId');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'productId');
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class, 'productId');
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class, 'productId');
    }
}
