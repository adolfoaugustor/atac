<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class ServicesController extends Controller
{
    public function index(){
        $page = Voyager::model('Page')->where('slug', 'servicos')
            ->where('status','=', 'ACTIVE')->firstOrFail();
        $servicos = Servico::all();
            
        return view('page-servicos', [
            'page' => $page,
            'servicos' => $servicos
        ]);
    }
}
