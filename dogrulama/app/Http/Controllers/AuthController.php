<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\Types\Expression;
use SoapClient;

class AuthController extends BaseController
{
    public function index(Request $request){

        try {
            $client = new SoapClient("http://soap.netgsm.com.tr:8080/Sms_webservis/SMS?wsdl");


            $email = $request->email;
            $numara = $request->telefon;

            $msg = $this->random($numara, $email);
            $gsm = $request->telefon;

            $Result = $client->smsGonder1NV2(
                array(
                    'username' => '8508402649',
                    'password' => '383800',
                    'header' => '8508402649',
                    'msg' => $msg,
                    'gsm' => $gsm,
                    'filter' => '',
                    'startdate' => '',
                    'stopdate' => '',
                    'encoding' => ''
                ));
            return view('index', compact('numara'));

        } catch (Exception $exc) {
            // Hata olusursa yakala
            echo "Soap Hatasi Olustu: " . $exc->getMessage();
        }
    }

    public function dogrulapost(Request $request)
    {
        $data = DB::table('login')
            ->select('random')
            ->where('phone', '=', $request->no)
            ->first();

        if ($data->random == $request->kod) {
            return view('onay');
        } else {
            
            return view('exit');
        }
    }

    public function random($numara, $email)
    {
        $randomNumber = random_int(100000, 999999);

        DB::table("login")->insert([
            "email" => $email,
            "phone" => $numara,
            "random" => $randomNumber
        ]);

        return $randomNumber;
    }
}
