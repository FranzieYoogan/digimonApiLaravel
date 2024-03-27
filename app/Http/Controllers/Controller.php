<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getApi(Request $request) {

        $search = $request->input('search');

        if(isset($search)) {
            
        $url = "https://digi-api.com/api/v1/digimon/";

        $search_query = $url . $search;

        $data= Http::acceptJson()->get("$search_query");

 
       $api = json_decode($data);

       return view('welcome')->with('api',$api);
       
        } else {

            return view('welcome');
        }



     

        

    
    
    }
 


}
