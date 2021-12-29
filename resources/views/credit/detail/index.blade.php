@extends('credit.app')

@section('content')
<link rel="stylesheet" href="../css/detail-credit.css">
<link rel="stylesheet" href="../icons/css/all.min.css">
<script type="text/javascript" src="../js/credit.js"></script>
<div class="container">
    <div class="row w-100 container-children" style="--bs-columns: 3;">
        <div class="col-lg-4 text-lg-center border border-dark">
            <div class="grid">
                <div class="p-4"><span class="bold-text">Detalle cuotas</span></div>
                @if ($credits->count() > 0)
                    @foreach ($credits as $credit)
                            <div class="row @if ($credit->id == $details->id) focus @endif">
                                <div class="col d-flex align-items-center">{{$credit->name_loan}}</div>
                                <div class="col d-flex align-items-center">{{$credit->value_loan}}</div>
                                <div class="col">
                                    <a class="btn btn-primary m-1" href="{{route('credits.show',['credit' => $credit->id])}}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a class="btn btn-danger m-1">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </div>
                    @endforeach
                @else
                    No hay prestamos registrados
                @endif
            </div>
        </div>
        <div class="col-lg-4 text-lg-center border border-dark">
            <div class="grid">
                <div class="p-4"><span class="bold-text">Detalle credito</span></div>
                @if ($details->count() > 0)
                        <div class="row">
                            <div class="col"><span class="bold-text">Valor</span></div>
                            <div class="col"><span class="bold-text"># cuotas</span></div>
                            <div class="col"><span class="bold-text">% intereses</span></div>
                        </div>
                        <div class="row">
                            <div class="col">{{$details->value_loan}}</div>
                            <div class="col">{{$details->number_fee}}</div>
                            <div class="col">{{$details->value_interest}}</div>
                        </div>
                        <div class="row">
                            <div class="col"><span class="bold-text">Interés mensual</span></div>
                            <div class="col"><span class="bold-text">Total intereses</span></div>
                            <div class="col"><span class="bold-text">Total a pagar</span></div>
                        </div>
                        <div class="row">
                            <div class="col">{{$details->monthly_interest}}</div>
                            <div class="col">{{$details->total_interest}}</div>
                            <div class="col">{{number_format($details->total_to_pay)}}</div>
                        </div>
                @else
                    Seleccione un credito
                @endif
                <hr class="mt-4">
                <div class="p-4"><span class="bold-text">Detalle cuotas</span></div>
                <div class="scroll-y detailfee">
                    @for ($i = 1; $i <= $details->number_fee; $i++)
                        <div class="row">
                            <div class="col">Cuota {{$i}}</div>
                            <div class="col">{{number_format($var[$i],2)}}</div>
                        </div>
                    @endfor
                </div>
                
            </div>
        </div>

        <div class="col-lg-4 text-lg-center border border-dark">
            <div class="grid">
                <div class="p-4"><span class="bold-text">Registrar cuota</span></div>
                <div class="scroll-y registerfee">
                    <div class="row">
                        <div class="col">C1</div>
                        <div class="col">100000</div>
                        <div class="col">23-12-2021</div>
                    </div>
                    <div class="row m-3">
                        <div class="col"> <input type="number" class="form-control" name="value_fee" id="value_fee"> </div>
                        <div class="col"> <input type="date" class="form-control" name="date_fee" id="date_fee"> </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection