<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {

        if (request()->routeIs('posts.store')) {
            $imageRules = 'image|required';
        } elseif (request()->routeIs('posts.update')) {
            $imageRules = 'image|sometimes';
        }
        


        return [
            'title' => 'required',
            'content' => 'required',
            'image' => $imageRules,
            'category' => 'required'
        ];

    }

    protected function prepareForValidation()
    {
        if ($this->image == null) {
            $this->request->remove('image');
        }
    }



}
