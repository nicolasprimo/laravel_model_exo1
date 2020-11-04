<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classe;
class ClasseController extends Controller
{
    public function index(){
        $datas = Classe::all();
        return view('classes',compact('datas'));
    }
}
