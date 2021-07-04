<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
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
            //
            'name'=>'required',
            'file'=>'required|mimes:jpg,jpeg,png',
            'message'=>'required|min:10'
        ];
    }
    public function Message(){
        return[
            'name.required'=>'Name field is required',
            'file.required'=>'Profile field is required',
            'file.mimes'=>'Profile must be jpg,jpeg,png only',
            'message.required'=>'Message field is required',
        ];
    }
}
