<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Foto;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    protected $fillable = [
        'foto_id', // Mengubah 'image_id' menjadi 'product_id'
        'user_id',
      
        'comment',
    ];

    // Definisikan relasi dengan model Product
    public function foto() { // Mengubah nama metode menjadi lowercase
        return $this->belongsTo(foto::class); // Menggunakan 'product_id' sebagai kunci asing
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
