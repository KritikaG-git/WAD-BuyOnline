function validateLogin() {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "validateCustomerLogin.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            if (xhr.responseText.includes("Success")) {
                window.location.href = "buying.htm";
            } else {
                document.getElementById('loginMessage').innerHTML = xhr.responseText;
            }
        }
    };
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    xhr.send("email=" + encodeURIComponent(email) + "&password=" + encodeURIComponent(password));
    return false; // Prevent default form submission
}
