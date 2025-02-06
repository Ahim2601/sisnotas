<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudent extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
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
            'dni' => ['required','unique:students', 'string', 'max:255'],
            'name' => ['required'],
            'lastname' => ['required'],

        ];
    }

    public function messages(): array
    {
        return [
            'dni.required' => 'El campo dni del estudiante es requerido',
            'dni.unique'=>'El registro ya ha sido guardado anteriormente',
            'name.required' => 'El campo nombre del estudiante es requerido',
            'lastname.required' => 'El campo apellido del estudiante es requerido',
        ];
    }
}
