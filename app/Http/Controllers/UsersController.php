<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends Controller
{
    public function index($flag = false, $number = false)
    {

        $winFlag = 0;
        $res = DB::select("SELECT * FROM users");
        $win = DB::select("SELECT u.name, u.last_name, u.phone, c.name as city  
            FROM wins w 
            INNER JOIN users u ON u.id = w.user_id
            INNER JOIN cities c ON c.id = u.city_id");
        if(count($res) < 10){
            $data = str_pad(count($res), 2, "0", STR_PAD_LEFT);
        }
        if(count($win) > 0){
            $winFlag = 1;
        }
        return view('main', compact('data', 'win', 'winFlag'));

    }

    public function createUser()
    {
        $departments = DB::select("SELECT * FROM departments");
        $cities = DB::select("SELECT * FROM cities");
        return view('create', compact('departments', 'cities'));
    }

    public function show()
    {
        $data = DB::select("SELECT u.id, 
                u.name,
                u.last_name,
                u.phone,
                u.email,
                c.name as city_name
            FROM users u
                INNER JOIN departments d ON d.id = u.department_id
                INNER JOIN cities c ON c.id = u.city_id
        ");
        return view('get', compact('data'));
    }

    public function new(Request $request)
    {
        if(!($request->post('check'))){
            return redirect()->route("user.create")->with("error", "Debe aceptar el campo de habeas data."); 
        }
        if(($request->post('department')) == 0 ||($request->post('city')) == 0){
            return redirect()->route("user.create")->with("error", "Debe llenar todos los campos."); 
        }
        
        $user = new Users;
        $user->name = $request->post('name');
        $user->last_name = $request->post('last_name');
        $user->document = $request->post('document');
        $user->phone = $request->post('phone');
        $user->email = $request->post('email');
        $user->department_id = $request->post('department');
        $user->city_id = $request->post('city');
        $user->save();

        return redirect()->route("home")->with("success", "Registrado correctamente.");
    }

    public function exportExcel(){
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
