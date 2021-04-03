<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class livreurRequest extends FormRequest
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
            'name'=>'required|min:3',
              'email'=>'required|min:15',
            'ville'=>'required|min:2|max:200',
              'password'=>'required|min:8',
             'telephone'=>'required',
             
            
            

        ];
    }
}
