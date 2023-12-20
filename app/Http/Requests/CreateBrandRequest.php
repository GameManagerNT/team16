<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBrandRequest extends FormRequest
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
            'name' => 'required|string|min:2|max:100',
            'country' => 'required|string|min:2|max:100',
            'since' => 'nullable',
            'founder' => 'required|string|min:2|max:100',
            'headquarters' => 'required|string|min:2|max:100',
            'web' => 'required|string|min:2|max:100',
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "廠商名稱 為必填",
            "name.min" => "廠商名稱 至少需2個字元",
            "country.required" => "國家 為必填",
            "country.min" => "國家 至少需2個字元",
            "founder.required" => "創辦人 為必填",
            "founder.min" => "創辦人 至少需2個字元",
            "headquarters.required" => "總部 為必填",
            "headquarters.min" => "總部 至少需2個字元",
            "web.required" => "網站 為必填",
            "web.min" => "網站 至少需2個字元",
        ];
    }
}
