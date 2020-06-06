$(document).ready(function(){

    $(".signUpForm").hide();
    $("#errorLabel").hide();
    $(".signUpLink").click(function(){
        $(".signUpForm").show();
        $(".loginForm").hide();
        $("#mainTitle").hide();
    });
    $(".loginLink").click(function(){
        $(".loginForm").show();
        $(".signUpForm").hide();
        $("#mainTitle").show();
        
    });
 

});
