<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class GoodsRequest extends Request
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
            //goods name is required
			"name" => "required",
			//category id is required
			"cid" => "required",
			//the goods price is required and must be a number_format
			"price" => "required|numeric",
			//the phote is required
			"im" => "required"
        ];
    }
	
	public function messages()
	{
		return [
			"name.required" => "商品名称未填写",
			"cid.required" => "分类未选择",
			"price.required" => "价格未填写",
			"price.numeric" => "商品价格应为数字",
			"im.required" => "商品图片要上传",
		
		];
	}
}