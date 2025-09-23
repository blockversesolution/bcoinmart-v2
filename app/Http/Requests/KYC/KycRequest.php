<?php

namespace App\Http\Requests\KYC;

use Illuminate\Foundation\Http\FormRequest;

class KycRequest extends FormRequest
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
            'user_id' => ['required', 'exists:users,id'],
            'verification_type' => ['required', 'in:identity,address'],
            'document_type' => [
                'required',
                'string',
                'max:255',
                function (string $attribute, mixed $value, \Closure $fail): void {
                    $verificationType = $this->input('verification_type');
                    $identityTypes = ['nid', 'passport', 'driving_licences'];
                    $addressTypes = ['utility', 'bank_statement', 'others'];

                    if ($verificationType === 'identity' && !in_array($value, $identityTypes, true)) {
                        $fail('The selected document type is invalid for identity verification.');
                    }
                    if ($verificationType === 'address' && !in_array($value, $addressTypes, true)) {
                        $fail('The selected document type is invalid for address verification.');
                    }
                },
            ],
            'file' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'The user ID field is required.',
            'user_id.exists' => 'The selected user ID is invalid.',
            'verification_type.required' => 'The verification type field is required.',
            'verification_type.in' => 'The verification type must be either identity or address.',
            'document_type.required' => 'The document type field is required.',
            'document_type.string' => 'The document type must be a string.',
            'document_type.max' => 'The document type may not be greater than 255 characters.',
            'file.required' => 'The file field is required.',
        ];
    }
}
