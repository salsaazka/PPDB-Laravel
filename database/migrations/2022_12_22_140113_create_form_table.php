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
        Schema::create('form', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nis');
            $table->enum('jk', ['Laki-laki', 'Perempuan']);
            $table->string('sekolah');
            $table->string('email');
            $table->string('no_telp');
            $table->string('no_telpA');
            $table->string('no_telpB');
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
        Schema::dropIfExists('form');
    }
};
