<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KasanegiFormRequest extends FormRequest
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
            'images' => 'required',
            'series' => 'required',
            'sex' => 'required',
            'head' => 'required',
            'body' => 'required',
            'arm' => 'required',
            'waist' => 'required',
            'foot' => 'required',
            'concept' => 'required',
        ];
    }
}
