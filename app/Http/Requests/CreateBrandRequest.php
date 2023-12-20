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
            'name'=>'required|string|min:1|max:50',
            'country' =>'required|string|min:1|max:50',
            'since' => 'required',
            'founder' =>'required|string|min:1|max:20',
            'headquarters' =>'required|string|min:1|max:1000',
            'web' =>'required|string|min:3|max:500',
        ];
    }

    public function messages()
    {
        return [
         "name.required" =>"品牌名稱 為必填",
         "name.min" =>"品牌名稱 至少要1個字",
         "name.max" =>"品牌名稱 不可超過50個字",
         "country.required"=>"國家 為必填",
         "country.min" =>"國家 至少要1個字",
         "country.max" =>"國家 不可超過50個字",
         'since.required' => "成立日期 為必填",
         "founder.required" =>"創辦人 為必填",
         "founder.min"=>"創辦人 至少要1個字",
         "founder.max"=>"創辦人 不可超過20個字",
         "headquarters.required"=> "總部 為必填",
         "headquarters.min"=>"總部 地址至少1個字",
         "headquarters.max"=>"總部 地址不能超過1000字",
         "web.required" => "網址(www) 為必填 ",
         "web.min" =>"網址 至少要打3個字",
         "web.max" =>"網址 不能超過500字",

       


        ];
}
}