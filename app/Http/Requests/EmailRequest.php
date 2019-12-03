<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailRequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE':
                return [];
            case 'POST': {
                return [
                    'email' => 'required|min:5|regex:/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',
                    'phone' => 'required|min:9|max:9',
                    'file' => 'required|mimes:pdf',
                ];
            }
            case 'PUT': {
                return [
                    'name' => 'required|min:5',
                    'description' => 'required|min:30',
                    'level_id' => [
                        'required',
                        Rule::exists('levels', 'id')
                    ],
                    'category_id' => [
                        'required',
                        Rule::exists('categories', 'id')
                    ],
                    'picture' => 'sometimes|image|mimes:jpg,jpeg,png',
                    'requirements.0' => 'required_with:requirements.1',
                    'goals.0' => 'required_with:goals.1',
                ];
            }
        }
    }
}
