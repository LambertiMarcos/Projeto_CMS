@extends("adminlte::page")

@section('title', 'Configurações')


@section('content_header')
    <h1>Configurações</h1>
@endsection

@section('content')

    @if($errors->any())
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
                </ul>
        </div>
    @endif
<!-- mensagem de sucesso -->
    @if(session('warning'))
    <div class="alert alert-info">
        <li>{{session('warning')}}</li>            
    </div>
    @endif


    <div class="card">
        <div class="card-body">
            <form action="{{route('settings.save')}}" method="POST" class="form-horizontal">
                @method('PUT')
                @csrf

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Título do Site</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" value="{{ $settings['title'] }}" class="form-control" /> 
                    </div>   
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Sub-título do Site</label>
                    <div class="col-sm-10">
                        <input type="text" name="subtitle" value="{{ $settings['subtitle'] }}" class="form-control" />   
                    </div>  
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">E-mail para contato</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" value="{{ $settings['email'] }}" class="form-control" />    
                    </div> 
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Cor do fundo</label>
                    <div class="col-sm-10">
                        <input type="color" name="bgcolor" value="{{ $settings['bgcolor'] }}" class="form-control" style="width: 70px" />  
                    </div>   
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Cor do texto</label>
                    <div class="col-sm-10">
                        <input type="color" name="textcolor" value="{{ $settings['textcolor'] }}" class="form-control" style="width: 70px" />
                    </div>        
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
    </div>
@endsection

@section('css')

@endsection


@section('js')

@endsection