<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function index()
    {
        $servicos = Servico::paginate(10);
        // $servicos = Servico::simplepaginate(15);

        return view('servicos.index')->with('servicos', $servicos);
    }

    public function create()
    {
        return view('servicos.create');
    }

    public function store(Request $request)
    {
        // $dados = $request->all();
        $dados = $request->except('_token');
        
        Servico::create($dados);

        return redirect()->route('servicos.index');
    }
}
