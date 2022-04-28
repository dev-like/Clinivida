<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Eventos;
use App\Models\Parceiros;
use App\Models\Instagram;
use App\Models\Quemsomos;
use App\Models\Cliente;
use App\Models\Pedido;
use App\Models\Boleto;
use DB;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        // $banner = Banner::where('deleted_at')->get();
        // $description = Banner::first()?->sub_title ;
        // $quemSomos = QuemSomos::first();
        // $eventos = Eventos::all()->load('categoria');
        // $parceiros = Parceiros::all();
        // $instagram = Instagram::all();

        // return view('index',compact('banner', 'quemSomos','eventos','parceiros','instagram','description'));
        return view('index');
}

    /**
     * @param  string  $slug
     * @return Application|Factory|View
     */
    public function show(string $slug)
    {

        $evento = Eventos::where('slug', $slug)->firstOrFail();
        $description = Banner::first()->sub_title;
        $eventosRelacionados = Eventos::where('categoria_id', $evento->categoria_id)->where('slug','<>', $slug)->limit(2)->get()->load('categoria');
        $quemSomos = QuemSomos::first();

        return view('eventos', compact('evento', 'quemSomos', 'eventosRelacionados','description'));
    }

    public function list()
    {
        $evento = Eventos::all();
        $description = Banner::first()->sub_title;
        $quemSomos = QuemSomos::first();
        return view('listagem', compact('evento','description','quemSomos'));
    }
    public function segundavia()
    {
      // $cliente = Cliente::all();
      // $pedido = Pedido::all();
      // $boleto = Boleto::all();

      $quemSomos = QuemSomos::first();
      return view('segundavia',compact('quemSomos'));
    }
    function buscar(Request $request)
    {
      if($request->ajax())
       {
        $output = '';
        $query = $request->get('query');
        if($query != '')
        {
         $data = DB::table('clientes')
         ->join('pedidos','clientes.id','=','pedidos.cliente_id')
         ->join('boletos','pedidos.id','=','boletos.pedido_id')
           ->select(['boletos.file as file', 'boletos.vencimento as vencimento','nome', 'titulo', 'clientes.id as cliente_id', 'pedidos.file as pedido_file', 'boletos.file as boleto_file','clientes.cpfcnpj as cpfcnpj'])->where('clientes.cpfcnpj',$query)->where('pedidos.deleted_at')->where('boletos.deleted_at')->orderby('pedidos.titulo')->get();

        }

        $total_row = $data->count();
        $titulo =  '<h3 id="nome" class="nome my-2 mx-1">'.$data[0]->nome.'</h3>';
        $titulo_pedido = "";
        $cabecalho = 1;
        $i = 1;
        if($total_row > 0)
        {
          // dd($total_row);
         foreach($data as $row)
         {
           if($total_row == 1){
             $output .=
             '
             <div class="card">
     					<div class="card-header d-flex justify-content-between align-items-center" id="heading'.$cabecalho.'">
     						<h5 class="mb-0">
     							<button class="btn btn-link" data-toggle="collapse" data-target="#collapse'.$cabecalho.'" aria-expanded="true" aria-controls="collapse'.$cabecalho.'">
     							'.$row->titulo.'
     							</button>
     						</h5>

     						<div>
     							<a href="uploads/NF/'.$row->pedido_file.'" class="my-1">
     								<i class="fas fa-receipt" style="font-size:20px;"></i>
     								<span>Baixar Nota Fiscal</span>
     							</a>
     						</div>
     					</div>
             <div id="collapse'.$cabecalho.'" class="collapse" aria-labelledby="heading'.$cabecalho.'" data-parent="#accordion">
             <div class="container card-body">
             <table class="table table-hover">
             <thead>
             <tr>

             <th scope="col" class="col-8">Vencimento</th>
             <th scope="col" class="col-4" style="text-align:right">Baixar Boleto</th>
             </tr>
             </thead>
             <tbody>
             <tr>
             <td class="col-8">'.date('d/m/Y',strtotime($row->vencimento)).'</td>
             <td class="col-4" style="text-align:right"><a href="uploads/boleto/'.$row->boleto_file.'"><i class="fas fa-download" style="font-size:20px;"></i></a></td>
             </tr>

             </tbody>

             </table>
             </div>
             </div>';
           }elseif (($titulo_pedido == $row->titulo)){
            if($cabecalho == 1){
              $output .=
              '
              <div id="collapse'.$cabecalho.'" class="collapse" aria-labelledby="heading'.$cabecalho.'" data-parent="#accordion">
              <div class="container card-body">
              <table class="table table-hover">
              <thead>
              <tr>

              <th scope="col" class="col-8">Vencimento</th>
              <th scope="col" class="col-4" style="text-align:right">Baixar Boleto</th>
              </tr>
              </thead>
              ';
            }
            else{
              $output .=
              '<tbody>
              <tr>
              <td class="col-8">'.date('d/m/Y',strtotime($row->vencimento)).'</td>
              <td class="col-4" style="text-align:right"><a href="uploads/boleto/'.$row->boleto_file.'"><i class="fas fa-download" style="font-size:20px;"></i></a></td>
              </tr>

              </tbody>
              ';
            }
            $cabecalho = $cabecalho+1;



          }else{
            $cabecalho = $i;
            $output .=
            '
            </table>
            </div>
            </div>
            <div class="card">
    					<div class="card-header d-flex justify-content-between align-items-center" id="heading'.$cabecalho.'">
    						<h5 class="mb-0">
    							<button class="btn btn-link" data-toggle="collapse" data-target="#collapse'.$cabecalho.'" aria-expanded="true" aria-controls="collapse'.$cabecalho.'">
    							'.$row->titulo.'
    							</button>
    						</h5>

    						<div>
    							<a href="uploads/NF/'.$row->pedido_file.'" class="my-1">
    								<i class="fas fa-receipt" style="font-size:20px;"></i>
    								<span>Baixar Nota Fiscal</span>
    							</a>
    						</div>
    					</div>



            ';
            if($cabecalho == $i){
              $output .=
              '
              <div id="collapse'.$cabecalho.'" class="collapse" aria-labelledby="heading'.$cabecalho.'" data-parent="#accordion">
              <div class="container card-body">
              <table class="table table-hover">
              <thead>
              <tr>

              <th scope="col" class="col-8">Vencimento</th>
              <th scope="col" class="col-4" style="text-align:right">Baixar Boleto</th>
              </tr>
              </thead>
              ';
            }
            else{
              $output .=
              '<tbody>
              <tr>
              <td class="col-8">'.date('d/m/Y',strtotime($row->vencimento)).'</td>
              <td class="col-4" style="text-align:right"><a href="uploads/boleto/'.$row->boleto_file.'"><i class="fas fa-download" style="font-size:20px;"></i></a></td>
              </tr>

              </tbody>
              ';
            }
            $cabecalho = $cabecalho+1;


         }
         $output .= '</div>';
         $titulo_pedido = $row->titulo;
         $i=$i+1;
       }
        }
        else
        {
         $output = '
         <tr>
          <td align="center" colspan="5">Você não tem pendências.</td>
         </tr>
         ';
        }

        $data = array(
         'table_data'  => $titulo.$output,
         'total_data'  => $total_row
        );

        echo json_encode($data);
       }
    }

}
