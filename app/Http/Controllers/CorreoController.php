<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class CorreoController extends Controller
{
    //
     public function enviar(Request $request){
         $pathToFile="";
         $containfile=false;
         $destinatario="dunklen.bosen@gmail.com";
         $asunto="Cita";
         $contenido=$request->input("message");

         $data=array('contenido'=>$contenido);
         $r=Mail::send('welcome',$data,function($message)use ($asunto,$destinatario,$containfile,$pathToFile){
             $message->from('braham.gc@gmail.com','Abraham');
             $message->to($destinatario)->subject($asunto);
             if($containfile){
                 $message->attach($pathToFile);
             }
         });
         if($r){
             return view("welcome")->with("msj","Correo Enviado");
         }
         else {
             return view("welcome")->with("msj","Error!!!!!!!!!!!!!!");
         }
     }
}
