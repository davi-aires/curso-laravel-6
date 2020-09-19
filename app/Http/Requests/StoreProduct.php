<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
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
            'name' => 'required|min:3|max:255',
            'desc' => 'nullable|min:3|max:1000',
            'photo' => 'required|image'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'É obrigatório inserir um nome!',
            'desc.min' => 'A descrição deve ter ao menos 3 caracteres!',
            'photo.required' => 'Insira um imagem'
        ];
    }
}
