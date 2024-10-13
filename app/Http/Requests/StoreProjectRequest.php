<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:200',
            'slug' => 'max:255',
            'image' => 'nullable|image|max:4084',
            'summary' => 'nullable',
            'type_id' => 'nullable'
        ];
    }

        public function messages(){
            return[
                "name.required" => "il nome e' obbigatorio",
                "name.max" => "il nome del progetto deve essere lungo al massimo :max caratteri",
                "image.image" => 'Il file deve essere un\' immagine valida',
                "image.max" => "il file deve essere grande al massimo :max kb"
            ];
        }
}
