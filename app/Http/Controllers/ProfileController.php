<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
        $name = "Donuld Trump";

        $age = 75 ;

        $data = array([
            
            "id" => $id,
            "name" => $name,
            "age" => $age,

        ]);

        $cookie_name = 'access_token';

        $value= '123-XYZ';

        $minutes = 1;

        $path = '/';


        $domain = $_SERVER['SERVER_NAME'];

        $secure = false;

        $httpOnly = true;

        return response($data, $status = 200)->cookie($cookie_name, $value, $minutes, $path, $domain, $secure, $httpOnly);


    }
}
