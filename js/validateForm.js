/* global $, alert , console */

$(function () {
    "use strict";

    var nameError = true,
        emailError = true,
        messageError = true;

    $("#fullname").blur(function () {
        if ($(this).val().length < 3) {
            $(this).css("border", "2px solid darkred").parent().find(".alert").fadeIn(300).end().find(".astric").fadeIn(100);
            nameError = true;
        } else {
            $(this).css("border", "").parent().find(".alert").fadeOut(300).end().find(".astric").fadeOut(100);
            nameError = false;
        }
    });

    $("#email").blur(function () {
        if ($(this).val() === "") {
            $(this).css("border", "2px solid darkred").parent().find(".alert").fadeIn(300).end().find(".astric").fadeIn(100);
            emailError = true;
        } else {
            $(this).css("border", "").parent().find(".alert").fadeOut(300).end().find(".astric").fadeOut(100);
            emailError = false;
        }
    });
    $("#message").blur(function () {
        if ($(this).val().length < 10) {
            $(this).css("border", "2px solid darkred").parent().find(".alert").fadeIn(300).end().find(".astric").fadeIn(100);
            messageError = true;
        } else {
            $(this).css("border", "").parent().find(".alert").fadeOut(300).end().find(".astric").fadeOut(100);
            messageError = false;
        }
    });


    $('form').submit(function(e){
        if (nameError === true || emailError === true || messageError === true){
            e.preventDefault();
            $('#fullname , #email , #message').blur();
        }
    })

});
