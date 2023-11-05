<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    //para asignar a la tabla
    protected $table = 'cursos';
    
    protected $fillable =['name','description','categoria'];//solo llena los campos
    //protected $guarded =[];//llena todo menos..
}
