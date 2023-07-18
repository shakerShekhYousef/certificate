<?php

namespace App\Http\Requests\admin\Comment;

use App\Exceptions\GeneralException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class CreateCommentRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email'=>['required','email'],
            'name'=>['required','string']
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new GeneralException($validator->errors()->first());
    }
}
