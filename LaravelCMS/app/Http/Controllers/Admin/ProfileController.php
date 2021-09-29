<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    public function __construct(){ 
        $this->middleware('auth'); // tem que está logado para acessar este controller
    }

    public function index(){
        
        $loggedId = intval(Auth::id()); // recebe o id do usuário logado "inteiro"

        $user = User::find($loggedId); // busca o usuário logado 

        if($user){
            return view ('admin.profile.index', [ // faz a chamada do model 
                'user' => $user
            ]);
        }

        return redirect()->route('admin');

    }


    public function save(Request $request)
    { 
        $loggedId = intval(Auth::id()); // recebe o id do usuário logado "inteiro"
        $user = User::find($loggedId);

        if($user){
            $data = $request->only([
                'name',
                'email',
                'password',
                'password_confirmation'
            ]);

            $validator = Validator::make([
                'name' => $data['name'],
                'email' => $data['email']
            ],[
                'name' => ['required', 'string', 'max:100'],
                'email' => ['required', 'string', 'email', 'max:100']
            ]);


        // 1. altera o nome
        $user->name = $data['name'];
        // 2. alteração do e-mail
        if($user->email != $data['email']) {
            $hasEmail = User::where('email', $data['email'])->get();
            if(count($hasEmail) === 0 ){
                $user->email = $data['email'];
            }else{
                $validator-> errors()->add('email', __('validation.unique', [
                    'attribute' => 'email',
                    
                ]));
            }

        }
        // 3. alteração da senha
        // 3.1 verificar se o usuário digitou a senha
        if(!empty($data['password'])) {
        // 3.2 verificar se a confirmação está ok
            if(strlen($data['password']) >= 4) {
                if($data['password'] === $data['password_confirmation']) {
                    // 3.2 alterar a senha
                        $user->password = Hash::make($data['password']);
                    }else{
                        $validator-> errors()->add('psssword', __('validation.confirmed', [
                            'attribute' => 'password'
                        ])); 
                    }
            }else {
                $validator-> errors()->add('psssword', __('validation.min.string', [
                    'attribute' => 'password',
                    'min' => 4
                ]));
            }
        }

        if(count( $validator->errors()) > 0) {
            return redirect()->route('profile', [
                'user' => $loggedId
            ])->withErrors($validator);
        }
            
            $user->save();

            return redirect()->route('profile')
                ->with('warning', 'Informações alteradas com sucesso!');
        }

    return redirect()->route('profile');
    }
}
