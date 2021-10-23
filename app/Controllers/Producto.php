<?php

namespace App\Controllers;
use App\Models\ProductoModelo;

class Producto extends BaseController
{
    public function index()
    {
        return view('registroProducto');
    }

    public function registrar(){
        // 1. recibir los datos del formulario
        $producto=$this->request->getPost("producto");
        $foto=$this->request->getPost("foto");
        $precio=$this->request->getPost("precio");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");

        //se aplican validaciones
         if ($this->validate('formularioProducto')){
        // intentar conectarme a la bd e insertar datos

        try{
        //sacar una fotocopia de la clase     
            $modelo=new ProductoModelo();

        // armo el paquete de datos a registrar  
        $datos=array(
            "producto"=>$producto,
            "foto"=>$foto,
            "precio"=>$precio,
            "descripcion"=>$descripcion,
            "tipo"=>$tipo
        );  
        // agrego los datos
            $modelo->insert($datos);   
        // entrego una respuesta
        $mensaje="Exito entregando el producto"; 
        return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);
    

        }catch(\Exception $error){
            $mensaje=$error->getMessage();
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);

        }
        }else{

            $mensaje ="tenemos campos vacios..";
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);

         }

        // 2.construir un arreglo asociativo con los datos

       /* $datos=array(
            "producto"=>$producto,
            "foto"=>$foto,
            "precio"=>$precio,
            "descripcion"=>$descripcion,
            "tipo"=>$tipo
        );
        print_r($datos); */
    }
}
