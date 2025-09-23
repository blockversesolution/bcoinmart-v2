<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
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
            'name'       => ['required', 'string', 'max:255'],
            'email'      => [
                'required', 'string', 'email', 'max:255',
                Rule::unique(User::class, 'email')->ignore($this->user()->id),
            ],
            'phone'      => [
                'required', 'string', 'max:15',
                Rule::unique(User::class, 'phone')->ignore($this->user()->id),
            ],
            'dob'        => ['required', 'date'],
            'address'    => ['required', 'string', 'max:500'],
            'country_id' => ['required', 'exists:countries,id'],
            'state_id'   => [
                'required',
                Rule::exists('states', 'id')->where(function ($query) {
                    $query->where('country_id', $this->input('country_id'));
                }),
            ],
            'city_id'    => [
                'required',
                Rule::exists('cities', 'id')->where(function ($query) {
                    $query->where('state_id', $this->input('state_id'));
                }),
            ],
            'zip'        => ['required', 'string', 'max:20'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'       => 'Name is required.',
            'email.required'      => 'Email is required.',
            'email.email'         => 'Email must be a valid email address.',
            'email.unique'        => 'This email is already taken.',
            'phone.required'      => 'Phone number is required.',
            'phone.unique'        => 'This phone number is already taken.',
            'dob.required'        => 'Date of birth is required.',
            'dob.date'            => 'Date of birth must be a valid date.',
            'address.required'    => 'Address is required.',
            'country_id.required' => 'Country is required.',
            'country_id.exists'   => 'Selected country is invalid.',
            'state_id.required'   => 'State is required.',
            'state_id.exists'     => 'Selected state does not belong to the selected country.',
            'city_id.required'    => 'City is required.',
            'city_id.exists'      => 'Selected city does not belong to the selected state.',
            'zip.required'        => 'ZIP code is required.',
            'zip.max'             => 'ZIP code may not be greater than 20 characters.',
        ];
    }
}
