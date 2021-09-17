<?php

namespace App\Http\Controllers;

use App\Traits\APITrait;

class HomeController extends Controller {
    use APITrait;
    public function index() {

        return view('panel.paginas.index');
    }

    public function minor()
    {
        return view('panel.paginas.minor');
    }
}
