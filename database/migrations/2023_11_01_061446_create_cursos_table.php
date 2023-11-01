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
        //     $table->timestamps('timestampcolumna');
        // });
        //modificar
    //para modificar la columna
            //$table->string('name',150) ->nullable() -> change();
        //down
            //$table->string('name',255) ->nullable(false)->change();
       
    // creando tabla
        // Schema::create('cursos',function(Blueprint $table){
        //     columna id de tipo entero increment unsignet
        //     $table->id();
        //     varchar 255 caracteres
        //     $table->string('name');
        //     mayor a string de arriba
        //     $table->text('description');
        //     crea 2 columnas fecha donde se crea y fecha donde se actualiza
        //     $table->timestamps('timestampcolumna');
        // });

    //añadiendo columna
            //para que sea nulo y no de error 
            //$table->string('avatar')->nullable()->after('email');        
            //down $table->dropColumn('avatar');
    public function up(): void
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->text('categoria');
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
