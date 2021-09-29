@extends("adminlte::page")

@section('title', 'Meu Perfil')

@section('content_header')
    <h1>Meu Perfil</h1>
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

    @if(session('warning'))
    <div class="alert alert-info">
        <li>{{session('warning')}}</li>            
    </div>
    @endif


    <div class="card">

        <div class="card-body">
            <form action="{{route('profile.save')}}" method="POST" class="form-horizontal">
                {{method_field('PUT')}}
                @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputName3" class="col-sm-2 col-form-label">Nome</label>
                            <div class="col-sm-10">
                            <input type="text" name="name" value="{{$user->name}}" class="form-control @error('name') is-invalid @enderror" id="inputName3" placeholder="Nome" > 
                            
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                            <input type="email" name="email" value="{{$user->email}}" class="form-control @error('email') is-invalid @enderror"" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Nova senha</label>
                            
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"" id="inputPassword3" placeholder="senha">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Confirmar senha</label>
                            
                            <div class="col-sm-10">
                                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="inputPassword3" placeholder="confirmar senha">
                            </div>
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