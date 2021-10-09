<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class searchController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      
        $responsearray=[];
        return view('search.index',compact('responsearray'));
    }

    public function edit()
    {
        $search=request('validationCustom01');
        $getstrg=('https://callcenter.innovacion.gob.pa/ws_pd/consulta_vac_persona.php?buscado=' . $search  .'&token=cf707bb196a16c156c9e79ef010&username=AIGGP233&password=7202e976031fcc7fa15927111');

        $response = Http::get($getstrg);
        
        $responsearray=$response->json();
       

        return view('search.index',compact('responsearray'));
    }
}
