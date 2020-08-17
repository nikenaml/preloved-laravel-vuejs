<?php
// form request untuk membuat validasi dari semua request yang nanti akan masuk ke website
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
        // return false;
        // buat true agar bisa digunakan
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
            'categories_id' => 'required|integer|exists:categories,id',
            'genders_id' => 'required|integer|exists:genders,id',
            'name' => 'required|max:255',
            'type' => 'required|max:255',
            'description' => 'required|max:556',
            'price' => 'required|max:255',
            'quantity' => 'required|max:255'
        ];
    }
}
