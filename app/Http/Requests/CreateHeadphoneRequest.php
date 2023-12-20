<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateHeadphoneRequest extends FormRequest
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
            'tid' => 'required',
            'name' => 'required|string|min:2|max:191',
            'genre' => 'required|string|min:2|max:191',
            'hz' => 'required|string|min:0|max:30,000',
            'spl' => 'required|string|min:90|max:120',
            'oi' => 'required|numeric|min:16|max:300',
            'weight' => 'required|string|min:0|max:1000',
            'ts' => 'required|numeric|min:0|max:20',
            'price' => 'required|string|min:0|max:100000000'            
        ];
    }
    public function messages()
    {
        return [
            "tid.required" => "耳機編號 為必填",
            "name.required" => "耳機名稱 為必填",
            "name.min" => "耳機名稱 至少需2個字元",
            "genre.required" => "耳機類型 為必填",
            "hz.required" => "耳機名稱 為必填",
            "hz.numeric" => "耳機頻率 必須為數字",
            "hz.min" => "耳機頻率 範圍必須介於0~30,000之間",
            "hz.max" => "耳機頻率 範圍必須介於0~30,000之間",
            "spl.required" => "耳機名稱 為必填",
            "spl.numeric" => "耳機聲壓級 必須為數字",
            "spl.min" => "耳機聲壓級 範圍必須介於90~120之間",
            "spl.max" => "耳機聲壓級 範圍必須介於90~120之間",
            "oi.required" => "耳機抗阻 為必填",
            "oi.numeric" => "耳機抗阻 必須為數字",
            "oi.min" => "耳機抗阻 範圍必須介於16~300之間",
            "oi.max" => "耳機抗阻 範圍必須介於16~300之間",
            "ts.required" => "耳機傳輸 為必填",
            "weight.required" => "耳機名稱 為必填",
            "weight.numeric" => "耳機重量 必須為數字",
            "weight.min" => "耳機重量 範圍必須介於0~1000之間",
            "weight.max" => "耳機重量 範圍必須介於0~1000之間",
            "price.required" => "耳機名稱 為必填",
            "price.numeric" => "耳機價格 必須為數字",
            "price.min" => "耳機價格 範圍必須介於0~100,000,000之間",
            "price.max" => "耳機價格 範圍必須介於0~100,000,000之間",
        ];
    }    
}

