<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\livro;

class LivrosController extends Controller
{

    public function index()
    {
        $livros = livro::all();
        return view('livros.index', ['livros' => $livros]);
    } 

    public function cadastro()
    {
        return view('livros.cadastro');
    }

    public function store(Request $request)
    {
            $data = $request->validate([
                'nomelivro' => 'required',
                'paginaslivro' => 'required',
                'autorlivro' => 'required',
                'categorialivro' => 'required',
            ]);

            $livro_novo = livro::create($data);
            return redirect(route('livros.index'));
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editar(livro $livros)
    {
        return view('livros.editar', ['livro' => $livros]);
    }


    public function actualizar(livro $livros, Request $request)
    {
        $data = $request->validate([
            'nomelivro' => 'required',
            'paginaslivro' => 'required',
            'autorlivro' => 'required',
            'categorialivro' => 'required',
        ]);

        $livros->update($data);
        return redirect(route('livros.index'))->with('sucesso','Registro Actualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deletar(livro $livros)
    {   
        $livros->deletar();
        return redirect(route('livros.index'))->with('Deletado', 'Item deletado com sucesso');
    }
}
