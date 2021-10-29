<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{  
    public static $rules = array(
        'departmentId' => 'required|min:0|max:3',
        'departmentName' => 'required|min:0|max:10',
    );

    public function getData() {
        return $this->departmentName;
    }
}
