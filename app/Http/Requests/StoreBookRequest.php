<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titlul'=> 'required|unique:books|max:20',
            'autor' => 'required',
            'pret'  => 'required|digits:10',
            'descriere' => 'required|max:100|min:10',
            'pagini' => 'required|min:1',
            'limba' => 'required|max:50'
        ];
    }
}
