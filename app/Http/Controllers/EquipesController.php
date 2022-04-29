<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Foundation\Application;

class EquipesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Factory|View
     */
    public function index()
    {
        $equipes = Equipe::where('tipo', '=', 'equipes')->get();
        return view('admin.equipe.index', compact('equipes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->request->add(['tipo' => 'equipes']);
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg',
            'nome' => 'required',
            'especialidade' => 'required',
            'descricao' => 'required',
            'tipo' => 'required',
        ]);
        Equipe::create($request->only(['image', 'nome', 'especialidade', 'descricao', 'tipo']));
        return back()->with('success', 'Equipe cadastrada com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Equipe  $equipe
     * @return Application|Factory|View
     */
    public function edit(Equipe $equipe)
    {
        return view('admin.equipe.edit', compact('equipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Equipe  $equipe
     * @return Application|RedirectResponse|Redirector
     * @throws ValidationException
     */
    public function update(Request $request, Equipe $equipe)
    {
        $request->request->add(['tipo' => 'equipes']);
        $this->validate($request, [
          'image' => 'required|image|mimes:jpeg,png,jpg',
          'nome' => 'required',
          'especialidade' => 'required',
          'descricao' => 'required',
        ]);
        $equipe->update($request->only(['image', 'nome', 'especialidade', 'descricao', 'tipo']));
        return redirect('admin/equipes')->with('success', 'Equipe atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Equipe  $equipe
     * @return bool|null
     */
    public function destroy(Equipe $equipe): ?bool
    {
        return $equipe->delete();
    }

}
