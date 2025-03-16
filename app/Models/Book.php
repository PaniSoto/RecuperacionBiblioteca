<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'genre',
        'published_date',
    ];

    /**
     * Get all of the comments for the Book
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function for_hire(): HasMany
    {
        return $this->hasMany(ForHire::class);
    }
}
