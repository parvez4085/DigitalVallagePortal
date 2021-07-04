<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SilderRequest extends FormRequest
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
            'title'=>'required',
            'slider' => 'required|image|mimes:jpg,png,jpeg,|max:2048|dimensions:min_width=1680,min_height=900',
        ];
    }
    public function Message(){
        return[
            'slider.required'=>'Slider image is reqired!!',
        ];
    }
}
