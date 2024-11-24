<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'title',
        'location',
        'img',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }
}
