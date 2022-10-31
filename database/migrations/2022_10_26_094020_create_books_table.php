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
            $table->string('name');
            $table->string('author');
            $table->string('published_date');
            $table->string('category');
            $table->string('shelf');
            $table->string('code')->unique();
            $table->string('pdf'); //pdf
            $table->string('fav_status')->nullable(); //yes / no
            $table->string('likes')->nullable(); 
            $table->string('likedby')->nullable(); //addded by
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
