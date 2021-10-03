@extends('adminlte::page')

@section('title', 'Editar Página')

@section('content_header')
    <h1>Editar Página </h1>
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
            <form action="{{route('pages.update', ['page'=>$page->id])}}" method="POST" class="form-horizontal">
                {{method_field('PUT')}}
                @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Título</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" value="{{$page->title}}" class="form-control @error('title') is-invalid @enderror" id="inputName3" placeholder="title" > 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="body" class="col-sm-2 col-form-label">Conteúdo</label>
                            <div class="col-sm-10">
                                <textarea name="body" id="bodyfield" class="form-control"> {{$page->body}}</textarea>
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

<!-- TinyMCE -->
<script src="https://cdn.tiny.cloud/1/6nt55jzy7pb18h1ryesk61uzx9w7q2wyon9nnn4dxz6qqlc3/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea#bodyfield',
        height: 300,
        menubar:false,
        plugins:['link', 'table', 'image', 'autoresize', 'lists'],
        toolbar:'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | table | link image | bullist numlist',
        content_css:[
            '{{asset('assets/css/content.css')}}', 
        ],
        images_upload_url: '{{route('imageupload')}}',
        images_upload_credentials: true,
        toolbar_mode: 'floating',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Marcos Lamberti',
    });
</script>

@endsection