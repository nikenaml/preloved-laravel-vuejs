<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class TransferRequest extends FormRequest
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
            'nama_transfer' => 'required|max:255',
            'email_transfer' => 'required|email|max:255',
            'tgl_transfer' => 'required|max:255',
            'bank_customer' => 'required|max:255',
            'no_rek_customer' => 'required|max:255',
            'total_bayar' => 'required|max:255'
        ];
    }
}