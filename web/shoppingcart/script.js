var firstNameValid = true;
var lastNameValid = true;
var phoneNumberValid = true;
var creditValid = true;
var expValid = true;

function validFirstName(el){
    var pattern = /[a-z]/ig;
    var str = el.value;

    var isValid = pattern.test(str);
    if(isValid){
        document.getElementById('firstNameError').innerHTML = "";
        firstNameValid = true;
    }
    else{
        document.getElementById('firstNameError').innerHTML = "Error: Enter a valid name.";
        firstNameValid = false;
    }
}

function validLastName(el){
    var pattern = /^[a-z]*$/ig;
    var str = el.value;

    var isValid = pattern.test(str);
    if(isValid){
        document.getElementById('lastNameError').innerHTML = "";
        lastNameValid = true;
    }
    else{
        document.getElementById('lastNameError').innerHTML = "Error: Enter a valid last name.";
        lastNameValid = false;
    }
}
function validPhoneNumber(el){
    var pattern = /^\d{3}[\-]\d{3}[\-]\d{4}$/;
    var str = el.value;

    var isValid = pattern.test(str);
    if(isValid){
        document.getElementById('phoneError').innerHTML = "";
        phoneNumberValid = true;
    }
    else{
        document.getElementById('phoneError').innerHTML = "Error: Phone number should be in the format: XXX-XXX-XXXX";
        phoneNumberValid = false;
    }

}
function isCreditValid(el){
    var one = /^\d{16}$/;
    var two = /^\d{4} \d{4} \d{4} \d{4}$/;
    var three = /^\d{4}\-\d{4}\-\d{4}\-\d{4}$/;
    var str = el.value;

    var isPatternAValid = one.test(str);
    var isPatternBValid = two.test(str);
    var isPatternCValid = three.test(str);

    if(isPatternAValid || isPatternBValid || isPatternCValid){
        document.getElementById('CreditError').innerHTML = "";
        creditValid = true;
    }
    else{
        document.getElementById('CreditError').innerHTML = "Error: Credit card should be in format: XXXX XXXX XXXX XXXX";
        creditValid = false;
    }

}
function isExpValid(el){
    var pattern = /^[0-1]\d\/([0-2]\d|3[0-1])$/;
    var str = el.value;

    var isValid = pattern.test(str);
    if(isValid){
        document.getElementById('expError').innerHTML = "";
        expValid = true;
    }
    else{
      
        document.getElementById('expError').innerHTML = "Error: Expiration date should be in format: MM/YY";
        expValid = false;

    }
}


function validAll() {

    if(!expValid) {
        document.getElementsByName('exp_date')[0].focus();
    }

    if(!creditValid) {
        document.getElementsByName('credit_card')[0].focus();
    }

    if(!phoneNumberValid) {
        document.getElementsByName('phone_number')[0].focus();
    }

    if(!lastNameValid) {
        document.getElementsByName('last_name')[0].focus();
    }

    if (!firstNameValid) {
        document.getElementsByName('first_name')[0].focus();
    }

    if(expValid && creditValid && phoneNumberValid && lastNameValid && firstNameValid) {
        return true;
    }
    else {
        return false;
    }

}
function totalCost(){
    var x = document.getElementsByClassName('check');
    var y = new Array(4);


    y[0] = document.getElementById('watchOne').innerHTML;
    y[1] = document.getElementById('watchTwo').innerHTML;
    y[2] = document.getElementById('watchThree').innerHTML;
    y[3] = document.getElementById('watchFour').innerHTML;


    var total = 0.00;
    for(var i = 0; i < 4; i++){
        if(x[i].checked == true) {
            total += parseFloat(y[i]);
        }
    }

    x = document.getElementById('total');
    x.value = "$" + total;
    
}