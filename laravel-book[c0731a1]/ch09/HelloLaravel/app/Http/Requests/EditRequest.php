<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditRequest extends Request
{
    /**
     * 取得使用者是否授權執行此請求
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * 取得請求的驗證規則
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'tel'  => 'required|string'
        ];
    }
    
    /**
    * 自定義錯誤訊息
    *
    * @return array
    */
    public function messages()
    {
        return [
            'required' => '不可為空白',
            'string'  => '須為字串'
        ];
    }
}
