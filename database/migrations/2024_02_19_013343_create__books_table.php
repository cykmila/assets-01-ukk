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
        Schema::create('_books', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('title');
            $table->integer('stock');
            $table->string('category');
            $table->date('publication');
            $table->string('publisher');
            $table->text('synopsis');
            $table->enum('rating',[1,2,3,4,5]);
            $table->enum('status',['borrowed','return']);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_books');
    }
};
