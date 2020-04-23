<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'hello') 
        {
            return true;
        }else
        {
            return false;
        }
        
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'mail' => 'nullable|email',
            'age' => 'nullable|numeric|hello',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'nameは必須項目です。',
            'mail.email' => 'mailを正しく入力してください。',
            'age.numeric' => 'ageは半角数字で入力してください。',
            'age.hello' => 'ageは偶数のみで受け付けます。',
        ];
    }
}
