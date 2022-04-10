<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        if(0==$id){
            $products = DB::select("SELECT id,libille,prix_intial,cover  from articles  order by libille  desc");
        }else{
            $products = DB::select("SELECT id,libille,prix_intial,cover  from articles where categorie_id = $id order by libille  desc");
        }
        
        return new JsonResponse($products);
        
    }

   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

  
}
