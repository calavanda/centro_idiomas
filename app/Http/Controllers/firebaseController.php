<?php
use App\Services\FirebaseService;

class CursoController extends Controller
{
    protected $firebase;

    public function __construct(FirebaseService $firebase)
    {
        $this->firebase = $firebase;
    }

    public function index()
    {
        $cursos = $this->firebase->getData('cursos');
        return view('cursos.index', compact('cursos'));
    }
}
