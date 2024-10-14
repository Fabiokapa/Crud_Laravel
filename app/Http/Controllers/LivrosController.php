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

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
