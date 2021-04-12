<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title'=> 'required|max:30',
            'description'=> 'nullable|max:50',
            'price'=> 'required|regex:/^\d+(\.\d{1,2})?$/',
            'discount'=> 'required|regex:/^\d+(\.\d{1,2})?$/',
            'category_id'=> 'required',
            'item_id'=> 'required',
            'brand_id'=> 'required',
            'product_type_id'=> 'required',
        ];
    }
}
