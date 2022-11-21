<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'first_name'=> 'required|max:25',
            'last_name'=> 'required|max:25',
            'mobile'=> 'required|numeric',
            'address'=> 'required|max:50',
            'post_code'=> 'required|digits:5',
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }


                    /**
             * Get the error messages for the defined validation rules.
             *
             * @return array
             */
            public function messages()
            {
                return [
                    'first_name.required' => 'First name is required',
                    'last_name.required' => 'Last name is required',
                    'first_name.max' => ' first name should be less than 25 character ',
                    'last_name.max' => 'last name should be less than 25 character ',
                    'address.required' => 'address is required ',
                    'address.max' => 'address should be less than 50 character ',
                    'post_code.required' => 'Post Code is required ',
                    'post_code.digits' => 'Post Code should be less than 6 character ',
                    'image.required' => 'Image is required ',
                    'image.image' => 'hello is required ',
                    'image.mimes' => 'Image should be jpeg,png,gif,svg ',
                    'image.max' => 'Image size should be less than 2mb ',
                   
                    
                ];
            }
}
