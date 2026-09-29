<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ConteudoModel;
class ConteudoController extends BaseController
{
    protected $helpers = ['url'];
    
    public function index(): string 
    {
     
        //1. Instancia o model
        $conteudoModel = new ConteudoModel();
        
        //2. Busca o registro com id = 1
        $dados["conteudo"] = $conteudoModel->find(1);
        
        //3. Envia os dados para a view 'home'
        return view ('home', $dados);
    }
    
//PAGINA DE CONTATO-----------------------------------------------------


    public function contato(): string
{   
    $conteudoModel = new ConteudoModel();
    $dados['conteudo'] = $conteudoModel->find(3);

    return view ('contato', $dados);
}
//PAGINA DE Ofertas-----------------------------------------------------


    public function ofertas(): string
{
    $conteudoModel = new ConteudoModel();
    $dados['conteudo'] = $conteudoModel->find(8);
    
    return view ('ofertas', $dados);
}
//PAGINA DE HORTFRUIT-----------------------------------------------------
    


    public function hortfruit(): string
{
    $conteudoModel = new ConteudoModel();
    $dados['conteudo'] = $conteudoModel->find(7);

    return view ('hortfruit', $dados);
}
//PAGINA DE SOBRE--------------------------------------------------------



    public  function sobre(): string
{
    $conteudoModel = new ConteudoModel();
    $dados['conteudo'] = $conteudoModel->find(9);

    return view ('sobre', $dados);
}
}