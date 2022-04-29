<?php

namespace App\Http\Controllers;

use App\Models\Especialidade;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Foundation\Application;

class EspecialidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Factory|View
     */
    public function index()
    {
        $especialidades = Especialidade::where('tipo', '=', 'especialidades')->get();
        return view('admin.especialidade.index', compact('especialidades'));
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
        $request->request->add(['tipo' => 'especialidades']);
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg',
            'nome' => 'required',
            'tipo' => 'required',
            'descricao' => 'required',
        ]);
        Especialidade::create($request->only(['image', 'nome', 'tipo', 'descricao']));
        return back()->with('success', 'Especialidade cadastrada com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Especialidade  $especialidade
     * @return Application|Factory|View
     */
    public function edit(Especialidade $especialidade)
    {
        return view('admin.especialidade.edit', compact('especialidade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Especialidade  $especialidade
     * @return Application|RedirectResponse|Redirector
     * @throws ValidationException
     */
    public function update(Request $request, Especialidade $especialidade)
    {
      // dd($request);
        $request->tipo = "especialidades";
        $this->validate($request, [
          'image' => 'required|image|mimes:jpeg,png,jpg',
          'nome' => 'required',
          'descricao' => 'required',
        ]);
        $especialidade->update($request->only(['image', 'nome', 'descricao']));
        return redirect('admin/especialidades')->with('success', 'Especialidade atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Especialidade  $especialidade
     * @return bool|null
     */
    public function destroy(Especialidade $especialidade): ?bool
    {
        return $especialidade->delete();
    }

}
