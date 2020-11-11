<?php

namespace App\Http\Controllers;


use App\Models\RouterList;
use App\Models\RouterUser;
use session;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view("user.login");
    }
    public function register(){
        return view("user.register");
    }
    public function login(Request $request){
        $u = $request->input('user');
        $p = $request->input('pass');

        $res = RouterUser::where('user',$u)->where('pass',$p)->first();
        if ($res->count() == 1){
            session(['uname' => $res['name']]);
            session(['uid' => $res['user_id']]);
            $router = RouterList::where('user_id',$res['user_id'])->get();
            if ($router->count() == 0){
                return view("router.addrouter");
            }else{
                return view("router.allrouter",compact('router'));
            }

        }else{
            return view("user.login");
        }
    }
    public function adduser(Request $request){
        $n = $request->input('name');
        $u = $request->input('user');
        $p = $request->input('pass');
        $p2 = $request->input('pass2');
         $uid = rand(1000,9999);
        if ($p == $p2){
            RouterUser::create([
                'name' => $n,
                'user' => $u,
                'pass' => $p,
                'user_id' => $uid,
                'user_status' => 0,
            ]);
            $_POST = array();
            return view("user.login");
        }
        else{
            return back();
        }
    }

}
