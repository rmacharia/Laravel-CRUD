<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreTaskRequest extends FormRequest
{
    public function rules()
    {
        return [
            'case_id'=> [
                'required', 'string',
                        ],
            'client_name'=> [
                'required', 'string',
        ],
            'case_type'=> [
                'required', 'string',
        ],
            'status'=> [
                'required', 'string',
        ],
            'priority'=> [
                'required', 'string',
        ],
            'hearing_date'=> [
                'required', 'string',
        ],
            'description'=> [
                'required', 'string',
        ],
        ];
    }


}