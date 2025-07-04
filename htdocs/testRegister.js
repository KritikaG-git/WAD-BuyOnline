var xhr = new XMLHttpRequest();

function registerCustomer() {
    var formData = new FormData(document.getElementById('registrationForm'));
    xhr.open("POST", "register.php", true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('msg').innerHTML = xhr.responseText;
        }
    };
    xhr.send(formData);
    return false;  // Prevent default form submission
}
