<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{ 
    public static $rules = array(
        'positionId' => 'required|min:0|max:3',
        'positionName' => 'required|min:0|max:7',
    );

    public function getData() {
        return $this->positionName;
    }
}
