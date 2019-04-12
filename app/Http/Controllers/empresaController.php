<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class empresaController extends Controller
{
    public function sobre()
    {
        $endereco = "R: José Geraldo Alquimim Número:222 Bairro:Cidade Jardim ";
        $historia = "Esta empresa foi criada para dispor os melhores produtos para os nossos clientes. ";
        return view('sobre')->with('End', $endereco)->with('Historia',$historia);
        //return view('sobre')->withEmail($dado);
    
    }
    public function contato()
    {
        $dado = "elb@elb.com";
        $Telefone = "38 3223-0000";
        return view('contato')->with('email', $dado)->with('Telefone',$Telefone);
        
    
    }
    public function produtos()
    {
        $produto1 = "sapato";
        $preco = "100R$";
        return view('produtos')->with('Produto', $produto1)->with('Pre',$preco);
        
    
    }
}
