<?php

namespace App\Http\Controllers;

use App\Models\Exame;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Foundation\Application;

class ExamesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Factory|View
     */
    public function index()
    {
        $exames = Exame::where('tipo', '=', 'exames')->get();
        return view('admin.exame.index', compact('exames'));
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
        $request->request->add(['tipo' => 'exames']);
        $this->validate($request, [
          'image' => 'required|image|mimes:jpeg,png,jpg',
          'nome' => 'required',
          'tipo' => 'required',
          'descricao' => 'required',
        ]);
        Exame::create($request->only(['image', 'nome', 'tipo', 'descricao']));
        return back()->with('success', 'Exame cadastrado com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Exame  $exame
     * @return Application|Factory|View
     */
    public function edit(Exame $exame)
    {
        return view('admin.exame.edit', compact('exame'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Exame  $exame
     * @return Application|RedirectResponse|Redirector
     * @throws ValidationException
     */
    public function update(Request $request, Exame $exame)
    {

      dd($request);
        $request->request->add(['tipo' => 'exames']);
        $this->validate($request, [
          'image' => 'required|image|mimes:jpeg,png,jpg',
          'nome' => 'required',
          'descricao' => 'required',
        ]);
        $exame->update($request->only(['image', 'nome', 'descricao', 'tipo']));
        return redirect('admin/exames')->with('success', 'Exame atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Exame  $exame
     * @return bool|null
     */
    public function destroy(Exame $exame): ?bool
    {
        return $exame->delete();
    }

}
