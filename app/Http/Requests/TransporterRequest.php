<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class TransporterRequest extends FormRequest
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
            'tin' => ['required',Rule::unique('transporters', 'tin')->ignore($this->transporter),'max:12','min:12'],
            'name' => 'required|max:255',
            'email' => 'nullable|email',
        ];
    }

    public function messages()
    {
        return [
            'tin.required' => 'يرجي ادخال الرقم التعريفي ',
            'tin.unique' => 'الرقم التعريفي موجود مسبقا',
            'tin.max' => 'الرقم التعريفي يتكون من 12 خانه رقميه',
            'tin.min' => 'الرقم التعريفي يتكون من 12 خانه رقميه',
            'name.max' => 'إسم الترحيلات يجب الا يتجاوز 255 حرفا',
            'email.email' => 'صيغة بريد إلكتروني غير صحيحة'
        ];
    }
}
