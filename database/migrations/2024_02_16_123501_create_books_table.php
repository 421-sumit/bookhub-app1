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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->unsignedBigInteger('genre_id');
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('publisher_id');
            $table->unsignedBigInteger('language_id');
            $table->unsignedBigInteger('rack_id');
            $table->double('cost',8,2)->unsigned()->default(0);
            $table->integer('quantity');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('genre_id')->references('id')->on('genres');
            $table->foreign('author_id')->references('id')->on('authors');
            $table->foreign('publisher_id')->references('id')->on('publishers');
            $table->foreign('language_id')->references('id')->on('languages');
            $table->foreign('rack_id')->references('id')->on('racks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
