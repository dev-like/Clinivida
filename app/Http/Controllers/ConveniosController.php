<?php

namespace App\Http\Controllers;

use App\Models\Convenios;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class ConveniosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $convenios = Convenios::all();
        return view('admin.convenios.index', compact('convenios'));
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
      //dd($request);
        $this->validate($request, [
            'logo' => 'required|image',
            'link' => 'required',
        ]);
        Convenios::create($request->all());
        return back()->with('success', 'Convenio cadastrado com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Convenios  $convenio
     * @return Application|Factory|View
     */
    public function edit(Convenios $convenio)
    {
      //dd($convenio);
        return view('admin.convenios.edit', compact('convenio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Convenios  $convenio
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request, Convenios $convenio)
    {

        $this->validate($request, [
            'logo' => 'sometimes|required|image',
            'link' => 'required'
        ]);
        $convenio->update($request->all());
        return redirect()->route('convenios.index')->with('success', 'Parceido cadastrado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Convenios  $convenio
     * @return bool
     */
    public function destroy(Convenios $convenio)
    {
        return $convenio->delete();
    }
}
