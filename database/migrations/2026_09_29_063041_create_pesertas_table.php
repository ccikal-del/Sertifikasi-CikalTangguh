<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users')
                ->cascadeOnDelete();

            $table->foreignId('skema_id')
                ->nullable()
                ->constrained('skemas')
                ->cascadeOnDelete();

            $table->string('nik')
                ->unique()
                ->nullable();

            $table->string('nama');

            $table->enum('gender', ['male', 'female'])
                ->nullable();

            $table->string('no_hp')
                ->nullable();

            $table->text('alamat')
                ->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pesertas');
    }
};
