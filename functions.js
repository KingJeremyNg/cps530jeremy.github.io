function validateForm() {
    var x = document.forms["login"]["uname"].value;
    var y = document.forms["login"]["psw"].value;
    if (x == "jeremyng" && y == "jeremyng") {
        return true;
    }
    else {
        alert("Failed to login");
        return false;
    }
};