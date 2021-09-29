<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct(){ 
        $this->middleware('auth'); // tem que está logado para acessar este controller
    }

    public function index() {

        return view('admin.settings.index');

    }
}
