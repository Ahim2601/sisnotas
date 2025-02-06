<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourse extends FormRequest
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
            'description' => ['required','unique:institutions', 'string', 'max:255'],

        ];
    }

    public function messages(): array
    {
        return [
            'description.required' => 'El campo nombre de la institucion es requerido',
            'description.unique'=>'El registro ya ha sido guardado anteriormente'
        ];
    }
}
