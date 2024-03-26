<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getApi() {

        $data= Http::acceptJson()->get('https://digi-api.com/api/v1/digimon');

       $api = json_decode($data);
            


      

    
        return view('welcome')->with('api',$api);
    }
 


}
