<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            //
            'design_Name'=>'required|string|max:25',
            'description'=>'required',
            'price'=>'required|numeric|min:0',
            'category'=>'required|in:Gowns,Two-Piece,Wedding-Attire,ready-to-wear,Dinner-Wear',
            'fabric'=>'required|string',
            'size'=>'required|string',
            'img_path'=>'required|array|min:1|max:3',
            'img_path.*'=>'image|mimes:jpg,jpeg,png|max:2048',
        ];
    }
}
