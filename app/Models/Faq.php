<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    // Your table name is singular, so we must define it
    protected $table = 'faq';

    // Mass assignable fields
    protected $fillable = [
        'en_question',
        'en_answer',
    ];
}
