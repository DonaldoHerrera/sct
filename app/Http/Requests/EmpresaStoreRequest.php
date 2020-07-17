<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaStoreRequest extends FormRequest
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
            'nombre'=>['required'],
            'rfc'=>['required','max:13'],
            'rep_legal'=>['required'],
            'entidad'=>['required'],
            'tipo_empresa'=>['required'],
            'c_mic'=>['required'],
            'fecha_creacion'=>['required'],
            'domicilio_fiscal'=>['required'],
            'accionistas'=>['required'],
            'contacto'=>['required']
        ];
    }
}
