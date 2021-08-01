<?php

namespace App\Models;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'quote',
        'length',
        'words',
        'views',
        'likes',
    ];


    /* Relationships */

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
