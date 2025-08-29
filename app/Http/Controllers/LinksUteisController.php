<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\LinkUtil;
use TCG\Voyager\Facades\Voyager;

class LinksUteisController extends Controller
{
    public function index(){
        $page = Voyager::model('Page')->where('slug', 'links')
            ->where('status','=', 'ACTIVE')->firstOrFail();

        $categorias = Category::orderBy('order')->get();
        $links = LinkUtil::all();

        return view('page-links-uteis', [
            'page' => $page,
            'links' => $links,
            'categorias'=> $categorias
        ]);
    }
}
