<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the admin is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|max:255',
            'family'=>'required|max:255',
            'email'=>'required|email',
            'password'=>'required|min:6|max:100',
            'phone'=>'required|min:8|max:16',
            'address'=>'required',
            'age'=>'required|integer|min:1|max:150',
            'avatar'=>'required|image',
        ];
    }
}
