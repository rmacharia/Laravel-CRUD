<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'case_id',
        'client_name',
        'case_type',
        'status',
        'priority',
        'hearing_date',
        'description',
            ];
}
