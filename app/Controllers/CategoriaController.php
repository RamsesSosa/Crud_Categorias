<?php
namespace App\Controllers;

use App\Models\CategoriaModel;

class CategoriaController extends BaseController {

    protected $categoriaModel;

    function __construct(){
        $this->categoriaModel = new CategoriaModel();
    }

    public function index(){
        $categorias = $this->categoriaModel->findAll();
        $data = array(
            "categorias" => $categorias
        );
        return view("categorias/index", $data);
    }

    public function show($id){
        $categoria = $this->categoriaModel->find($id);
        $data = array( "categoria" => $categoria);
        return view("categorias/show", $data);
    }

    public function create(){
        return view("categorias/create");
    }

    public function store()
{
    $data = [
        'nombre'      => $this->request->getPost('nombre'),
        'descripcion' => $this->request->getPost('descripcion'),
        'usuarios_id' => $this->request->getPost('usuarios_id'),
    ];

    $this->categoriaModel->save($data);

    return redirect()->to('/categorias');
}

    public function edit($id){
        $categoria = $this->categoriaModel->find($id);
        $data = array(
            "categoria" => $categoria
        );
        return view("categorias/edit", $data);
    }

    public function update($id)
{
    $data = [
        'nombre'      => $this->request->getPost('nombre'),
        'descripcion' => $this->request->getPost('descripcion'),
        'usuarios_id' => $this->request->getPost('usuarios_id'),
    ];

    $this->categoriaModel->update($id, $data);

    return redirect()->to('/categorias');
}

    public function delete($id){
        $this->categoriaModel->delete($id);
        return redirect()->to("/categorias");
    }
}
