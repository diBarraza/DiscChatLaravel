<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ConversacionReply;

use App\Http\Controllers\Controller;

use DB;

class ConversacionReplyController extends Controller
{

    public function createConversacionReply(Request $request){

        $conversacionReply = ConversacionReply::create($request->all());

        return response()->json($conversacionReply);

    }

    public function updateConversacionReply(Request $request, $id){



        $conversacionReply  = DB::table('conversacion_reply')->where('id',$request->input('id'))->get();

        $conversacionReply->reply = $request->input('reply');

        $conversacionReply->ip = $request->input('ip');

        $conversacionReply->time = $request->input('time');

        $conversacionReply->latitude = $request->input('latitude');

        $conversacionReply->logitude = $request->input('logitude');

        $conversacionReply->save();

        $response["conversacionReplys"] = $conversacionReply;

        $response["success"] = 1;

        return response()->json($response);

    }



    public function deleteConversacionReply($id , Request $request){

        $conversacionReply  = DB::table('conversacion_reply')->where('id',$request->input('id'))->get();

        $conversacionReply->delete();

        return response()->json('Removed successfully.');

    }



    public function index(){

        $conversacionReply  = ConversacionReply::all();

        $response["conversacionReplys"] = $conversacionReply;

        $response["success"] = 1;

        return response()->json($response);

    }


}
