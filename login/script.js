function validateform() {
    var user = document.grtElementById("username").value;
    var pass = document.grtElementById("password").value;
    if (user === "" || pass === "") {
        alert("Preencha todos os campos.");
        return false;
    }
    return true;
}