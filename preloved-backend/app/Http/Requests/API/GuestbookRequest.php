<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class GuestbookRequest extends FormRequest
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
            'nama_tamu' => 'required|max:255',
            'email_tamu' => 'required|email|max:255',
            'asal_tamu' => 'requied',
            'nohp_tamu' => 'required|max:255',
            'komentar_tamu' => 'required|max:255',
            'nilai_tamu' => 'required',
        ];
    }
}
