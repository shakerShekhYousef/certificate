<?php

namespace App\Http\Requests\admin\Blog;

use App\Exceptions\GeneralException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreateBlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title_en'=>['required','string'],
            'title_ar'=>['nullable','string'],
            'body_en'=>['required','string','min:5'],
            'body_ar'=>['nullable','string','min:5'],
            'image'=>['nullable','mimes:jpg,png,jpeg,gif','max:2000']
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new GeneralException($validator->errors()->first());
    }
}
