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
        'description',
        'abstract',
        'bio',
        'image',
        'dob', // date of birth
        'yob', // year of birth (in case dob is null)
        'pob', // place of birth
        'dod', // date of death
        'yod', // year of death (in case dod is null)
        'pod', // place of death
        'letter',
        'popularity',
    ];

    protected $casts = [
        'dob' => 'date',
        'dod' => 'date',
    ];

    public function getAgeAttribute()
    {
        if ($this->attributes['dob']) {
            if ($this->attributes['dod']) {
                return $this->dod->diffInYears($this->dob);
            }
            return \Carbon\Carbon::now()->diffInYears($this->dob);
        }
        if ($this->attributes['yob']) {
            if ($this->attributes['yod']) {
                return $this->attributes['yod'] - $this->attributes['yob'];
            }
            return date('Y') - $this->attributes['yob'];
        }
        return null;
    }

    /* Relationships */

    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }
}
