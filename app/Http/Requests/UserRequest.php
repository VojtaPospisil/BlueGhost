<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        $userId = $this->user === null ? null : $this->user->id;

        return [
            'fullName'  => [
                'required',
                'string',
                'max:255',
            ],
            'email' => [
                'required',
                'email',
                'unique:users,email,' . $userId,
            ],
            'phone' => [
                'required',
                'numeric',
                'digits_between: 8, 13'
            ],
            'note' => [
                'max:255',
            ],
            'slug' => [
                'required',
                'max:255',
                'unique:users,slug,' . $userId,
            ]
        ];
    }

    public function messages()
    {
        return[
            'fullName.required' => 'Toto pole je povinné.',
            'fullName.string' => 'Toto pole musí být text.',
            'fullName.max' => 'Toto pole je příliš dlouhé.',

            'email.required' => 'Toto pole je povinné.',
            'email.unique' => 'Tento email je již používán.',
            'email.email' => 'Toto pole musí být platná emailová adresa.',

            'phone.required' => 'Toto pole je povinné.',
            'phone.numeric' => 'Toto pole musí být číslo.',
            'phone.digits_between' => 'Číslo musí mít 8 - 13 znaků.',

            'note.max' => 'Toto pole je příliš dlouhé.',

            'slug.required' => 'Toto pole je povinné.',
            'slug.max' => 'Toto pole je příliš dlouhé.',
            'slug.unique' => 'Tento slug je již používán.',
        ];
    }
}
