<?php
// database/migrations/2024_01_01_000002_create_classes_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // nama kelas (misal: X-IPA-1)
            $table->string('grade'); // tingkat (X, XI, XII)
            $table->string('major')->nullable(); // jurusan (IPA, IPS, dll)
            $table->unsignedBigInteger('wali_kelas_id')->nullable();
            $table->timestamps();
            
            $table->foreign('wali_kelas_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('classes');
    }
};