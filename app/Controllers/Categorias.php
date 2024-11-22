<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CategoriaModel;

class Categorias extends BaseController
{
    public function index()
    {
        $categoriaModel = new CategoriaModel();
        echo view('Categoria', [
                'categoria' => $categoriaModel->findAll()
        ]);
    }

    public function edit($id)
    {
        $categoriaModel = new CategoriaModel();
        echo view('Categoria/edit', [
            'categoria' => $categoriaModel-> find($id)
        ]);
    }

    public function update($id){
        $categoriaModel = new CategoriaModel();
        if($this->validate('categorias')){
            $categoriaModel->update($id,[
                'titulo' => $this->request->getPost('titulo'),
            ]);
        }else{
            session()->setFlashData([
                'validation' => $this->validator
            ]);
            return redirect()-> back();
        }
        return redirect()-> back()->with('mensaje','Registro actualizado');
    }

    public function remove()
    {
        
    }
    
    public function delete($id)
    {
        $categoriaModel = new CategoriaModel();

        $categoriaModel -> delete($id);

        /* echo 'Categoria Eliminada'; */
        /* return redirect()->to('Categorias'); */
        return redirect()-> back()->with('mensaje','Registro eliminado');;
    }


    public function show($id)
    {
        //echo view('Categoria/new');
        $categoriaModel = new CategoriaModel();

        echo view('Categoria/show', [
            'categoria' => $categoriaModel-> find($id)
        ]);
    }

    public function new()
    {
       
        echo view('Categoria/new', [
            'categoria' => [
                'titulo' => ''
            ]
        ]);

    }

    public function create(){


        $categoriaModel = new CategoriaModel();

        if($this->validate('categorias')){

            $categoriaModel -> insert([
                'titulo' => $this->request->getPost('titulo')
            ]);


        }else{
            session()->setFlashData([
                'validation' => $this->validator
            ]);
            return redirect()-> back();
        }
        return redirect()->to('Categorias')->with('mensaje', 'Registro Creado');
    }
}