<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
        'description',
        // 'owner_id',
        // 'package_id',
        'address',
        'contact_number',
        'contact_email',
        'opening_time',
        'closing_time',
        'gender',
        'status'
    ];

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function images()
    {
        return $this->hasMany(SalonImage::class);
    }

    // public function owner()
    // {
    //     return $this->belongsTo(User::class, 'owner_id');
    // }

    // public function package()
    // {
    //     return $this->belongsTo(Package::class, 'package_id');
    // }
}
