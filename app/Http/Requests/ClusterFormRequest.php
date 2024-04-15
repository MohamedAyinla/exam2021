<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ClusterFormRequest extends FormRequest
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
            "nom"=> ["required", "string", Rule::unique("clusters", "nom")->ignore($this->route()->parameter('id'), 'idCluster')],
            "idFiliere" => ["required", 'exists:filieres,idFiliere'],
            "idVillage" => ["required", 'exists:villages,idVillage'],
        ];
    }
}
