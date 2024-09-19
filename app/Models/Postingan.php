<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postingan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'judul',
        'hashtag',
        'gambar',
        'isikomen',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
