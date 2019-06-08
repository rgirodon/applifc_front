<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;

class FrontController extends Controller
{
    public function index() {
        
        return view('tpl_index');
    }
    
    public function manifest() {
        
        $contents = View::make('tpl_manifest');
        
        $response = Response::make($contents, 200);
        
        $response->header('Content-Type', 'application/json');
        
        $response->header('Content-disposition', 'inline; filename="manifest.json"');
        
        $response->header('Cache-control', 'public');
        
        return $response;
    }
}
