<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class UserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required | string',
            'phone' => array('required', 'regex:/08[0-9]{7,}/', 'unique:user'),
            'email' => 'required | e-mail |unique:user',
            'address' => 'string | nullable',
            'id_city' => 'nullable',
            'postal_code' => 'nullable',
            'coordinate' => 'required',
            'date' => 'required|date',
            'time' => 'required', //cari time val di laravel
            'design' => 'required'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['status' => 'fail', 'messages'  => $validator->errors()->all()], 200));
    }

    public function validationData()
    {
        return $this->json()->all();
    }
}
