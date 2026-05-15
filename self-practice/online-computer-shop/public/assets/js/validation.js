function validateRegister() {

    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    if(name == "" || email == "" || password == "") {

        alert("All fields are required");

        return false;
    }

    if(password.length < 8) {

        alert("Password must be at least 8 characters");

        return false;
    }

    return true;
}