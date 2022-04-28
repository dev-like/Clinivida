<?php

namespace App\Http\Controllers;

use App\Models\Quemsomos;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class QuemSomosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $quemSomos = QuemSomos::first();
        if (empty($quemSomos)) {
            $quemSomos = QuemSomos::create([
                'endereco_matriz_link' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15884.81669459566!2d-47.4693919!3d-5.5367081!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x729962f79e61e2a4!2sImperagro!5e0!3m2!1spt-BR!2sbr!4v1633161574720!5m2!1spt-BR!2sbr',
            ]);
        }
        return view('admin.quemSomos.index', compact('quemSomos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  QuemSomos  $quemSomo
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request, QuemSomos $quemSomo): RedirectResponse
    {
        $quemSomo->update($request->all());
        return back()->with('success', 'Quem somos atualizado com sucesso!');
    }
}
