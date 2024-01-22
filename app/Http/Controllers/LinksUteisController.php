<?php

namespace App\Http\Controllers;

use App\Models\LinkUtil;
use TCG\Voyager\Facades\Voyager;

class LinksUteisController extends Controller
{
    public function index(){
        $page = Voyager::model('Page')->where('slug', 'links')
            ->where('status','=', 'ACTIVE')->firstOrFail();
        $links = LinkUtil::all();

        return view('page-links-uteis', [
            'page' => $page,
            'links' => $links
        ]);
    }
}
