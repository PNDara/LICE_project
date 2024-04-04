<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Books extends Model
{
    protected $fillable = [
        'author_id',
        'title',
        'genre',
        'release_date',
        'price',
        'description',
        'cover_img_path',
    ];


    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
