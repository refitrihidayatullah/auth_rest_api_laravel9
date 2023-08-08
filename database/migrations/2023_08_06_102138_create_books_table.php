<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('cover_id')->nullable();
            $table->unsignedBigInteger('genre_id')->nullable();
            $table->string('title', 50);
            $table->string('author', 50);
            $table->string('publisher', 50);
            $table->date('publication_date')->default(now());
            $table->string('synopsis');
            $table->longText('cover')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
