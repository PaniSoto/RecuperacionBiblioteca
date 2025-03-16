<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reader extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'email',
        'phone'
    ];

    /**
     * Get all of the comments for the Reader
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function for_hire(): HasMany
    {
        return $this->hasMany(ForHire::class);
    }
}
