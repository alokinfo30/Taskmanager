<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'status',
        'attachment'
    ];

    // Define validation rules (optional)
    public static function rules()
    {
        return [
            'title' => 'required|max:255',
        ];
    }
}
