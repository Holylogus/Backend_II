<?php

use App\Models\Book;
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
        Schema::create('books', function (Blueprint $table) {
            $table->id("book_id");
            $table->string("author");
            $table->string("title");
            $table->integer("pieces");
            $table->timestamps();
        });
        Book::create([
            "author" => "Balazs",
            "title" => "Fantasy",
            "pieces" => 42,
        ]);
        Book::create([
            "author" => "Mek Elek",
            "title" => "Történelmi",
            "pieces" => 66,
        ]);
        Book::create([
            "author" => "Albinó Virág",
            "title" => "Dráma",
            "pieces" => 0,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
