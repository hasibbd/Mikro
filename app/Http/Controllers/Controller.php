<?php

namespace App\Http\Controllers;

use App\Router\routerosAPI;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use session;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function RouterAPI(){
        $API = new routerosAPI();
        $API->debug = false;
        $API->connect($_SESSION['ip'], $_SESSION['user'],  $_SESSION['pass']);
        return $API;
    }
}
