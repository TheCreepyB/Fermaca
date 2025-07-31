const errorPW = document.getElementById("errorPassword");
const errorUS = document.getElementById("errorUser");
const editDIV = document.getElementById("managerError");


function errorLogIn(){
    if(errorPW.id == "errorPassword" || errorUS == "errorUser"){
        editDIV.innerHTML = "Usuario o contraseña incorrecto.";
    }else{
        editDIV.innerHTML = 'Usuario no registrado.';
    }
}
window.addEventListener('load', errorLogIn);