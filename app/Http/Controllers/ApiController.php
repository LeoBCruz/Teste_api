<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    function request($endpoint='',$parameter=''){
        $url = "http://127.0.0.1:8000/api" . $endpoint . "/" . $parameter;
        $response = @file_get_contents($url);
        
        return json_decode($response, true);
    }
}
