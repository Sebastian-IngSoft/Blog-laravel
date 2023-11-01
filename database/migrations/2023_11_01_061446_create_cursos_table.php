<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // creando tabla
        // Schema::create('cursos',function(Blueprint $table){
        //     columna id de tipo entero increment unsignet
        //     $table->id();
        //     varchar 255 caracteres
        //     $table->string('name');
        //     mayor a string de arriba
        //     $table->text('description');
        //     crea 2 columnas fecha donde se crea y fecha donde se actualiza
        //     $table->timestamp('timestampcolumna');
        // });
    public function up(): void
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
