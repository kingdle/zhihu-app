<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionRequest extends FormRequest
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

    public function messages()
    {
        return [
            'title.required'=>'标题不能为空',
            'title.min'=>'标题不少于6个字符',
            'title.max'=>'标题不长于200个字符',
            'body.required'=>'内容不能为空',
            'body.min'=>'内容不少于26个字符'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required| min:6|max:200',
            'body'=>'required|min:26'
        ];
    }
}