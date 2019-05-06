<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
{

    protected $redirect = 'contact#form';
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
            'onderwerp' => 'required|string|min:4|max:40',
            'bericht' => 'required|string|min:10|max:400',
            'naam' => 'required|string|min:2|max:40',
            'email' => 'required|email',
        ];
    }
}
