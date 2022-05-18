<?php

namespace App\Http\Controllers;

use App\Services\App;

class HomeController
{
    public function index()
    {
        // $app = new App();
        // dd($app);
        $b = 
        [
            "helo" => "2",
            "b" => "1"
        ];
        return json($b);
    }
}