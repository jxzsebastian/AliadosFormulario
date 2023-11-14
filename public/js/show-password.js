    function showPassword(clase) {
        var passwordInput = document.getElementById(clase)

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }
