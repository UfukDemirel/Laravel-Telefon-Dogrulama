<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
        public function welcome(){
            $data = Login::where('phone', '5531132893')->first();

            $data = DB::table('login')
                ->select('random')
                ->where('phone', '=', '5531132893')
                ->first();

            return view('welcome');
        }
}
