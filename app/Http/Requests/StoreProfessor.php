<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfessor extends FormRequest
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
            'dni' => ['required','unique:professors', 'string', 'max:255'],
            'name' => ['required'],
            'lastname' => ['required'],

        ];
    }

    public function messages(): array
    {
        return [
            'dni.required' => 'El campo dni del profesor es requerido',
            'dni.unique'=>'El registro ya ha sido guardado anteriormente',
            'name.required' => 'El campo nombre del profesor es requerido',
            'lastname.required' => 'El campo apellido del profesor es requerido',
        ];
    }
}
