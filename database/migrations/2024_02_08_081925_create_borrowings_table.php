<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('borrowings', function (Blueprint $table) {
            $table->id('borrowing_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id')->references('book_id')->on('books')->cascadeOnDelete();
            $table->date('borrowing_date');
            $table->date('return_date');
            $table->enum('status',['borrowed','returned','booked']);
            $table->integer('book_count');
            $table->softDeletes();
            $table->timestamps();
        });

        DB::unprepared('
        CREATE TRIGGER min_stock
        AFTER INSERT ON borrowings FOR EACH ROW BEGIN IF NEW.status = "borrowed" THEN
        UPDATE books SET stock = stock - NEW.book_count WHERE book_id = NEW.book_id;
        END IF;
        END;
        ');

        DB::unprepared('
        CREATE TRIGGER max_stock
        AFTER UPDATE ON borrowings FOR EACH ROW BEGIN IF NEW.status = "returned" THEN
        UPDATE books SET stock = stock + NEW.book_count WHERE book_id = NEW.book_id;
        END IF;
        END;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrowings');
    }
};
