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

    /**
     * Show the form for creating a new resource.
     */
    public function cadastro()
    {
        return view('livros.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $data = $request->validate([
                'nomelivro' => 'required',
                'titulolivro' => 'required',
                'autorlivro' => 'required',
            ]);

            $livro_novo = livro::create($data);
            return redirect(route('livros.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
