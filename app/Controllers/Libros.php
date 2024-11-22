<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LibroModel;

class Libros extends BaseController
{
    public function index()
    {
        $libroModel = new LibroModel();
       //echo view('Libreria', [
       //     'variable1' => 'Ejemplo1',
       //     'nVariable' => [1,2,3]
       // ]);
       echo view('Libreria', [
            'libros' => $libroModel->findAll()
       ]);
    }

    public function edit($id)
    {
        $libroModel = new LibroModel();
        echo view('Libro/edit', [
            'libro' => $libroModel-> find($id)
        ]);
    }

    public function update($id){
        $libroModel = new LibroModel();

        $libroModel->update($id,[
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion'),
        ]);

        /* echo 'Libro actualizado'; */
        return redirect()-> back();
    }



    public function remove()
    {
        
    }

    public function delete($id)
    {
        $libroModel = new LibroModel();

        $libroModel -> delete($id);

        /* echo 'LIbro Eliminado'; */
        return redirect()-> back();
    }


    public function show($id)
    {
        $libroModel = new LibroModel();

        echo view('Libro/show', [
            'libro' => $libroModel-> find($id)
        ]);

    }

    public function new()
    {
       
        echo view('Libro/new', [
            'libros' => [
                'titulo' => '',
                'descripcion' => ''
            ]
        ]);

    }

    public function create(){
        $libroModel = new LibroModel();
        $libroModel -> insert([
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion')
        ]);

        /* echo 'creado'; */
        return redirect()->to('Libros');
    }
}
