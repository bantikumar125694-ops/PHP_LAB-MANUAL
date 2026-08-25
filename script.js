// Registration

const registerForm = document.getElementById("registerForm");

if (registerForm) {

    registerForm.addEventListener("submit", function(e) {

        e.preventDefault();

        const username =
        document.getElementById("regUsername").value;

        const email =
        document.getElementById("regEmail").value;

        const password =
        document.getElementById("regPassword").value;

        localStorage.setItem("username", username);
        localStorage.setItem("email", email);
        localStorage.setItem("password", password);

        const msg =
        document.getElementById("registerMsg");

        msg.innerHTML =
        "Registration Successful! Redirecting...";

        msg.style.color = "green";

        setTimeout(function() {
            window.location.href = "login.html";
        }, 2000);

    });

}


// Login

const loginForm = document.getElementById("loginForm");

if (loginForm) {

    loginForm.addEventListener("submit", function(e) {

        e.preventDefault();

        const username =
        document.getElementById("loginUsername").value;

        const password =
        document.getElementById("loginPassword").value;

        const savedUsername =
        localStorage.getItem("username");

        const savedPassword =
        localStorage.getItem("password");

        const msg =
        document.getElementById("loginMsg");

        if (
            username === savedUsername &&
            password === savedPassword
        ) {

            msg.innerHTML =
            "Login Successful!";

            msg.style.color = "green";

        } else {

            msg.innerHTML =
            "Invalid Username or Password!";

            msg.style.color = "red";
        }

    });

}
