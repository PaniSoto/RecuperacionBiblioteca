<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('for_hires', function (Blueprint $table) {
            $table->id();
            $table->date('forHire_date');
            $table->date('return_date');
            $table->enum('status', ['Pendiente', 'Aprobado', 'Rechazado']);
            $table->foreignId('book_id')->constrained('books')->onDelete('cascade');
            $table->foreignId('librarian_id')->constrained('librarians')->onDelete('cascade');
            $table->foreignId('reader_id')->constrained('readers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('for_hires');
    }
};
