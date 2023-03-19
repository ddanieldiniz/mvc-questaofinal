<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ContatoController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function contatoDev(){

        return view('contatodev');
    }
}
