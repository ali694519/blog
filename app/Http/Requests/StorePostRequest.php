<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|max:255,'.$this->id,
            'content' => 'required',
            'category_id'=>'required|int|exists:categories,id',
            'status'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' =>'Please enter the title',
            'description.required' =>'Please enter a content',
        ];
    }
}
