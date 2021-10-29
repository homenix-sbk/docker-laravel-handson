<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    public static $rules = array(
        'genderId' => 'required|min:0|max:3',
        'genderName' => 'required|min:0|max:6',
    );

    public function getData() {
        return $this->genderName;
    }
}
