<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "Hola hola";
    }

    public function create(){
        return "Crea un curso";
    }

    public function inf($curso){
        return "Bienvenido al curso $curso";
    }
}
