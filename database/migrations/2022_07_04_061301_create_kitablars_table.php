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
        Schema::create('kitablars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('selflink');
            $table->integer('yazarid');
            $table->integer('yayineviid');
            $table->string('image');
            $table->double('fiyat');
            $table->text('aciklama')->nullable();
            $table->integer('kategoriid');
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
        Schema::dropIfExists('kitablars');
    }
};
