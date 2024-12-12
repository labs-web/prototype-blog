<?php
// Ce fichier est maintenu par ESSARRAJ Fouad



namespace Modules\PkgBlog\App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:255'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => __('validation.required', ['attribute' => __('PkgBlog::category.name')]),
            'name.max' => __('validation.nameMax'),
            'email.required' => __('validation.required', ['attribute' => __('PkgBlog::category.email')]),
            'email.max' => __('validation.emailMax'),
            'password.required' => __('validation.required', ['attribute' => __('PkgBlog::category.password')]),
            'password.max' => __('validation.passwordMax')
        ];
    }
}
