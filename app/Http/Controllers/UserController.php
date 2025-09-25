<?php

namespace App\Http\Controllers;

use App\Services\FirebaseService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $firebase;

    public function __construct(FirebaseService $firebase)
    {
        $this->firebase = $firebase;
    }

    public function store(Request $request)
    {
        $data = [
            'nombre' => $request->nombre,
            'email' => $request->email,
        ];

        $this->firebase->setData('usuarios/'.$request->id, $data);

        return response()->json(['message' => 'Usuario guardado en Firebase']);
    }

    public function show($id)
    {
        $usuario = $this->firebase->getData('usuarios/'.$id);
        return response()->json($usuario);
    }
}
