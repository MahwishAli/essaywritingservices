<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactMailRequest extends FormRequest
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
            'name'      => 'required|string',
            'email'     => 'required|email|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            // 'phone' => 'required|numeric|digits:11|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            // 'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'phone'     => 'required|regex:/^[+][0-9]/|min:12',
            'subject'   => 'required|string',
            'detail'    => 'required|string'
        ];
    }
    public function messages()
    {
        return [
            'phone.min' => 'Phone number must be at least 9 digits.',
        ];
    }
}
