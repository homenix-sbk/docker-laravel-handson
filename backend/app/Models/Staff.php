<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gender;
use App\Models\Position;
use App\Models\Department;

class Staff extends Model
{
    protected $table = 'staffs';

    protected $guarded = array('no');
    
    public static $rules = array(
        'empId' => 'required|min:0|max:4',
        'name' => 'required|min:0|max:7',
        'age' => 'integer|min:0|max:150',
        'joinDay' => 'required|date|date_format:Y-m-d',
        'genderId' => 'required|min:0|max:3',
        'positionId' => 'required|min:0|max:3',
        'departmentId' => 'required|min:0|max:3',
        'retire' => 'integer|min:0|max:1',
    );

    //外部キー...リレーション機能(1対1)
    public function gender() {
        return $this->hasOne('App\Models\Gender');
    }
    public function position() {
        return $this->hasOne('App\Models\Position');
    }
    public function department() {
        return $this->hasOne('App\Models\Department');
    }
}
