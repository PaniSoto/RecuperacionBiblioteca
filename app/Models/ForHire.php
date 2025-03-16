<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ForHire extends Model
{
    use HasFactory;

    protected $fillable = [
        'forHire_date',
        'return_date',
        'status',
        'book_id',
        'librarian_id',
        'reader_id',
    ];

    /**
     * Get the librarian that owns the ForHire
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function librarian(): BelongsTo
    {
        return $this->belongsTo(Librarian::class);
    }

    /**
     * Get the librarian that owns the ForHire
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reader(): BelongsTo
    {
        return $this->belongsTo(Reader::class);
    }

    /**
     * Get the librarian that owns the ForHire
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }
}
