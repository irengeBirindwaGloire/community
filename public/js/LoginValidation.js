(function ($) {
    "use strict";

    verification();

    function verifyInput() {
        const Username = document.getElementsByName("Username");
        const LastName = document.getElementsByName("LastName");
        const FirstName = document.getElementsByName("FirstName");
        const Email = document.getElementsByName("Email");
        const Ecoles = document.getElementsByName("Ecoles");
        const Options = document.getElementsByName("Options");
        const Password = document.getElementsByName("Password");
        const Genre = document.getElementsByName("Genre");

        if (Username.value != null && typeof '') {
            $("#messageUser").html("Ce champs est obligatoire svp!")
            return true
        } else {
            $("#messageUser").html(" ")
        }

        if (LastName != null && typeof '') {
            $("#messageLast").html("Ce champs est obligatoire svp!")
            return true
        } else {
            $("#messageLast").html(" ")
        }

        if (FirstName != null && typeof '') {
            $("#messageFirst").html("Ce champs est obligatoire svp!")
            return true
        } else {
            $("#messageFirst").html(" ")
        }

        if (Genre != null && typeof '') {
            $("#messageGenre").html("Ce champs est obligatoire svp!")
            return true
        } else {
            $("#messageGenre").html(" ")
        }

        if (Email != null && typeof '') {
            $("#messageEmail").html("Ce champs est obligatoire svp!")
            return true
        } else {
            $("#messageEmail").html(" ")
        }

        if (Ecoles != null && typeof 0) {
            $("#messageEcole").html("Ce champs est obligatoire svp!")
            return true
        } else {
            $("#messageEcole").html(" ")
        }

        if (Options != null && typeof 0) {
            $("#messageOption").html("Ce champs est obligatoire svp!")
            return true
        } else
            $("#messageOption").html(" ")

        //Verirification pass Word
        if (Password != null && typeof 0) {
            $("#messagePass").html("Ce champs est obligatoire svp!")
            return true
        } else {
            $("#messagePass").html(" ")
        }
        return false;
    }

    function verification(params) {
        document.getElementById("termContrat").checked = false
        document.getElementById("authForm").disabled = true
    }

    $("#termContrat").on('click', function () {
        const item = document.getElementById("termContrat");
        if (item.checked == true && verifyInput() == true) {
            document.getElementById("authForm").disabled = false;
        } else
            document.getElementById("authForm").disabled = true;
    })

    $('#Password').on('keyup', function () {
        const password = $("#Password").val();
        const lengthPass = password.length
        if (lengthPass < 4) {
            document.getElementById("Password").style.border = "2px solid red"
            $("#messagePass").html("Must be 4-20 characters long.")
        } else {
            document.getElementById("Password").style.border = "2px solid green"
            $("#messagePass").html(" ")
        }
    })

    $('#ConfirmPassword').on('keyup', function name(params) {
        const password = $("#Password").val();
        const confirmPassword = $("#ConfirmPassword").val();
        const lengthConfPass = confirmPassword.length

        if (lengthConfPass < 4) {
            if (password !== confirmPassword) {
                document.getElementById("ConfirmPassword").style.border = "2px solid red"
                $("#messageConfirm").html("Mot de passe n'est pas conforme.")
            }
        } else {
            document.getElementById("ConfirmPassword").style.border = "2px solid green"
            $("#messageConfirm").html(" ")
        }
    })

})(jQuery);

