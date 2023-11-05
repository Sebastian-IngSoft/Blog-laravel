<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
    //comprueba si el usuario tiene un determinado rol o permiso
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'categoria' => 'required'
        ];
    }
    public function messages()
    {
        //hace los mensajes de error, tiene que ser messages si o si en la funcion
        return[
            'description.required'=>'Datos incorrectos'
        ];
    }
    public function attributes()
    {
        return[
            'name'=>'nombre deu curso'//cambia el mensaje del atributo name
        ];
    }
}
