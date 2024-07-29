<?php

namespace App\Controllers;

use App\Models\ReservacionesModel;

class ReservacionesController extends BaseController
{
    public function index(): string
    {
        $reservaciones = new ReservacionesModel();
        $datos['datos']=$reservaciones->findAll();
        return view('reservaciones',$datos);
    }

    public function nuevaReservacion(){
        return view('reservaciones_nuevas');
    }

    public function agregarReservacion(){

        $datos =[
            'reservacion_id' =>$this->request->getVar('txtId'),
            'fecha'=>$this->request->getVar('txtFecha'),
            'cliente_id'=>$this->request->getVar('txtCliente'),
            'hotel_id'=>$this->request->getVar('txtHotel'),
            'descripcion'=>$this->request->getVar('txtDescripcion'),
            'usuario_id'=>$this->request->getVar('txtUser')
        ];

        $reservaciones = new ReservacionesModel();
        $reservaciones->insert($datos);
        echo 'Datos guardados';
        return redirect()->route('ver_reservaciones');
    }

    public function eliminarReservacion($id=null){
        $reservaciones = new ReservacionesModel();
        $reservaciones->delete($id);
        return redirect()->route('ver_reservaciones');
    }

    public function buscarReservacion($id=null){
        $reservaciones = new ReservacionesModel();
        $datos['datos']=$reservaciones->where('reservacion_id',$id)->first();
        return view('form_modificar_reservacion',$datos);
    }

    public function modificarReservacion(){

        $datos=[
            'reservacion_id' =>$this->request->getVar('txtId'),
            'fecha'=>$this->request->getVar('txtFecha'),
            'cliente_id'=>$this->request->getVar('txtCliente'),
            'hotel_id'=>$this->request->getVar('txtHotel'),
            'descripcion'=>$this->request->getVar('txtDescripcion'),
            'usuario_id'=>$this->request->getVar('txtUser')
        ];

        $reservaciones= new ReservacionesModel();
        $reservaciones->update($datos['reservacion_id'],$datos);
        return redirect()->route('ver_reservaciones');

    }


}

