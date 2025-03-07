<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model {
    use HasFactory;

    protected $fillable = ['salon_id', 'user_id', 'rating', 'comment'];

    public function salon() {
        return $this->belongsTo(Salon::class);
    }
}
