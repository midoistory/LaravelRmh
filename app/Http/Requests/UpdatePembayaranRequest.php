<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePembayaranRequest extends FormRequest
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
            'id_petugas' => 'required',
            'nisn' => 'required',
            'tgl_bayar' => 'required|date',
            'bulan_bayar' => 'required|string',
            'tahun_bayar'   => 'required|integer|min:4',
            'id_spp' => 'required',
            'jumlah_bayar' => 'required|integer',
        ];
    }
}
