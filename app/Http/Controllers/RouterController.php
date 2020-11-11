<?php

namespace App\Http\Controllers;

use App\Models\RouterList;
use Illuminate\Http\Request;
use session;
class RouterController extends Controller
{
 public function Test(){
     $_SESSION['ip'] = "103.99.***.54";
     $_SESSION['user'] = "a***";
     $_SESSION['pass'] = "h****";

     $API = $this->RouterAPI();
         $getuser = $API->comm("/ppp/secret/print");
         print_r($getuser);

exit();
 }


 public function addrouter(Request $request){

     $n = $request->input('r_name');
     $ip = $request->input('r_ip');
     $u = $request->input('r_user');
     $p = $request->input('r_password');
     $i = $request->input('i_name');
     $rid = rand(1000,9999);
     RouterList::create([
         'r_name' => $n,
         'r_id' => $rid,
         'ip' => $ip,
         'user' => $u,
         'pass' => $p,
         'user_id' => session('uid'),
         'i_name' => $i,
     ]);
     $router = RouterList::where('user_id',session('uid'))->get();
         return view("router.allrouter",compact('router'));

 }
}
