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
            'hz' => 'required|numeric|min:1|max:50000',
            'spl' => 'required|numeric|min:1|max:120',
            'oi' => 'required|numeric|min:1|max:1000',
            'weight' => 'required|numeric|min:1|max:500',
            'ts' => 'required|string|min:0|max:2',
            'price' => 'required|string|min:1|max:191',          
        ];
    }

    public function messages()
    {
        return [
            "tid.required" => "耳機廠商 為必填",
            "name.required" => "耳機型號 為必填",
            "name.min" => "耳機型號 至少需2個字元",
            "genre.required" => "耳機類型 為必填",
            "genre.min" => "耳機類型 至少需2個字元",
            "hz.required" => "耳機響應頻率 為必填",
            "hz.numeric" => "耳機響應頻率 必須為數字",
            "hz.min" => "耳機響應頻率 範圍必須介於1~50000之間",
            "hz.max" => "耳機響應頻率 範圍必須介於1~50000之間",
            "spl.required" => "耳機聲壓級 為必填",
            "spl.numeric" => "耳機聲壓級 必須為數字",
            "spl.min" => "耳機聲壓級 範圍必須介於1~120之間",
            "spl.max" => "耳機聲壓級 範圍必須介於1~120之間",
            "oi.required" => "耳機阻抗 為必填",
            "oi.numeric" => "耳機阻抗 必須為數字",
            "oi.min" => "耳機阻抗 範圍必須介於1~1000之間",
            "oi.max" => "耳機阻抗 範圍必須介於1~1000之間",
            "weight.required" => "耳機重量 為必填",
            "weight.numeric" => "耳機重量 必須為數字",
            "weight.min" => "耳機重量 範圍必須介於1~500之間",
            "weight.max" => "耳機重量 範圍必須介於1~500之間",
            "ts.required" => "耳機傳輸 為必填",
            "ts.min" => "耳機傳輸 範圍必須填有線或無線",
            "ts.max" => "耳機傳輸 範圍必須有線或無線",
            "price.required" => "耳機價格 為必填",
            "price.min" => "耳機價格 範圍必須介於1~500之間",
            "price.max" => "耳機價格 範圍必須介於1~500之間",
        ];
    }    
}
