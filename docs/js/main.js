function validar() {
    /*Almacenaos los valores de las cajas en los que introducimos los datos*/

    var mail, password, expresion;
    mail = document.getElementById("mail").value;
    password = document.getElementById("password").value;
    /*Estructura que tiene que tener un correo electronico: texto123@texto.com, .es, .net ...*/
    expresion = /\w+@\w+\.+[a-z]/;
    /***************************************************************/
    if (mail === "" || password === "") {
        alert("Error. No ha introducido datos, está vacío. Por favor, introduzca un correo y password válidos.");
        return false;
    } else if (mail.length > 50) {
        alert("Error. El número de longitud de su correo supera el límite permitido. Por favor, introduzca un correo válidos.");
        return false;
    } else if (!expresion.test(mail)) {
        alert("Error. El correo introducido no es válido.Por favor, introduzca un correo válido.");
        return false;
    } else if (password.length < 4 || password.length > 8) {
        alert("Error. El password introducido no es un parámetro válido. Número de caracteres mínimo de 4 y máximo de 8");
        return false;
    }
}
/*******************************************************************************************/
function registro() {
    var usuario, mail, password, rpassword, expresion;
    usuario = document.getElementById("usuario").value;
    mail = document.getElementById("mail").value;
    password = document.getElementById("password").value;
    rpassword = document.getElementById("rpassword").value;
    /*Estructura que tiene que tener un correo electronico: texto123@texto.com, .es, .net ...*/
    expresion = /\w+@\w+\.+[a-z]/;
    /***************************************************************/
    if (usuario === "" || mail === "" || password === "" || rpassword === "") {
        alert("Error. No ha introducido datos, está vacío. Por favor, introduzca valores válidos.");
        return false;
    } else if (usuario.length > 25) {
        alert("Error. El número de longitud de su usuario supera el límite permitido. Por favor, introduzca un usuario válido.");
        return false;
    } else if (mail.length > 50) {
        alert("Error. El número de longitud de su correo supera el límite permitido. Por favor, introduzca un correo válidos.");
        return false;
    } else if (!expresion.test(mail)) {
        alert("Error. El correo introducido no es válido.Por favor, introduzca un correo válido.");
        return false;
    } else if (password.length < 4 || password.length > 8) {
        alert("Error. El password introducido no es un parámetro válido. Número de caracteres mínimo de 4 y máximo de 8");
        return false;
    } else if (rpassword.length < 4 || rpassword.length > 8) {
        alert("Error. El password introducido no es un parámetro válido. Número de caracteres mínimo de 4 y máximo de 8");
        return false;
    }
    if (password != rpassword) {
        alert("Error. Las contraseñas introducidas no son iguales. Por favor, introduzca valores de contraseña válidos.");
        return false;
    } else {
        alert("Muchas gracias " + usuario + ", por registrarse en nustra web. En breves instantes recibirá un mail a su cuenta de " + mail + " en donde se le confirmará su registro. ");
        return true;
    }
}