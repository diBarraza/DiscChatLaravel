<?php

namespace App\Http\Controllers;

use App\Conversacion;
use Illuminate\Http\Request;

class ConversacionController extends Controller
{
    //

    public function createConversacion(Request $request){

        $conversacion = Conversacion::create($request->all());

        return response()->json($conversacion);

    }

    public function updateConversacion(Request $request, $id){



        $conversacion  = DB::table('conversacion')->where('id',$request->input('id'))->get();

        $conversacion->usuario_uno = $request->input('usuario_uno');

        $conversacion->usuario_dos = $request->input('usuario_dos');

        $conversacion->ip = $request->input('ip');

        $conversacion->hora = $request->input('hora');

        $conversacion->save();

        $response["conversaciones"] = $conversacion;

        $response["success"] = 1;

        return response()->json($response);

    }



    public function deleteConversacion($id , Request $request){

        $conversacion  = DB::table('conversacion')->where('id',$request->input('id'))->get();

        $conversacion->delete();

        return response()->json('Removed successfully.');

    }



    public function index(){

        $conversacion  = Conversacion::all();

        $response["conversaciones"] = $conversacion;

        $response["success"] = 1;

        return response()->json($response);

    }

}
