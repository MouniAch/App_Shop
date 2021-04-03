<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class orderRequest extends FormRequest
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
            'reference'=>'required|min:3',
              'date'=>'required|min:3',
            'address'=>'required|min:10|max:200',
           
            'price'=>'required|min:2',
            
            

        ];
    }
}
