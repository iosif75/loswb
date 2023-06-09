<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class TestController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function callFromUrl()
    {

        echo app()->getLocale();
        
        return view('main');
    }
}
