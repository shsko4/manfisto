<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ManfistoRequest extends FormRequest
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
            //'man_no' => 'unique:manfistos,man_no,NULL,id,transporter_id,' . $this->man_no,
            'man_no' => [
                'required',
                Rule::unique('manfistos')->where(function ($query) {
                    return $query->where('man_no', $this->man_no)
                    ->where('transporter_id', $this->transporter_id);
                })

            ],
            'transporter_id' => 'required',
                'car_no' => 'required',
                'dest' => 'required',
                'nolon' => 'required',
            //'transporter_id' => 'unique:manfistos,transporter_id,NULL,id,man_no,' . $this->man_no,
        ];
    }

    public function messages()
    {
        return [
            'man_no.unique' => 'رقم المنفستو موجود مسبقاً!',
            'transporter_id.required' => 'أدغ اسم الترحيلات',
            'car_no.required' => 'ادخل رقم العربة',
            'dest.required' => 'ادخل الوجهه',
            'nolon.required' => 'ادخل قيمة النولون',
        ];
    }
}
