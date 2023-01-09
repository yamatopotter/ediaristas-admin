<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicoRequest;
use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    /**
     * Lista os servicos
     * 
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $servicos = Servico::paginate(10);
        // $servicos = Servico::simplepaginate(15);

        return view('servicos.index')->with('servicos', $servicos);
    }

    /**
     * Mostra o form vazio para criação
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        return view('servicos.create');
    }

    /**
     * Cria um novo registro no bano de dados
     *
     * @param ServicoRequest $request
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function store(ServicoRequest $request)
    {
        // $dados = $request->all();
        $dados = $request->except('_token');
        
        Servico::create($dados);

        return redirect()->route('servicos.index')
        ->with('mensagem', 'Serviço criado com sucesso!');
    }

    /**
     * Mostra o formulário preenchido para atualização
     *
     * @param integer $id
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit(int $id)
    {
        $servico = Servico::findOrFail($id);

        return view('servicos.edit')->with('servico', $servico)
        ->with('mensagem', 'Serviço atualizado com sucesso!');
    }

    /**
     * Atualiza um registro no banco de dados
     *
     * @param integer $id
     * @param ServicoRequest $request
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function update(int $id, ServicoRequest $request){
        $dados = $request->except(['_token','_method']);
        $servico = Servico::findOrFail($id);

        $servico->update($dados);

        return redirect()->route('servicos.index');
    }
}
