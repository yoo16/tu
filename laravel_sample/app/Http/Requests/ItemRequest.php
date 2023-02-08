<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Lang;

class ItemRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'price' => ['required', 'min:0', 'integer'],
        ];
    }

    public function messages()
    {
        return [
            // 'name.required' => '商品名を入力してください',
            // 'price.required' => '価格を入力してください',
            // 'price.integer' => '価格を正しく入力してください',
            // 'price.min' => '価格を正しく入力してください',
        ];
    }

    public function attributes()
    {
        return [
            'name' => __('messages.item_name'),
            'price' => __('messages.price'),
        ];
    }

}
