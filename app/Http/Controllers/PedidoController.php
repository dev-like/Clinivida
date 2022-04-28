<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pedido;
use App\Models\Boleto;
use DB;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class PedidoController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'titulo' => 'required',
            'file' => 'required',
            'cliente_id' => 'required',
        ]);
        // dd($request);
        Pedido::create($request->all());
        return back()->with('success', 'Pedido cadastrado com sucesso');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  clientes  $cpfcnpj
     * @return Application|Factory|View
     */
     public function edit(Pedido $pedido)
     {
       $pedido = DB::table('pedidos')
         ->join('clientes','clientes.id','=','pedidos.cliente_id')
         ->select(['pedidos.file as file','nome', 'titulo', 'clientes.id as cliente_id', 'pedidos.id as id', 'clientes.id as cliente_id'])->where('pedidos.id',$pedido->id)->first();

         return view('admin.pedido.index', compact('pedido'));
     }


    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  clientes  $cpfcnpj
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request,Pedido $pedido): RedirectResponse
    {

          $this->validate($request, [
              'titulo' => 'required',
              'cliente_id' => 'required',
          ]);
        $pedido->update($request->all());
        return  redirect()->route('cliente.show', [$request->cliente_id])->with('success', 'Pedido atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  clientes  $cpfcnpj
     * @return bool
     */
    public function destroy(Pedido $pedido): bool
    {
        return $pedido->delete();
    }
}
