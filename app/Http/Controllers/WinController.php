<?php

namespace App\Http\Controllers;

use App\Models\Win;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class WinController extends Controller
{
    public function getWin(){
        $res = DB::select("SELECT * FROM users");
        if(count($res) > 4){
            $number = rand(1, count($res));
            $win = new Win;
            $win->user_id = $number;
            $win->save();

            $win = DB::select("SELECT u.name, u.last_name, u.phone, c.name as city FROM users u
            INNER JOIN cities c ON c.id = u.city_id WHERE u.id = ?", [$number]);
            $winFlag = 1;
        }
        $res = DB::select("SELECT * FROM users");
        if(count($res) < 10){
            $data = str_pad(count($res), 2, "0", STR_PAD_LEFT);
        }

        return view('main', compact('win', 'data', 'winFlag'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Win $win)
    {
        //
    }

    public function edit(Win $win)
    {
        //
    }

    public function update(Request $request, Win $win)
    {
        //
    }

    public function destroy(Win $win)
    {
        //
    }
}
