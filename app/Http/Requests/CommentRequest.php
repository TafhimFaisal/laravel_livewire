<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'serverMemo.data.title' => 'required|min:6|max:100',
            'serverMemo.data.comment' => 'required|min:6|max:300',
        ];
    }

    public function messages()
    {
        return [
            'serverMemo.data.title.required' => 'A title is required',
            'serverMemo.data.title.min' => 'minimum charecter 6',
            'serverMemo.data.title.max' => 'maximum charecter 100',

            'serverMemo.data.comment.required' => 'A comment is required',
            'serverMemo.data.comment.min' => 'minimum charecter 6',
            'serverMemo.data.comment.max' => 'maximum charecter 100',
        ];
    }
}
