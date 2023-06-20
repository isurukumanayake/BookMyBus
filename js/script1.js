function checkPassword(){
    if( document.getElementById('pass1').value == document.getElementById('pass2').value ){
       
    }
    else{
        alert("Try again!Passwords mismatched");
        return false;
    }
}
function enableButton(){
    if(document.getElementById('check1').checked){
        document.getElementById('btnsub').disabled = false ;
    }
    else{
        document.getElementById('btnsub').disabled = true ;
    }
}