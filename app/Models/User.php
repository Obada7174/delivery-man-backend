<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password',
        'phoneNumber',
        'role',
        'location',
        'img',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Relationships
    public function carts()
    {
        return $this->hasMany(Cart::class, 'userId');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'customerId');
    }

    public function deliveries()
    {
        return $this->hasMany(Order::class, 'deliveryId');
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class, 'userId');
    }

    public function markets()
    {
        return $this->hasMany(Market::class, 'userId');
    }
}
