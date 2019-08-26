<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouponStoreRequest extends FormRequest
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
        $rules = [
            'name' => 'required',
            'slug' => 'required|unique:coupons,slug,' . $this->coupon,
            'startDate'=> 'required',
            'endingDate'=> 'required',
            'idBrand'=> 'required',

        ];

        /*if($this->get('imgUrl')){
            $rules = array_merge($rules,['imgUrl'=>'mimes:jpg,jpeg,png,gif']);
        }*/

        return $rules;
    }
}
