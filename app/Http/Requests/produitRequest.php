<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class produitRequest extends FormRequest
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
            'designation'=>'required|min:3',
            'description'=>'required|min:10|max:200',
            'category'=>'required|min:1',
            'price'=>'required|min:2',
            
            

        ];
    }
}
