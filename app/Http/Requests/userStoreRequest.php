<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userStoreRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required',
            'salary' => 'required',
            'location' => 'required',
            'apply' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title is required',
            'description.requried' => 'Desc is required',
            'salary.requried' => 'Salary is required',
            'location.required' => 'Location is required',
            'apply.required' => 'apply is required',
        ];
    }
}
