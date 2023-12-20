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
    public function rules()
    {
        return [
            'id' => 'required',
            'name' => 'required',
            'country' => 'required',
            'since' => 'required|numeric|min:0|max:2022',
            'founder' => 'required',
            'headquarters' => 'required',
            'web' => 'required|string|min:0|max:1000',
        ];
    }
    public function messages()
    {
        return [
            "id.required" => "廠牌編號 為必填", 
            "name.required" => "廠牌名稱 為必填",
            "country.required" => "廠牌國家 為必填",
            "since.required" => "成立日期 為必填",
            "since.numeric" => "成立日期 必須為數字",
            "since.min" => "成立日期 範圍必須介於0~2022之間",
            "since.max" => "成立日期 範圍必須介於0~2022之間",
            "founder.required" => "創辦人 為必填",
            "headquarters.required" => "廠牌總部 為必填",
            "web.required" => "廠牌網站 為必填",
        ];
    }    
}

