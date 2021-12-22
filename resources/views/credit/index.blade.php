@extends('credit.app')

@section('content')
    <div class="container w-23 p-5">
        <div class="row">
            <div class="col">
                <div class="row align-items-center p-1">
                    <div class="col">
                        <label for="Loan value" class="form-label">Valor prestamo</label>
                    </div>
                    <div class="col">
                        <input id="loan_value" type="number" class="form-control" placeholder="Loan value" aria-label="Loan value">
                    </div>
                </div>
                <div class="row align-items-center p-1">
                    <div class="col">
                        <label for="fee" class="form-label">Número de cuotas</label>
                    </div>
                    <div class="col">
                        <input id="fee" type="number" class="form-control" placeholder="Fee" aria-label="Fee">
                    </div>
                </div>
                <div class="row align-items-center p-1">
                    <div class="col">
                        <label for="Interest" class="form-label">% Intereses</label>
                    </div>
                    <div class="col">
                        <input id="interest" type="number" class="form-control" placeholder="Interest" aria-label="Interest">
                    </div>
                </div>
                <div class="row align-items-center p-1">
                    <div class="col">
                        <label for="Monthly interest" class="form-label">Interés mensual</label>
                    </div>
                    <div class="col">
                        <input id="monthly_interest" type="text" class="form-control" placeholder="Monthly interest" aria-label="Monthly interest" readonly>
                    </div>
                </div>
                <div class="row align-items-center p-1">
                    <div class="col">
                        <label for="Total interest" class="form-label">Total intereses</label>
                    </div>
                    <div class="col">
                        <input id="total_interest" type="text" class="form-control" placeholder="Total interest" aria-label="Total interest" disabled>
                    </div>
                </div>
                <div class="row align-items-center p-1">
                    <div class="col">
                        <label for="Total to pay" class="form-label">Total a pagar</label>
                    </div>
                    <div class="col">
                        <input id="total_to_pay" type="text" class="form-control" placeholder="Total to pay" aria-label="Total to pay" disabled>
                    </div>
                </div>
                <div class="row align-items-center p-1">
                    <div class="col">
                        <label id="monthly_fee_text" for="Monthly fee" class="form-label"># cuotas de</label>
                    </div>
                    <div class="col">
                        <input id="monthly_fee" type="text" class="form-control" placeholder="Monthly fee" aria-label="Monthly fee" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection