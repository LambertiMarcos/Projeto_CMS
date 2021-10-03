<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class SettingController extends Controller
{
    public function __construct(){ 
        $this->middleware('auth'); // tem que está logado para acessar este controller
    }

    public function index() {

        $settings;
        $dbsettings = Setting::all(); // obtendo as informações do banco de dados

        foreach ($dbsettings as $dbsetting) {
            $settings[ $dbsetting['name']] = $dbsetting['content'];
        }

        return view('admin.settings.index', [
            'settings' => $settings
        ]);

    }

    public function save(Request $request) {

        $data = $request->only([ // recebe as informações do formulário
            'title','subtitle','email','bgcolor','textcolor'
        ]);

        // validar as Informações
        $validator = $this->validator($data);

        if($validator->fails()) {// redirecionar
            return redirect()->route('settings')
            ->withErrros($validator);
        }
        foreach ($data as $item => $value) {

            Setting::where('name', $item)->update([
                'content' => $value
            ]);
        }

        return redirect()->route('settings')
            ->with('warning', 'Informações alteradas com sucesso!');

    }

    protected function validator($data) {
        return Validator::make($data, [
            'title'    => ['string', 'max:100'],
            'subtitle' => ['string', 'max:100'],
            'email'    => ['string', 'email'],
            'bgcolor'  => ['string', 'regex:/#[a-zA-Z0-9]{6}/i'],
            'textcolor'=> ['string', 'regex:/#[a-zA-Z0-9]{6}/i']
        ]);
    }


}
