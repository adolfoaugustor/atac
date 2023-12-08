<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class AbountController extends Controller
{
    public function index(){
        $page = Voyager::model('Page')->where('slug', 'sobre')
            ->where('status','=', 'ACTIVE')->firstOrFail();
            
        return view('page-sobre', ['page' => $page]);
    }
}
