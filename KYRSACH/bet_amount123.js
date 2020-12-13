document.getElementById('clear').onclick  = function() 
{
             let chislo = Number(document.getElementById('clear').value);
             let amount_val = Number(document.getElementById('amount').value);
            document.getElementById('amount').value = "";
             
}


document.getElementById('1').onclick  = function() 
{
    let chislo = Number(document.getElementById('1').value);
    let amount_val = Number(document.getElementById('amount').value);
    amount_val = amount_val + chislo;
    document.getElementById('amount').value =  amount_val;

}

document.getElementById('10').onclick  = function() 
{
             let chislo = Number(document.getElementById('10').value);
             let amount_val = Number(document.getElementById('amount').value);
             amount_val = amount_val + chislo;
             document.getElementById('amount').value =  amount_val;
}

document.getElementById('100').onclick  = function() 
{
             let chislo = Number(document.getElementById('100').value);
             let amount_val = Number(document.getElementById('amount').value);
             amount_val = amount_val + chislo;
             document.getElementById('amount').value =  amount_val;

}

document.getElementById('1000').onclick  = function() 
{
             let chislo = Number(document.getElementById('1000').value);
             let amount_val = Number(document.getElementById('amount').value);
             amount_val = amount_val + chislo;
             document.getElementById('amount').value =  amount_val;
}


document.getElementById('1/2').onclick  = function() 
{
             let chislo = Number(document.getElementById('1/2').value);
             let amount_val = Number(document.getElementById('amount').value);
             amount_val = amount_val / 2;
             document.getElementById('amount').value =  amount_val;
}

document.getElementById('*2').onclick  = function() 
{
             let chislo = Number(document.getElementById('*2').value);
             let amount_val = Number(document.getElementById('amount').value);
             amount_val = amount_val * 2;
             document.getElementById('amount').value =  amount_val;
}