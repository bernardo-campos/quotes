<?php

namespace App\Models;

use App\Models\Quote;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
        'image',
        'letter',
        'description',
        'popularity',
    ];


    /* Relationships */

    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }
}
