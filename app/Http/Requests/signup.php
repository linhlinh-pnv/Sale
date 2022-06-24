<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signup extends FormRequest
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
     * @return array
     */
   
        public function rules()
        {
            return [
                'hoten' => 'required','min:3','max:20',
                'tuoi' => 'required|integer|min:16|max:100',
                'ngaysinh' => 'required','date',
                'cmnd' => 'required|digits_between:9,10',
                'email' => 'required|email|ends_with:@passerellesnumeriques.org'
            ];
        }
        public function messages(){
            return[
                // 'hoten.required' => 'Phai nhap du ho ten',
                // 'tuoi.required' => 'Phai nhap du ho tuoi',
                // 'gaysinh.required' => 'Phai nhap du ho tuoi',
                // 'phone.numeric' => 'vui long kiem tra lai so dien thoai',
                // 'web.string' => 'vui long kiem tra lai ky tu',
                // 'address.string' => 'vui long nhap lai dia chi',
            ];
        }
    };