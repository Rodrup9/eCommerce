<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegister extends FormRequest
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
            'username' => 'required|min:6|alpha_num:ascii',
            'name' => 'required|min:3',
            'apellido_pa' => 'required|min:3|alpha:ascii',
            'apellido_ma' => 'required|min:3|alpha:ascii',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ];
    }

    public function messages() {
        return [
            'username.alpha' => 'No ingrese caracteres especiales',
            'username.required' => 'Debe de completar este campo',
            'username.min' => 'El nombre debe tener por lo menos 6 caracteres',

            'name.required' => 'Debe de completar este campo',

            'apellido_pa.required' => 'Debe de completar este campo',

            'apellido_ma.required' => 'Debe de completar este campo',

            'email.required' => 'Debe de completar este campo',

            'password.required' => 'Debe de completar este campo',
        ];
    }
}
