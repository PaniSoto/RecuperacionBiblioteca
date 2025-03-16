<?php

namespace App\Actions\Jetstream;

use App\Models\Librarian;
use Laravel\Jetstream\Contracts\DeletesUsers;

class DeleteUser implements DeletesUsers
{
    /**
     * Delete the given user.
     */
    public function delete(Librarian $librarian): void
    {
        $librarian->deleteProfilePhoto();
        $librarian->tokens->each->delete();
        $librarian->delete();
    }
}
