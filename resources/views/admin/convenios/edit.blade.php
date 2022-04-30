@extends('admin.main')

@section('page-title')
    Editar convênio {{ $convenio->id }}
@endsection

@section('page-caminho')
    Convênio
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
                  action="{{ route('convenios.update', ['convenio' => $convenio->id])}}"
                  class="form"
                  method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <img id="view-img" width="400px" src="{{ asset('uploads/convenios/'.$convenio->logo) }}">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="file" name="logo" id="logo" class="filestyle"
                                   data-buttonText="Carregar"
                                   data-btnClass="btn-light"
                                   data-placeholder="{!! $convenio->logo !!}">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="link">Link:</label>
                          <input placeholder="Link do convênio" name="link"
                                 class="form-control" autofocus required
                                 maxlength="250" type="url" value="{{ $convenio->link }}">
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
                                <a href="{{ route('convenios.index') }}" class="btn btn-danger" data-dismiss="modal">
                                    <i class="fa fa-window-close m-r-5"></i>
                                    Cancelar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('scripts')

    <script>
    $("#logo").change(function(){
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
@endsection
