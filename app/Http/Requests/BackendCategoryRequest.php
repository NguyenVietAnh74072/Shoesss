<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BackendCategoryRequest extends FormRequest
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
            'c_name' => 'required|unique:categories ,c_name' . $this->id,

        ];
    }
    public function messages()
    {
        return [
            'c_name.required' => 'Dữ liệu không được để chống',
            'c_name.unique' => 'Dữ liệu đã tồn tại',

        ];
    }
}