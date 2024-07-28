<?php

namespace App\Http\Requests\Admin\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateAdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'password' => ['nullable','confirmed'],
            'email' => ['required', Rule::unique('users', 'email')->ignore($this->id)],
            'phone' => ['required', Rule::unique('users', 'phone')->ignore($this->id)],
            'profile_image' => ['nullable', 'file'],
        ];
    }
}
