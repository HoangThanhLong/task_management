<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTaskRequest extends FormRequest
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
            'title' => 'required|min:3',
            'content' => 'required|min:3',
            'image' => 'mimes:jpeg,bmp,png,gif',
            'due_date' =>'required|date',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Không được để trống',
            'title.min' => 'Không được ít hơn 3 ký tự',
            'content.required' => 'Không được để trống',
            'content.min' => 'Không được ít hơn 3 ký tự',
            'image.mimes' => 'Không đúng định dạng ảnh',
            'due_date.required' => 'Không được để trống',
            'due_date.date' => 'Dung dinh dang ngay thang',
        ];
    }
}
