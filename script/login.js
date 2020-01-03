var loginForm = document.querySelector("#loginForm");
var loginEmail = document.querySelector("#loginEmail");
var loginPassword = document.querySelector("#loginPassword");
var registerForm = document.querySelector("#registerForm");
var registerEmail = document.querySelector("#registerEmail");
var registerPassword = document.querySelector("#registerPassword");
var registerUsername = document.querySelector("#username");
var loginError = document.querySelector("#loginError");
var registerError = document.querySelector("#registerError");


$(document).ready(function() {
    $(".register").hide();

    $("#login").click(function() {
        $(".register").hide();
        $(".login").show();
    })

    $("#register").click(function() {
        $(".login").hide();
        $(".register").show();
    })
});


function loginValidate(){

    loginEmail.style.border = "1px solid rgb(63, 63, 63)";
    loginPassword.style.border = "1px solid rgb(63, 63, 63)";

    if(loginEmail.value == "" || loginPassword.value == "")
    {
        if(loginEmail.value == "")
        {
            loginEmail.style.border = "1px solid red";
        }
        if(loginPassword.value == "")
        {
            loginPassword.style.border = "1px solid red";
        }        
        return false;
    }
    else
    {
        return true;
    }
}


function registerValidate(){

    registerUsername.style.border = "1px solid rgb(63, 63, 63)";
    registerPassword.style.border = "1px solid rgb(63, 63, 63)";
    registerEmail.style.border = "1px solid rgb(63, 63, 63)"; 

    if(registerEmail.value == "" || registerPassword.value == "" || registerUsername == "")
    {
        if(registerUsername.value == "")
        {
            registerUsername.style.border = "1px solid red";
        }
        if(registerPassword.value == "")
        {
            registerPassword.style.border = "1px solid red";
        }
        if(registerEmail.value == "")
        {
            registerEmail.style.border = "1px solid red";            
        }        
        return false;
    }
    else
    {
        return true;
    }
}


loginForm.onsubmit = function(e){
    loginError.style.display = "none";
    return loginValidate();
}

registerForm.onsubmit = function(e){
    registerError.style.display = "none";
    return registerValidate();
}