function checkAuth() {
    let usernameInput = document.querySelector('#username');
    let passwordInput = document.querySelector('#password');
    if(usernameInput.value == "jeremyng" && passwordInput.value == "jeremyng") {
        alert("Successfully Logged in: Redirecting");
        window.location.assign("main.html");
    } else {
        alert("Wrong Username or Password!");
        usernameInput.value = "";
        passwordInput.value = "";
    }
}