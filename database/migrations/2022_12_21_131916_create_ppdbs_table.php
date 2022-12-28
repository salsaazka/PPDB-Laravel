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
        Schema::create('ppdbs', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('user_id')->nullable();
            $table->string('name');
            $table->string('nisn');
            $table->enum('jk', ['Laki-laki', 'Perempuan']);
            $table->string('school');
            $table->string('sch')->nullable();
            $table->string('email');
            $table->string('no_telp');
            $table->string('no_telpA');
            $table->string('no_telpB');
            $table->string('referensi');
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
        Schema::dropIfExists('ppdbs');
    }
};
