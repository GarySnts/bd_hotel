<?php

namespace App\Controllers;

use App\Models\ClientesModel;

class ClientesController extends BaseController
{
    public function index(): string
    {
        $clientes = new ClientesModel();
        $datos['datos']=$clientes->findAll();
        return view('clientes',$datos);
    }

    public function nuevoCliente(){
        return view('clientes_nuevos');
    }

    public function agregarCliente(){

        $datos =[
            'cliente_id' =>$this->request->getVar('txtId'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'apellido'=>$this->request->getVar('txtApellido'),
            'nit'=>$this->request->getVar('txtNit'),
            'telefono'=>$this->request->getVar('txtTelefono'),
            'correo_electronico'=>$this->request->getVar('txtCorreo'),
            'direccion'=>$this->request->getVar('txtDireccion'),
            'contrasenia'=>$this->request->getVAr('txtContraseña')
        ];

        $clientes = new ClientesModel();
        $clientes->insert($datos);
        echo 'Datos guardados';
        return redirect()->route('ver_clientes');
    }

    public function eliminarCliente($id=null){
        $clientes = new ClientesModel();
        $clientes->delete($id);
        return redirect()->route('ver_clientes');
    }

    public function buscarCliente($id=null){
        $clientes = new ClientesModel();
        $datos['datos']=$clientes->where('cliente_id',$id)->first();
        return view('form_modificar_cliente',$datos);
    }

    public function modificarCliente(){

        $datos=[

            'nombre'=>$this->request->getVar('txtNombre'),
            'apellido'=>$this->request->getVar('txtApellido'),
            'nit'=>$this->request->getVar('txtNit'),
            'telefono'=>$this->request->getVar('txtTelefono'),
            'correo_electronico'=>$this->request->getVar('txtCorreo'),
            'direccion'=>$this->request->getVar('txtDireccion'),
            'contrasenia'=>$this->request->getVar('txtContraseña')
        ];

        $clientes= new ClientesModel();
        $clientes->update($datos['txtId'],$datos);
        return redirect()->route('ver_clientes');

    }


}

