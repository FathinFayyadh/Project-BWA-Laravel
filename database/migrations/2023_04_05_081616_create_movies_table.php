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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('trailer');
            $table->string('movie');
            $table->string('casts');// nama pemain
            $table->string('categories');// ganrenya
            $table->string('small_thumbnail');
            $table->string('large_thumbnail');
            $table->date ('release_date');
            $table->text('about');
            $table->string('short_about');
            $table->string('duration');
            $table->boolean('featured');
            $table->softDeletes();//membuatr kolom secdra otomatis
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
