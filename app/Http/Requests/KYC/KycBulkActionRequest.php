<?php

namespace App\Http\Requests\KYC;

use Illuminate\Foundation\Http\FormRequest;

class KycBulkActionRequest extends FormRequest
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
            'ids' => ['required', 'array', 'min:1'],
            'ids.*' => ['integer', 'exists:k_y_c_s,id'],
            'action' => ['required', 'string', 'in:status-change,delete'],
            'status' => ['nullable', 'required_if:action,status-change', 'string', 'in:approved,rejected'],
        ];
    }

    public function messages()
    {
        return [
            'ids.required' => 'The ids field is required.',
            'ids.array' => 'The ids field must be an array.',
            'ids.min' => 'At least one ID must be provided.',
            'ids.*.integer' => 'Each ID must be an integer.',
            'ids.*.exists' => 'One or more provided IDs do not exist in the KYC records.',
            'action.required' => 'The action field is required.',
            'action.string' => 'The action field must be a string.',
            'action.in' => 'The action field must be either status-change or delete.',
            'status.required_if' => 'The status field is required when action is status-change.',
            'status.string' => 'The status field must be a string.',
            'status.in' => 'The status field must be either approved or rejected.',
        ];
    }
}
