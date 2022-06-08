<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    public function index(){
        $posts = Posts::all();
        return $posts;
    }

    public function create(Request $request){
        $posts = new Posts();
        $posts->usuario = $request->usuario;
        $posts->logo = $request->logo;
        $posts->img = $request->img;
        $posts->legenda = $request->legenda;
        $status = $posts->save();

        if($status){
            return response('Gravado com sucesso.', 201);
        }
        else{
            return 'Deu ruim';
        }
    }
}
