<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Staff;
use App\Models\Gender;
use App\Models\Position;
use App\Models\Department;

class StaffController extends Controller
{
    public function index(Request $request) {
        $items = Staff::all();
        $param = ['items' => $items];              
        return view('index', $param);
    }

    public function post(Request $request) {
        $items = DB::select('select * from staffs'); 
        return $response;
    }

    public function add(Request $request) {
        return view('/add');
    }
    
    public function create(Request $request) {
        $param = [
            'empId' => $request->empId,
            'name' => $request->name,
            'age' => $request->age,
            'joinDay' => $request->joinDay,
            'genderId' => $request->genderId,
            'positionId' => $request->positionId,
            'depertmentId' => $request->depertmentId,
            'retire' => $request->retire,
        ];
        DB::table('staffs')->insert($param);
        return redirect('/');
    }

    public function edit(Request $request) {
        $item = DB::table('staffs')
            ->where('no', $request->no)
            ->first();
        return view('/edit', ['form' => $item]);
    }
        
    public function update(Request $request) {
        $param = [
            'empId' => $request->empId,
            'name' => $request->name,
            'age' => $request->age,
            'joinDay' => $request->joinDay,
            'genderId' => $request->genderId,
            'positionId' => $request->positionId,
            'depertmentId' => $request->depertmentId,
            'retire' => $request->retire,
        ];
        DB::table('staffs')
            ->where('no', $request->no)
            ->update($param);
        return redirect('/');
    }

    public function del(Request $request) {
        $item = DB::table('staffs')
            ->where('no', $request->no)
            ->first();
        return view('/del', ['form' => $item]);
    }
    
    public function remove(Request $request) {
        DB::table('staffs')
            ->where('no', $request->no)
            ->delete();
        return redirect('/');
    }

    public function show(Request $request) {
        $page = $request->page;
        $items = DB::table('staffs')
            ->offset($page * 3)
            ->limit(3)
            ->get();  
        return view('/show', ['items' => $items]);
    }

    public function rest(Request $request) {
        return view('/rest');
    }

    public function ses_get(Request $request) {
        $sesdata = $request->session()->get('msg');
        return view('/session', ['/' => $sesdata]);
    }

    public function ses_put(Request $request) {
        $msg = $request->input;
        $request->session()->put('msg', $msg);
        return redirect('/session');
    }
}
