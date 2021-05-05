<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
//controller da rota login 

class loginController extends Controller
{
    
    public function index(){
        return view ('site.login');
    }

    // metodo autenticar recebendo dados via post da rota login ... (receber o  Requeste e tratar as requisições $request )
    public function autenticar (Request $request) {

        //regras de validação  ======>  criar $regras recebendo um [array associativo [ name dos input do campo no formulario login ] // => passando a regra de validação 'email' e 'required = apenas q exista informação'
        $regras = [ 
            'usuario' =>  'email',
            'senha' => 'required'
        ];

        //mensagens de feedback para as regras de validação  

        $feedback = [
            'usuario.email' => 'O campo usuario (e-mail) é obrigatório',
            'senha.required' => 'o campo senha é obrigatório'
        ];

        //recuperar o $request que recebo como parametro do metodo autenticar $request ->  e chamar o metodo validate , passando as regras e array associativo do feedback
        //implementar redirect no formulario  o name="usuario" value="{{ route('site.login')}}"
        $request->validate($regras, $feedback);

        //recuperar os parametros do inputs do formulario criando variavel de acordo com a coluna do banco
        //$email pegando o obj  $request, metodo get , pegando o ('value')
        $email =  $request->get('usuario');
        $password = $request->get('usuario');

        //iniciar o model user  == trazer o model use App\User;
        //variavel $user que vai receber um new user ...  a partir dese model $existe consultar o banco
        $user = new User();
        // 'email' tem que ser igual a variavel $email.... 'password' tem que ser igual a variavel $password  -> metodo get para retornar um coleção de registro
        $existe = $user->where('email', $email)->where('password', $password)->get()->first();
        
        //retorna o registro da variavel 
        $existe = $existe;
        $request->all();

        
    }

}


//passando os parametro de recuperação 


//iniciar model$user = new User();$existe = $user->where('email', $email);