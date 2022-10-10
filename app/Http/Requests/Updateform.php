<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Updateform extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'reg_no' => ['required','string','max:20'],
            'name' => ['required', 'string', 'max:255'],
            'dob' => ['required','string','max:10'],
            'email' => ['required', 'string', 'email', 'max:255', ], //'unique:users'
            //'password' => ['required', 'string', 'min:8', 'confirmed'],
            'student_id' => ['required', 'string', 'max:255'],
            'college_name' => ['required', 'string', 'max:255'],
            'degree' => ['required','string','max:100'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'zipcode' => ['required', 'string', 'max:255'],
            'speciality' => ['required', 'string', 'max:255'],
        ];
    }
}
