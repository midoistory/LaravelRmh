<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSiswasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nisn' => 'required|integer|min:10',
            'nis' => 'required|integer|min:8',
            'nama' => 'required|string',
            'id_kelas' => 'required|integer',
            'alamat' => 'required|string',
            'telp' => 'required|string|min:11',
            'id_spp' => 'required|integer',
        ];
    }
}
