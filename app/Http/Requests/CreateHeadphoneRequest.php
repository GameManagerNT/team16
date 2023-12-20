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
        return true ;
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
            'genre'=>'required|string|min:2|max:191',
            'hz' => 'required|string|min:1|max:50000',
            'spl'=> 'required|numeric|min:0|max:120',
            'oi' => 'required|numeric|min:0|max:600',
            'weight' =>'required|numeric|min:0|max:2000',
            'ts' => 'required|string|min:0|max:2',
            'price' => 'required|numeric|min:0|max:50000'
        ];
    }
    public function messages()
    {
        return[
        "tid.required" =>"廠牌編號 為必填",
        "name.required" =>"型號 為必填",
        "name.min" =>"型號 至少需2個字元",
        "name.max" =>"型號 不能超過191個字元",
        "genre.required" =>"類型 為必填",
        "genre.min" =>"類型 至少需2個字元",
        "hz.required" =>"響應頻率(HZ) 為必填",
        "hz.min" =>"響應頻率(HZ) 必須介於1~50000hz之間",
        "spl.required" =>"聲壓級(db/mW) 為必填",
        "spl.numeric" =>"聲壓級(db/mW) 必須為數字",
        "spl.min" =>"聲壓級 必須介於0-120(db/mW)之間",
        "spl.max" =>"聲壓級 必須介於0-120(db/mW)之間",
        "oi.required" => "抗阻(Ω) 為必填",
        "oi.numeric" => "抗阻(Ω) 必須為數字",
        "oi.min" => "抗阻 必須介於0~600Ω之間",
        "oi.max" => "抗阻 必須介於0~600Ω之間",
        "weight.required"=> "重量(g) 為必填",
        "weight.numeric"=> "重量(g) 必須為數字",
        "weight.min"=> "重量 必須介於 0-2000(g)之間",
        "weight.max"=> "重量 必須介於 0-2000(g)之間",
        "ts.required" => "傳輸(有線/無線) 為必填",
        "ts.min" => "傳輸 填有線/無線",
        "ts.max" => "傳輸 填有線/無線",
        "price.required" =>"價格(NTD) 為必填 ",
        "price.numeric" =>"價格(NTD) 必須為數字 ",
        "price.min" =>"價格 必須介於1-50000(NTD)之間",
        "price.max" =>"價格 必須介於1-50000(NTD)之間",
        ];

    }
}
