@extends('adminlte::page')

@section('title', 'Novo Usuário')

@section('content_header')
    <h1>Novo Usuário </h1>
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

    <div class="card">

        <div class="card-body">
            <form action="{{route('users.store')}}" method="POST" class="form-horizontal">
                {{method_field('post')}}
                @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputName3" class="col-sm-2 col-form-label">Nome</label>
                            <div class="col-sm-10">
                            <input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" id="inputName3" placeholder="Nome" > 
                            
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                            <input type="email" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror"" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
                            
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
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                    <label class="form-check-label" for="exampleCheck2">Remember me</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Cadastrar</button>
                    </div>
                    <!-- /.card-footer -->
            </form>
        </div>
    </div>



@endsection