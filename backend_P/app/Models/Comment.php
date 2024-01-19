<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    // Egy komment egy Movie-hoz tartozik
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    // Egy komment egy User-hez tartozik
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
