<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'          => 'required|min:5|max:100',
            'email'         => 'required|min:5|max:100|unique:users',
            'password'         => 'required|min:5|max:100',
        ];
    }

    public function messages(): array
{
    return [
        'name.required' => 'Campo Nome é obrigatorio',
        //'name.min' => 'O :attribute value :input deve conter :min - :max.',
        'name.min' => 'O  Nome deve conter mais do que  :min caracteres',
        'name.max' => 'O  Nome é muito grande, deve conter menos do que  :max caracteres',
        'email.required' => 'Campo Email é obrigatorio',
        'email.unique' => 'Campo Email já cadastrado',
      
    ];
}
/*
    public function messages(){
        return [
            'name.required'         =>  'Campo nome obrigatorio',
            'name.between'          =>  'Nome tem que conter no min: e max:',
            'name.state'            => 'exists:states',

            'email.required'         =>  'Campo nome obrigatorio',
            'email.between'          =>  'Nome tem que conter no min: e max:',
            'email.state'            =>   'exists:states',

           // 'password2.same'         =>  'senhas nao conferem',

            'name.required'         =>  'Campo nome obrigatorio',
            'name.between'          =>  'Nome tem que conter no min: e max:',

            'usuario.required'      =>  'Campo nome obrigatorio',
            'usuario.between'       =>  'Nome tem que conter no min: e max:',
            'usuario.state'         =>   'exists:states',
        ];
    }*/
}
