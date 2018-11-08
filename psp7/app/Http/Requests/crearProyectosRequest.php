<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class crearproyectosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'NombreProyecto'=>'required|unique:Proyectos',// falta filtrar los números únicos para el proyecto.
            'descripcion'=>'mimes:pdf|required',
            'ElementosDeEvaluacion'=>'required',
            'NumeroProyecto'=>'required',


            ];
    }
}
