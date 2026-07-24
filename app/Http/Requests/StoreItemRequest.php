<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'category_id' => ['required', 'exists:categories,id'],
            'code' => ['required', 'string', 'max:50', 'unique:items,code'],
            'name' => ['required', 'string', 'max:255'],
            'stock' => ['required', 'integer', 'min:0'],
            'condition' => ['required', 'in:Baik,Rusak Ringan,Rusak Berat'],
            'location' => ['required', 'string', 'max:255'],
            'entry_date' => ['required', 'date'],
            'description' => ['nullable', 'string'],
        ];
    }
}
