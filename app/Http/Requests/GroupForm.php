<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroupForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return ($this->user()->hasRole('admin') || $this->user()->hasRole('manager'));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'slug' => 'required|alpha_dash|string',
            'title' => 'required|string',
            'description' => 'required|string',
            'order' => 'numeric',
        ];
    }
}
