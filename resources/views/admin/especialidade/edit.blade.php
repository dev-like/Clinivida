@extends('admin.main')

@section('page-title')
    Edit Especialidades {{ $especialidade->title }}
@endsection

@section('page-caminho')
    Especialidades
@endsection

@section('styles')
    <!-- Sweet Alert css -->
    <link href="{{ asset('template/plugins/sweet-alert/sweetalert2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('template/plugins/sweet-alert/sweetalert2.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <div class="col-12">
        <div class="card-box">
            <form enctype="multipart/form-data"
                  action="{{ route('especialidades.update', ['especialidade' => $especialidade->id])}}"
                  class="form"
                  method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <img id="view-img" width="400px" src="{{ asset('uploads/especialidades/'.$especialidade->image) }}">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="file" name="image" id="image" class="filestyle"
                                   data-buttonText="Carregar" data-placeholder="{!! $especialidade->image !!}"
                                   data-btnClass="btn-light">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="nome">Nome:</label>
                            <input placeholder="Nome da especialidade" name="nome"
                                   class="form-control" autofocus required
                                   maxlength="250" type="text" value="{{ $especialidade->nome }}">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="descricao">Descrição:</label>
                            <input placeholder="Descrição da especialidade" name="descricao"
                                   class="form-control" autofocus required
                                   maxlength="250" type="text" value="{{ $especialidade->descricao }}">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row" style="margin-top: 20px">
                        <div class="col-12">
                            <div class="text-center">
                                <button class="btn btn-success" type="submit" value="Salvar">
                                    <i class="fa fa-save m-r-5"></i>
                                    Salvar
                                </button>
                                <button class="btn btn-danger" data-dismiss="modal">
                                    <i class="fa fa-window-close m-r-5"></i>
                                    Cancelar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Cadastrar Especialidades</h4>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

@endsection

@section('scripts')

    <script>
    $("#image").change(function(){
    if (this.files && this.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#view-img').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    }
    });
    </script>

    <script src="{{ asset('template/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('template/plugins/switchery/switchery.min.js') }}" type="text/javascript"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.5.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js" type="text/javascript"></script>



    <script type="text/javascript">
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  function goswet(id, nome){

    swal.setDefaults({
      reverseButtons: true
    })
    swal({
        title: "Deseja excluir "+nome+"?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        cancelButtonText: "Cancelar",
        confirmButtonText: "Deletar"
    }).then(
      function(){
        $.ajax({
          type: "DELETE",
          url: "{{ url('admin/especialidades') }}/"+id,
          data: {
             'id': id,
             _token: $("[name='_token']").val(),
          },
          success: function(data){
            swal({
             title: "Especialidades deletado!",
             type: "success",
             timer: 2000,
             showConfirmButton: false
           }).then(
             function () {
             },
             function(){
               window.location = "{{ route('especialidades.index') }}";
             }
           );
          },
          error: function(xhr,status, data) {
            swal("Não foi possível deletar item");
          }

        });
      }
    );
  }




    </script>
@endsection
