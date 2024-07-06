<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class MobilUpdateRequest extends FormRequest
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
                'nama'=> 'required',
            'slug'=>'required',
            'harga'=>'required',
            'kondisi_fisik'=>'required',
            'spesifikasi'=>'required',
            'umur_laptop'=>'required',
            'daya_tahan_batterai'=>'required',
            'ketersediaan'=>'required',
        ];
    }
}
