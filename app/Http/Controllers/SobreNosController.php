<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class SobreNosController extends Controller
{

    public function __construct()
    {
        $this->middleware('log.acesso');
    }

    public function sobreNos() {
        return view('site.sobre-nos');
    }
}
