<?php

namespace App\Controllers;

use App\Models\HotelesModel;

class HotelesController extends BaseController
{
    public function index(): string
    {
        $hoteles = new HotelesModel();
        $datos['datos']=$hoteles->findAll();
        return view('hoteles',$datos); //este es el hoteles php de view, no el route
    }

    public function nuevoHotel(){
        return view('hoteles_nuevos');
    }

    public function agregarHotel(){

        $datos =[
            'hotel_id' =>$this->request->getVar('txtId'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'correoelectronico'=>$this->request->getVar('txtCorreo'),
            'telefono'=>$this->request->getVar('txtTel'),
            'direccion'=>$this->request->getVar('txtDireccion'),
            'ciudad_id'=>$this->request->getVar('txtCiudad'),
            'categoria_id'=>$this->request->getVar('txtCategoria'),
            'usuario_id'=>$this->request->getVAr('txtUser')
        ];

        $hoteles = new HotelesModel();
        $hoteles->insert($datos);
        echo 'Datos guardados';
        return redirect()->route('ver_hoteles');
    }

    public function eliminarHotel($id=null){
        $hoteles = new HotelesModel();
        $hoteles->delete($id);
        return redirect()->route('ver_hoteles');
    }

    public function buscarHotel($id=null){
        $hoteles = new HotelesModel();
        $datos['datos']=$hoteles->where('hotel_id',$id)->first();
        return view('form_modificar_hotel',$datos);
    }

    public function modificarHotel(){

        $datos=[
            'hotel_id' =>$this->request->getVar('txtId'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'correoelectronico'=>$this->request->getVar('txtCorreo'),
            'telefono'=>$this->request->getVar('txtTel'),
            'direccion'=>$this->request->getVar('txtDireccion'),
            'ciudad_id'=>$this->request->getVar('txtCiudad'),
            'categoria_id'=>$this->request->getVar('txtCategoria'),
            'usuario_id'=>$this->request->getVAr('txtUser')
        ];

        $hoteles= new HotelesModel();
        $hoteles->update($datos['hotel_id'],$datos);
        return redirect()->route('ver_hoteles');

    }


}

