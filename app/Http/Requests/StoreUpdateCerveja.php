<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateCerveja extends FormRequest
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
            'nome' => ' required | max:100 | min:2',
            'descricao' => 'required | max:300 |min:2',
            'nomeImagem' => 'image|nullable|max: 1999',
            'tipo' => 'required | max:20 |min:2',
            'preco' => 'required | Integer',
            'quantidade' => 'required | Integer',
        ];
    }
}
