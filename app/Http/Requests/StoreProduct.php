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

        $id = $this->segment(2);

        return [
            'name' => "required|min:3|max:255|unique:products,name,{$id}",
            'desc' => 'required|min:3|max:1000',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'image' => 'nullable|image'
        ];
    }

    public function messages()
    {
        return [
            'name.min' => 'O nome deve ter ao menos 3 caracteres!',
            'name.required' => 'É obrigatório inserir um nome!',
            'desc.min' => 'A descrição deve ter ao menos 3 caracteres!',
            'desc.required' => 'É obrigatório inserir uma descrição!',
            'price.required' => 'Insira um preço',
            'photo.required' => 'Insira um imagem'
        ];
    }
}
