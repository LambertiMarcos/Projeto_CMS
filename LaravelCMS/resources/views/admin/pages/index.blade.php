@extends('adminlte::page')

@section('title', 'Páginas')

@section('content_header')
    <h1>
        Minhas Páginas
        <a href="{{ route('pages.create')}}" class="btn btn-primary btn-sm">Nova Página</a>
    </h1>
@endsection

@section('content')

    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th width="60">ID</th>
                        <th>Título</th>
                        <th width="220">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($pages as $page)
                        <tr>
                            <td>{{$page->id}}</td>
                            <td>{{$page->title}}</td>

                            <td>
                                <a href="" target="_blank" class="btn btn-sm btn-info">Exibir</a>
                                <a href="{{ route('pages.edit', ['page'=>$page->id]) }}" class="btn btn-sm btn-info">Editar</a>
                                
                                <form class="d-inline" method="POST" action="{{ route('pages.destroy', ['page'=>$page->id]) }}" onsubmit="return confirm('Tem certeza que deseja excluir?')">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-sm btn-danger">Excluir</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

<!-- Paginação -->
    {{ $pages->links('pagination::bootstrap-4') }}

@endsection
<!-- error 404 
    <section class="content">
        <div class="error-page">
            <h2 class="headline text-warning"> 404</h2>

            <div class="error-content">
                <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>

                <p>
                We could not find the page you were looking for.
                Meanwhile, you may <a href="../../index.html">return to dashboard</a> or try using the search form.
                </p>

            <form class="search-form">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search">

                    <div class="input-group-append">
                            <button type="submit" name="submit" class="btn btn-warning"><i class="fas fa-search"></i>
                            </button>
                    </div>
                </div>
                
            </form>
        </div>
        
        </div>
        
    </section>
-->

<!-- /.input-group -->

<!-- /.error-content -->

<!-- /.error-page -->