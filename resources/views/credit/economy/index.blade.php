@extends('credit.app')

@section('content')
<link rel="stylesheet" href="../css/economy.css">
<link rel="stylesheet" href="../icons/css/all.min.css">
<script type="text/javascript" src="../js/credit.js"></script>
<div class="container">
    <div class="row w-100 container-children" style="--bs-columns: 3;">
        <div class="content-title">
            <div class="row">
                <div class="col">Saldo total: $10'000.000</div>
                <div class="col">Saldo parcial: $10'000.000</div>
                <div class="col">Total ingresos: $15'000.000</div>
                <div class="col">Total egresos: $5'000.000</div>
            </div>
        </div>
        <div class="col-lg-4 text-lg-center"><!-- border border-dark -->
            <div class="content-list-years">
                <nav class="list-years">
                    <ul class="content-month">
                        <li class="year"><span>2021</span></li>
                        <ul class="list-month">
                            <li class="month"><span>Enero</span></li>
                            <li class="month"><span>Febrero</span></li>
                            <li class="month"><span>Marzo</span></li>
                        </ul>
                    </ul>
                    <ul class="content-month">
                        <li class="year"><span>2022</span></li>
                        <ul class="list-month">
                            <li class="month"><span>Enero</span></li>
                            <li class="month"><span>Febrero</span></li>
                            <li class="month"><span>Marzo</span></li>
                        </ul>
                    </ul>
                </nav>
            </div>
            
        </div>
        <div class="col text-lg-center"><!-- border border-dark -->
            <div class="row">
                <div class="content-detail">
                    <div class="col">
                        <div class="content-title">Ingresos</div>
                        <div class="row">
                            <div class="col"><label for="">Nombre</label></div>
                            <div class="col"><label for="">Valor</label></div>
                        </div>
                        <div class="row">
                            <div class="col"><input type="text" name="" id="" value="Sueldo"></div>
                            <div class="col"><input type="number" name="" id="" value="500000"></div>
                        </div>
                        <div class="row">
                            <div class="col"><button class="btn btn-success">Guardar</button></div>
                        </div>
                        <div class="content-detail-scroll">
                        @for ($i = 0; $i < 15; $i++)
                            <div class="row">
                                <div class="col"><label for="">Venta</label></div>
                                <div class="col"><input type="number" name="" id="" value="500000"></div>
                            </div>
                        @endfor
                        </div>
                    </div>
                </div>
                <div class="content-detail">
                    <div class="col">
                        <div class="content-title">Egresos</div>
                        <div class="row">
                            <div class="col"><label for="">Nombre</label></div>
                            <div class="col"><label for="">Valor</label></div>
                        </div>
                        <div class="row">
                            <div class="col"><input type="text" name="" id="" value="Arriendo"></div>
                            <div class="col"><input type="number" name="" id="" value="500000"></div>
                        </div>
                        <div class="row">
                            <div class="col"><button class="btn btn-success">Guardar</button></div>
                        </div>
                        <div class="content-detail-scroll">
                        @for ($i = 0; $i < 15; $i++)
                            <div class="row">
                                <div class="col"><label for="">Almuerzo</label></div>
                                <div class="col"><input type="number" name="" id="" value="10000"></div>
                            </div>
                        @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection