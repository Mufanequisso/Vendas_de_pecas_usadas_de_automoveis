<?php

namespace App\Controllers;
use App\Models\JantesModel;


class Home extends BaseController
{
    public function index()
    { 

        
        
        return view('home');
    }
    public function abarth(){
        return view('abarth');
    }

    public function pneus(){
        return view('pneus');
    }

    public function jantes(){

         $dados = $data['jantes']= $this->getJantes();


        // $jantes = new JantesModel();
        // $data['crud']=$jantes->findAll();


        return view('jantes',$data);
    }

    private function getJantes(){

        $db= db_connect();
        $dados= $db->query("SELECT * FROM jantes")->getResultObject();
        $db->close();

        return $dados;
        
    }

    public function create(){
        return view('Manager');
    }

    public function adicionar(){
        $jantesModel = new JantesModel();
       
        $file = $this->request->getFile('Imagem');

        if ($file->isValid() && ! $file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/',$imageName);
        }

        $data = [
            'ano' => $this-> request->getPost('Nome'),
            'fabricante' => $this-> request->getPost('Fabricante'),
            'cor'  => $this-> request->getPost('Cor'),
            'preco'  => $this-> request->getPost('Preco'),
            'imagem'  => $imageName,
            
            
        ];
        
        $jantesModel->save($data);
        return redirect('form');
    }

}
