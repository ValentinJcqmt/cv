<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SendMailRequest extends Request {

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
            //Email form
            'first_name'   => 'required|string|max:20|min:3',
            'last_name'    => 'required|string|max:20|min:3',
            'phone_number' => 'required|numeric',
            'email'        => 'required|email',
            'message'      => 'required|min:3',

            //request need
            'car_id'       => 'required|integer',
            'provider'     => 'required|in:conceptauto,selsia',
            //Need slug in order to display correct redirection
            'slug'         => 'required|string'
        ];
    }
}
