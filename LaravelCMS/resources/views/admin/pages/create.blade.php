@extends('adminlte::page')

@section('title', 'Nova Página')

@section('content_header')
    <h1>Nova Página</h1>
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
            <form action="{{route('pages.store')}}" method="POST" class="form-horizontal">
                {{method_field('post')}}
                @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputName3" class="col-sm-2 col-form-label">Nome</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror" id="inputName3" placeholder="Title" > 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Conteúdo</label>
                            <div class="col-sm-10">
                                <textarea name="body" class="form-control">{{old('body')}}</textarea>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Criar</button>
                    </div>
                    <!-- /.card-footer -->
            </form>
        </div>
    </div>



@endsection