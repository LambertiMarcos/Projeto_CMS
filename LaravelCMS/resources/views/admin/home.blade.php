@extends("adminlte::page")

@section('plugins.Chartjs', true) <!-- habilitar o plugin -->

@section('title', 'Painel')


@section('content_header')
<div class="row">
    <div class="col-md-6">
            <h1>Dashboard</h1>
    </div>
    <div class="col-md-6">
        <form method="GET">
            <select onChange="this.form.submit()" name="interval" class="float-md-right">
                <option {{$dateInterval==30?'selected="seleceted"':''}} value="30">Últimos 30 dias</option>
                <option {{$dateInterval==60?'selected="seleceted"':''}} value="60">Últimos 2 meses</option>
                <option {{$dateInterval==90?'selected="seleceted"':''}} value="90">Últimos 3 meses</option>
                <option {{$dateInterval==120?'selected="seleceted"':''}} value="120">Últimos 6 meses</option>            
            </select>
        </form>
    </div>
</div>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{$pageCount}}</h3>

                <p>Número de Páginas</p>
            </div>
            <div class="icon">
                <i class="far fa-fw fa-sticky-note"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <!-- <h3>{{$onlineCount}}<sup style="font-size: 20px">%</sup></h3>-->
                <h3>{{$onlineCount}}</h3>
                <p>Usuários Online</p>
            </div>
            <div class="icon">
                <i class="fas fa-fw fa-heart"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{$userCount}}</h3>

                <p>Usuários Registrados</p>
            </div>
            <div class="icon">
                <i class="fas fa-user-plus"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{$visitsCount}}</h3>

                <p>Acessos</p>
            </div>
            <div class="icon">
                <i class="far far-fw fa-eye"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
    </div>

<!-- cards -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>

                            <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's
                                content.
                            </p>

                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>

                            <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's
                                content.
                            </p>

                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div> 
            </div>       
        </div><!-- /.container-fluid -->
    </div>

<!-- Gráficos -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                        <h3 class="card-title">Online Store Visitors</h3>
                        <a href="javascript:void(0);">View Report</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <p class="d-flex flex-column">
                                <span class="text-bold text-lg">820</span>
                                <span>Visitors Over Time</span>
                            </p>
                            <p class="ml-auto d-flex flex-column text-right">
                                <span class="text-success">
                                <i class="fas fa-arrow-up"></i> 12.5%
                                </span>
                                <span class="text-muted">Since last week</span>
                            </p>
                        </div>
                        <!-- /.d-flex -->
                        <canvas id="pagePie" width="100"></canvas>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-md-6 -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                    <h3 class="card-title">Online Store Visitors</h3>
                    <a href="javascript:void(0);">View Report</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex">
                        <p class="d-flex flex-column">
                            <span class="text-bold text-lg">485</span>
                            <span>Visitors last week</span>
                        </p>
                        <p class="ml-auto d-flex flex-column text-right">
                            <span class="text-success">
                            <i class="fas fa-arrow-up"></i> 20.5%
                            </span>
                            <span class="text-muted">Since last week</span>
                        </p>
                    </div>
                    <!-- /.d-flex -->
                    <canvas id="pageBar" width="100"></canvas>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col-md-6 -->

        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
<script>
window.onload = function(){
    let ctx = document.getElementById('pagePie').getContext('2d');
    window.pagePie = new Chart(ctx, {
        type:'pie',
        data:{
            datasets:[{
                data:{{ $pageValues }},
                backgroundColor: [
                'rgba(255, 149, 132, 0.8)',
                'rgba(54, 162, 100, 0.8)',
                'rgba(54, 162, 255, 0.8)',
                'rgba(200, 246, 86, 0.8)'
            ],
            borderColor: [
                'rgba(0, 0, 0, 0.5)',
                'rgba(0, 0, 0, 0.5)',
                'rgba(0, 0, 0, 0.5)',
                'rgba(0, 0, 0, 0.5)'
            ],
            borderWidth: 1
            }],
            labels:{!! $pageLabels !!}
        },
        options:{
            responsive:true,
            legend:{
                display:false
            }
        }
    });

}
</script>
<!--
<script>
    window.onload = function(){
        let btx = document.getElementById('pageBar').getContext('2d');
        window.pageBar = new Chart(btx, {
            type:'bar',
            data:{
                datasets:[{
                    data:[15, 8, 21],
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)'
                ],
                borderColor: [
                    'rgba(0, 0, 0, 1)',
                    'rgba(0, 0, 0, 1)',
                    'rgba(0, 0, 0, 1)'
                ],
                borderWidth: 1
                }],
                labels:['Red', 'Blue', 'Yellow']
            },
            options:{
    		scales: {
      			y: {
        			beginAtZero: true
      			}
    		}
            }
        });
    }
</script>
-->
@endsection

@section('css')

@endsection

@section('js')

@endsection