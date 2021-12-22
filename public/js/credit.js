$(document).ready(function() {

    $('#loan_value').keyup(function (event){
        console.log(this.value);
        calculate();
    });

    $('#fee').keyup(function (event){
        console.log(this.value);
        calculate();
    });

    $('#interest').keyup(function (event){
        console.log(this.value);
        calculate();
    });

    $('#monthly_interest').keyup(function (event){
        console.log(this.value);
        
    });

    $('#total_interest').keyup(function (event){
        console.log(this.value);
        
    });

    $('#total_to_pay').keyup(function (event){
        console.log(this.value);
        
    });

    $('#monthly_fee').keyup(function (event){
        console.log(this.value);
        
    });

    function calculate(){
        loan_value = parseFloat($('#loan_value').val());
        fee = parseFloat($('#fee').val());
        interest = parseFloat($('#interest').val());
        
        if (loan_value>0 && fee>0 && interest>0) {
            console.log(loan_value+' '+fee+' '+interest);
            mi = (loan_value*interest)/100;
            $('#monthly_interest').val(mi.toFixed(2));
            ti = mi*fee;
            $('#total_interest').val(ti.toFixed(2));
            tp = loan_value+ti;
            $('#total_to_pay').val(tp.toFixed(2));
            mf = tp/fee;
            $('#monthly_fee').val(mf.toFixed(2));
            $('#monthly_fee_text').text(fee+' cuotas de');
        }
    }

});