
function login() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username == "admin" && password == "123") {
        window.location.href = '/velotto/home';
    } else {
        alert("Invalid username or password. Please try again.");
    }
}
