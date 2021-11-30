<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientValidatation extends FormRequest
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
            'name'=>'required|string',
            'age'=>'required|numeric|digits_between:1,10',
            'gender'=> 'required|in:male,female',
            'result'=> 'required|in:negative,postive'
        ];
    }
}
