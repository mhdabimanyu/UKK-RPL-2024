<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'deskripsi',
    ];
    public function comments() {
        return $this->hasMany(Comment::class); // Assuming each product can have multiple comments
    }
}

