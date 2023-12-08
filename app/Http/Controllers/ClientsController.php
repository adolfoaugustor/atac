<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class ClientsController extends Controller
{
    public function index(){
        $page = Voyager::model('Page')->where('slug', 'clientes')
            ->where('status','=', 'ACTIVE')->firstOrFail();
        $clients = Client::all();
            
        return view('page-clientes', [
            'page' => $page, 
            'clients' => $clients
        ]);
    }
}
